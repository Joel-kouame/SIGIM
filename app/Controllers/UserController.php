<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use App\Models\PatientModel;
use App\Models\RendezvousModel;

class UserController extends BaseController
{
    public function user_login()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'email' => 'required|valid_email',
            'password' => 'required',
        ]);

        if (!$validation->run($this->request->getPost())) {
            return redirect()->to(base_url('login'))->withInput()->with("fail", $validation->listErrors());
        } else {
            $users = new UserModel();
            $email = $this->request->getVar('email');
            $mdp = $this->request->getVar('password');

            $user = $users->where('email', $email)->first();

            if ($user) {

                if (password_verify($mdp, $user['mdp'])) {

                    $db = \Config\Database::connect();

                    session()->set('users', $user);

                    session()->set('id', $user['id']);
                    session()->set('email', $user['email']);
                    session()->set('isLoggedIn', true);
                    session()->set('role', $user['role']);

                    $get_my_session = session()->get('users')['id'];

                    $statusDisconnected = [
                        'user_status' => 1,
                    ];
        
                    $db->table('users')->set($statusDisconnected)->where('id' , $get_my_session)->update();


                    // Redirecting to dashboard after login
                    if ($user['role'] == "prosante") {
                        return redirect()->to(base_url('dashboardProsante'));
                    } elseif ($user['role'] == "patient") {
                        return redirect()->to(base_url('dashboardPatient'));
                    } else {
                        return redirect()->to(base_url('login'))->with("fail", "Mot de passe ou Email incorrect");
                    }
                } else {

                    return redirect()->to(base_url('login'))->with("fail", "Mot de passe incorrect");
                }
            } else {
                return redirect()->to(base_url('login'))->with("fail", "Utilisateur non trouvé");
            }
        }
    }


    public function create_login()
    {
        return view('Backend/login');
    }

   
    public function logoutPatient()
    {

        $db = \Config\Database::connect();

        if (isset(session('users')['id'])) {

            $get_my_session = session()->get('users')['id'];

            $statusDisconnected = [
                'user_status' => 0,
            ];

            $db->table('users')->set($statusDisconnected)->where('id' , $get_my_session)->update();

            session()->remove('users');
            return redirect()->to(base_url('login'));
        }else{

            return redirect()->to(base_url('login'));
        }
    }

    public function logoutProsante()
    {
        $db = \Config\Database::connect();

        if (isset(session('users')['id'])) {

            $get_my_session = session()->get('users')['id'];

            $statusDisconnected = [
                'user_status' => 0,
            ];

            $db->table('users')->set($statusDisconnected)->where('id' , $get_my_session)->update();

            session()->remove('users');
            return redirect()->to(base_url('login'));
        }else{

            return redirect()->to(base_url('login'));
        }
    }
}