<?php

namespace App\Controllers;
 
use App\Controllers\BaseController;
use App\Models\FablabModel;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\HopitalModel;
use App\Models\InformationModel;

class Fablab extends BaseController
{
    public function move_file($path, $photo)
    {
        if ($img = $photo) {
            if ($img->isValid() && !$img->hasMoved()) {
                $newName = $img->getRandomName();
                $img->move($path, $newName);

                return $path . $newName;
            }
        }
    }

    public function dash() # affichage du tableau de bord
    {
        if (isset(session('fablab')['id'])) {
            $fablabModel = new FablabModel();
            $fablab = $fablabModel->where('id',  session()->get('id'))->first();
            $data['fablab'] = $fablab;
            
            return view('Dashboard/adminfablab/index2', $data);
        } else {
            return redirect()->to(base_url('Fablab'));
        }
    }

    # Ajout et mise a jour des information sur le front

    public function AjoutInfo($id)
    {
        if (isset(session('fablab')['id'])) {
            $fablabModel = new FablabModel();
            $informationModel = new InformationModel();
            $fablab = $fablabModel->where('id',  session()->get('id'))->first();
            $information = $informationModel->where('id',$id)->first();
            $data['fablab'] = $fablab;
            $data['information'] = $information;
            return view('Dashboard/adminfablab/ajout_info', $data);
        } else {
            return redirect()->to(base_url('Fablab'));
        }
    }

    public function updateInfo($id)
    {
        $informationModel = new InformationModel();
    
        $data = [
            'telephone' => $this->request->getPost('telephone'),
            'email' => $this->request->getPost('email'),
            'adress' => $this->request->getPost('adress'),
            'boite_postal' => $this->request->getPost('boite_postal'),
            'facebook' => $this->request->getPost('facebook'),
            'whatsapp' => $this->request->getPost('whatsapp')
        ];
        $informationModel->update($id, $data);
        return redirect()->to(base_url('/Fablab/ajout_info/1'))->with("success", "la mise a été effectué avec succes !");
    }

    # AJOUT ET MISE A JOUR INFORMATION PERSONNELLE DASHBORD FABALAB

    public function getProfileFab()
    {
        if (session()->has('id')) {
            $fablabModel = new FablabModel();
            $fablab = $fablabModel->where('id',  session()->get('id'))->first();
            $data['fablab'] = $fablab;
            return view('Dashboard/adminfablab/profile', $data);
        } else {
            return redirect()->to(base_url('Fablab'));
        }
    }

    public function updateProfile()
    {
        $fablabModel = new FablabModel();
        $fablab = $fablabModel->where('id', session()->get('id'))->first();
        $data['fablab'] = $fablab;

        $rules = [
            'prenom_fablab' => 'required|min_length[3]|max_length[20]'
        ];

        $messages = [
            'prenom_fablab' => [
                'required' => 'Le champ prenom est requis.',
                'min_length' => 'Le prenom doit avoir au moins 3 caractères.',
                'max_length' => 'Le prenom ne peut pas dépasser 20 caractères.'
            ],

        ];

        if (!$this->validate($rules, $messages)) {
            return view('Dashboard/adminfablab/profile', ['validation' => $this->validator]);
        } else {

            $user = $this->request->getVar('my_id');

            $photo = $this->request->getFile('photo_fablab');

            // Définir le chemin du répertoire de destination pour le fichier téléchargé
            $path = 'uploads/images/';

            // Utiliser la fonction move_file() pour déplacer le fichier et obtenir le nouveau nom
            $newPic = $this->move_file($path, $photo);

            $updateData = [
                'prenom' => $this->request->getVar('prenom_fablab'),
                'domicile' => $this->request->getVar('domicile_fablab'),
                'contact' => $this->request->getVar('contact_fablab'),
            ];

            $updatePhotoData = [
                'photo' => $newPic,
            ];

            $db = \Config\Database::connect();

            $db->table('fablabs')->set($updateData)->where('id', $user)->update();

            $verif_photo = $_FILES['photo_fablab']['name'];

            if (!empty($verif_photo)) {
                $db->table('fablabs')->set($updatePhotoData)->where('id', $user)->update();
            }

            return redirect()->to(base_url('/fablab/profile/'))->with("success", "la mise a été effectué avec succes !");
        }
    }

    public function updatePasswordProfile()
    {
        $fablabModel = new FablabModel();
        $fablab = $fablabModel->where('id',  session()->get('id'))->first();
        $data['fablab'] = $fablab;

        $rules = [
            'actual_password_fablab' => 'required|min_length[7]',
            'new_password_fablab' => 'required|min_length[7]',
            'confirm_new_password_fablab' => 'required|min_length[7]',
        ];

        $messages = [
            'actual_password_fablab' => [
                'required' => 'Le champ nom est requis.',
                'min_length' => 'Le champ doit avoir au moins 7 caractères.'
            ],
            'new_password_fablab' => [
                'required' => 'Le champ prenom est requis.',
                'min_length' => 'Le champ doit avoir au moins 7 caractères.'
            ],
            'confirm_new_password_fablab' => [
                'required' => 'Le champ service est requis.',
                'min_length' => 'Le champ doit avoir au moins 7 caractères.'
            ],
        ];

        if (!$this->validate($rules, $messages)) {
            return view('Dashboard/adminfablab/profile', ['validation' => $this->validator]);
        } else {
            
            $user = $this->request->getVar('my_id');

            $actual_password_fablab = $this->request->getVar('actual_password_fablab');

            $new_password_fablab = $this->request->getVar('new_password_fablab');
            $hash_new_password = password_hash($new_password_fablab, PASSWORD_BCRYPT);

            $confirm_new_password_fablab = $this->request->getVar('confirm_new_password_fablab');

            $updateMdp = [
                'mdp' => $hash_new_password,
            ];

            $message = "<!DOCTYPE html>" .
            "<html lang='fr'>" .
            "<head>" .
            "<meta charset='UTF-8'>" .
            "<meta name='viewport' content='width=device-width, initial-scale=1.0'>" .
            "<title>Mail SIGIM</title>" .
            "</head>" .
            "<body style='background-color:white;font-family:verdana;width:100%;display:flex;justify-content:center;'>" .
            "<section style='border:2px solid #dbdbdb;text-align:center;display:flex;justify-content:center;max-width:400px;'>" .
            "<div>" .
            "<div class='header'>" .
            "<img src='../assets/images/sigim.png'>" .
            "</div>" .
            "<div class='body-section'>" .
            "<div class='title-section' style='font-size:26px;font-weight:bolder;margin:16px 0;text-transform:capitalize'>" . "felicitaion" . "</div>" .
            "<hr style='width: 50%;'>" .
            "<div class='body-section-content' style='padding:16px;font-style:justify'>" .
            "Suite à votre requete d'integrer la famille" . "<b>" . "<a href='https://www.youtube.com' style='text-transform: underline;'>" . "SIGIM" . "</a>" . "</b>" . "nous venons par ce mail vous informer que votre compte a bien été crée avec succes !! " . "<br>" .
            "Vos informations de connexion ce trouve ci-deçous :" .
            "<div style='font-weight:bold;'>" . "lien de connexion :" . "<span>" . "<a href='https://www.youtube.com'>" . "lien.com" . "</a>" . "</span>" . "</div>" .
            "<div style='font-weight:bold;'>" . "Nouveau Mot de passe :" . "<span>" . $new_password_fablab . "</span>" . "</div>" .
            "</div>" .
            "</div>" .
            "<div class='footer' style='background-color:#004aad;height:40px;display:flex;justify-content:center;align-items:center'>" .
            "<div style='font-style:italic;color:white;font-size:smaller;font-weight:bold;'>" . "@ Tout droit reservé SIGIM" . "</div>" .
            "</div>" .
            "</div>" .
            "</section>" .
            "</body>" .
            "</html>";

            $db = \Config\Database::connect();

            if (password_verify($actual_password_fablab, $fablab['mdp'])) {
                if ($new_password_fablab === $confirm_new_password_fablab) {
                    if ($hash_new_password !== $fablab['mdp']) {

                        $to = $fablab['email'];
                        $email = \Config\Services::email();
                        $email->setTo($to);
                        $email->setFrom('tcheregnimin.tuo@uvci.edu.ci');
                        $email->setSubject('Nouveau mot de passe');
                        $email->setMessage($message);
                        $email->send();
                        $data = $email->printDebugger(['headers']);
                        print_r($data);

                        
                        $db->table('fablabs')->set($updateMdp)->where('id', $user)->update();

                    } else {

                        return redirect()->to(base_url('/fablab/profile'))->with("fail", "la mise a été effectué avec succes !");
                    }
                } else {
                    return redirect()->to(base_url('/fablab/profile'))->with("fail", "mot de passe non identique !");
                }
            } else {
                return redirect()->to(base_url('/fablab/profile'))->with("fail", "ce mot de passe n'existe pas dans notre base de donnée !");
            }

            return redirect()->to(base_url('/fablab/profile'))->with("success", "Mot de passe modifié avec succes !");
        }
    }
    # FIN DE LA MISE A JOUR

    public function login()
    {
        return view('Backend/Fablab/login');
    }

    public function register()
    {
        return view('Backend/Fablab/register');
    }

    # Fonction de connexion au dashboard patient --------------

    public function loginFablab()
    {
       

        $rules = [
            'email' => 'required|min_length[6]|max_length[100]|valid_email',
            'password' => 'required',
        ];

        $messages = [
            'email' => [
                'required' => 'Le champ email est requis et doit être valide.',
            ],

            'password' => [
                'required' => 'Le champ password est requis.',
            ]

        ];
        if (!$this->validate($rules, $messages)) {
            return view('Backend/Fablab/login', ['validation' => $this->validator]);
        } else {
            $fablab = new FablabModel();
            $email =  $this->request->getVar('email');
            $mdp = $this->request->getVar('password');

            $user = $fablab->where('email', $email)->first();

            if ($user) {
                if (password_verify($mdp, $user['mdp'])) {

                    session()->set('fablab', $user);

                    session()->set('id', $user['id']);
                    session()->set('email', $user['email']);
                    session()->set('isLoggedIn', true);
                

                    return redirect()->to(base_url('/Fablab/dash'));
                } else {

                    return redirect()->to(base_url('/Fablab'))->with('fail', ' Email ou Mot de passe incorrect');
                }
            } else {
            }
        }   
    }

    # ------------ Session du dashboard patient -------------------

    # ----- Enregistrement des informations du fablab dans la base de données--------------

    public function saveFablab()
    {
        $rules = [
            'nom' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|min_length[6]|max_length[100]|valid_email|is_unique[fablabs.email]',
            'mdp' => 'required|min_length[8]|max_length[255]',
            'mdp_c' => 'required|matches[mdp]',
        ];

        $messages = [
            'nom' => [
                'required' => 'Le champ nom est requis.',
                'min_length' => 'Le nom doit avoir au moins 3 caractères.',
                'max_length' => 'Le nom ne peut pas dépasser 20 caractères.'
            ],

            'email' => [
                'required' => 'Le champ email est requis et doit être valide.',
            ],

            'mdp' => [
                'required' => 'Le champ password est requis.',
                'min_length' => 'Le password doit avoir au moins 8 caractères.',
                'max_length' => 'Le password ne peut pas dépasser 20 caractères.'
            ],

            'mdp_c' => [
                'required' => 'Le champ confirm_password est requis.',
                'min_length' => 'Le confirm_password doit avoir au moins 8 caractères.',
                'max_length' => 'Le confirm_password ne peut pas dépasser 20 caractères.'
            ],

        ];

        if (!$this->validate($rules, $messages)) {
            return view('Backend/Fablab/register', ['validation' => $this->validator]);
        } else {
            $fablab = new FablabModel();
            $token = bin2hex(random_bytes(20));
            $data = [
                'nom' => $this->request->getVar('nom'),
                'email' => $this->request->getVar('email'),
                'mdp' => password_hash($this->request->getVar('mdp'), PASSWORD_BCRYPT),
                'lien' => $token,
            ];
        }

        /*   $message = "Merci de votre inscription. Activer votre compte".anchor(uri:'/Fablab/activate/'.$data['lien'], title:' Activer maintenant', attributes:''); */


        $message = "<!DOCTYPE html>" .
            "<html lang='fr'>" .
            "<head>" .
            "<meta charset='UTF-8'>" .
            "<meta name='viewport' content='width=device-width, initial-scale=1.0'>" .
            "<title>Mail SIGIM</title>" .
            "</head>" .
            "<body style='background-color:white;font-family:verdana;width:100%;display:flex;justify-content:center;'>" .
            "<section style='border:2px solid #dbdbdb;text-align:center;display:flex;justify-content:center;max-width:400px;'>" .
            "<div>" .
            "<div class='header'>" .
            "<img src='../assets/images/sigim.png'>" .
            "</div>" .
            "<div class='body-section'>" .
            "<div class='title-section' style='font-size:26px;font-weight:bolder;margin:16px 0;text-transform:capitalize'>" . "felicitaion" . "</div>" .
            "<hr style='width: 50%;'>" .
            "<div class='body-section-content' style='padding:16px;font-style:justify'>" .
            "Suite à votre requete d'integrer la famille" . "<b>" . "<a href='https://www.youtube.com' style='text-transform: underline;'>" . "SIGIM" . "</a>" . "</b>" . "nous venons par ce mail vous informer que votre compte a bien été crée avec succes !! " . "<br>" .
            "Vos informations de connexion ce trouve ci-deçous :" .
            "<div style='font-weight:bold;'>" . "lien de connexion :" . "<span>" . "<a href='https://www.youtube.com'>" . "lien.com" . "</a>" . "</span>" . "</div>" .
            "<div style='font-weight:bold;'>" . "Email :" . "<span>" . $this->request->getVar('email') . "</span>" . "</div>" .
            "<div style='font-weight:bold;'>" . "Mot de passe :" . "<span>" . $this->request->getVar('mdp') . "</span>" . "</div>" .
            "</div>" .
            "</div>" .
            "<div class='footer' style='background-color:#004aad;height:40px;display:flex;justify-content:center;align-items:center'>" .
            "<div style='font-style:italic;color:white;font-size:smaller;font-weight:bold;'>" . "@ Tout droit reservé SIGIM" . "</div>" .
            "</div>" .
            "</div>" .
            "</section>" .
            "</body>" .
            "</html>";


        $query = $fablab->insert($data);

        if (!$query) {
            return redirect()->back('/Fablab/register')->with("fail", "quelque chose s'est mal pasesée");
        } else {
            $to = $this->request->getVar('email');
            $email = \Config\Services::email();
            $email->setTo($to);
            $email->setFrom('tcheregnimin.tuo@uvci.edu.ci');
            $email->setSubject('Confirmation inscription');
            $email->setMessage($message);
            $email->send();
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
        // $this->sendConfirmationEmail($data['email']);
        return redirect()->to(base_url('/Fablab/register'))->with("success", "Votre compte a été crée avec succés");
    }

    public function activate($token)
    {
        $fablab = new FablabModel();
        $verifToken = $fablab->where('lien', $token)->findAll();
        if (count($verifToken) > 0) {
            $data['status'] = 1;
            $activateFablab = $fablab->update($verifToken[0]['id'], $data);
            if ($activateFablab) {
                return redirect()->to('/Fablab')->with('success', 'Votre compte a été activé, vous pouvez maintenant vous connecter.');
            }
        } else {
            echo 'Not found';
        }
    }

    public function datatable()
    {
        if (isset(session('fablab')['id'])) {
            $fablabModel = new FablabModel();
            $hopitalModel = new HopitalModel();
            $hopital = $hopitalModel->findAll();
            $fablab = $fablabModel->where('id',  session()->get('id'))->first();
            $data['hopital'] = $hopital;
            $data['fablab'] = $fablab;
            return view('Dashboard/adminfablab/tables-datatable', $data);
        } else {
            return redirect()->to(base_url('Fablab'));
        }
    }

    # Fonction pour afficher le nombre d'hôpitaux enregistré------------------
    public function nbHospitalEnregistre()
    {
        // Chargement du modèle HopitalModel
        $hopitalModel = new HopitalModel();

        // Appel de la méthode getNbHopital() du modèle
        $nbHopital = $hopitalModel->getNbHopital();

        // Création d'un tableau associatif contenant le nombre d'hôpitaux
        $data['nbHopital'] = $nbHopital;

        // // Conversion du tableau associatif en format JSON
        // $jsonData = json_encode($data);

        // var_dump($data['nbHopital']);
        // exit;

        return $data;
    }

    public function create_hopital()
    {
        if (isset(session('fablab')['id'])) {
            $fablabModel = new FablabModel();
            $informationModel = new InformationModel();
            $fablab = $fablabModel->where('id',  session()->get('id'))->first();
            $information = $informationModel->where('id',  session()->get('id'))->first();
            $data['information'] = $information;
            $data['fablab'] = $fablab;
            return view('Dashboard/adminfablab/forms_hopital', $data);
        } else {
            return redirect()->to(base_url('/Fablab'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('Fablab'));
    }
}
