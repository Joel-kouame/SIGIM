<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use \App\Models\UserModel;
use Exception;
use ReflectionException;

class Users extends BaseController
{
    public function index()
	{
        try {
            $users = service('user')->getUsers();
            
            return $this->getResponse([ 'data' => $users ]);
        } catch (ReflectionException | Exception $e) {
            return $this->getResponse($e, ResponseInterface::HTTP_INTERNAL_SERVER_ERROR);
        }
	}
    
    /**
     * Get user by id.
     */
    public function show(int $id)  
    {
        $user = service('user')->findUserById($id);
        
        if (!$user) {
            return $this->getNotFoundResponse();
        }
        
        return $this->getResponse(['data' => $user]);
    }
    
    /**
     * Create a new user.
     */
    public function create()  
    {
        helper(['form']);
        
        if ($this->request->isAjax()) {
            $rules = [
                'username'  => 'required|alpha_numeric_punct|min_length[3]|max_length[255]',
                'email'     => 'required|valid_email|is_unique[users.email]',
                'password'  => 'required|strong_password',
            ];
            
            if (!$this->validate($rules)) {
                return $this->getResponse($this->validator->getErrors(), ResponseInterface::HTTP_BAD_REQUEST);
                return $this->getResponse(view('Auth\Views\register', ['validation' => $this->validator]), ResponseInterface::HTTP_BAD_REQUEST);
                return $this->getInvalidParameterResponse();
            }
            
            // @todo: Implement captcha for registration?
            /*if (!service('captcha')->check((string)$this->request->getPost('g-recaptcha-response'))) {
                return $this->getResponse(['errors' => ['g-recaptcha-response' => lang('Auth.login.invalidCaptcha')]],
                return $this->getResponse(lang('Auth.login.invalidCaptcha'), ResponseInterface::HTTP_BAD_REQUEST);
                return $this->getErrorResponse('Captcha validation failed');
            }*/
            
            $userModel = model('User');
            $user      = new User;
            $user->setAttributes([
                'username' => $this->request->getPost('username'),
                'email'    => strtolower($this->request->getPost('email')),
                'password' => $this->request->getPost('password'),
            ]);
            
            if (!$user->save()) {
                return $this->getSaveFailedResponse('User');
            }
            
            service('auth')->attemptLogin($user, true);
            
            return $this->getResponse(['token' => service('auth')->createToken($user)]);
        } else {
            return view('Auth\Register');
        }
    }

    /**
	 * Handles the user login process.
	 */
    public function login()
    {
        helper('auth');
        
        if ($this->request->isAJAX()) {
            $credentials = [
                'login'     => $this->request->getPost('login'),
                'password'  => $this->request->getPost('password'),
            ];
            
            if (empty($credentials['login']) || empty($credentials['password'])) {
                return $this->getErrorResponse('Missing credentials');
            }
            
            // Check to see if the user is logging in with an email address or a username
            if (filter_var(strtolower($credentials['login']), FILTER_VALIDATE_EMAIL)) {
                $field = 'email';
            } else {
                $field = 'username';
            }
            
            if (!$user = model(UserModel::class)->where([$field => $credentials['login']])->first()) {
                return $this->getNotFoundResponse();
            }
            
            if (!service('auth')->checkPassword($user, $credentials['password'], $hashMatch = true)) {
                return $this->getWrongCredentialsResponse();
            }
            
            unset($user[$field]); // Remove sensitive data before sending it back to the client
            
            return $this->getResponse([
                'user'      => $user,
                'redirect'  => session('redirect') ?? base_url('/'),
            ]);
        }
        
        // Display blank page if not AJAX request
        echo view('blank', ['title' => lang('Auth.loginTitle')]);
    }
}