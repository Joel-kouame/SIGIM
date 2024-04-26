<?php

namespace App\Controllers;

use App\Models\HopitalModel;
use App\Controllers\BaseController;
use App\Models\ServiceModel;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\ProsanteModel;
use App\Models\RendezvousModel;
use App\Models\PatientModel;

class Hopital extends BaseController
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

    public function login()
    {
        return view('Backend/Hopital/login');
    }

    public function list_rendez_vous()
    {
        if (isset(session('hopital')['id'])) {
            $rendezvousModel = new  RendezVousModel();
           /* $prosanteModel = new ProsanteModel(); */
            $patientModel = new  PatientModel();
            $hopitalModel = new HopitalModel();
            $hopital = $hopitalModel->where('id', session()->get('id'))->first();

            $rendezvous = $rendezvousModel
            ->select('rendez_vous.*,hopital.id,hopital.nom_hopt,patient.user_id,patient.photo')
            ->join('hopital', 'hopital.id = rendez_vous.id_hopital', 'left') 
            ->join('patient', 'patient.user_id = rendez_vous.patient_id', 'left') 
          /*  ->join('users', 'users.id = patient.user_id', 'left') */
            ->where('rendez_vous.id_hopital', session('hopital')['id']) 
            ->findAll();


        //    var_dump($data['rdv']);
            

             $patient = $patientModel->where('user_id', session()->get('id'))->first();

             $data['hopital'] = $hopital;
             $data['rendezvous'] = $rendezvous;
             $data['patient'] = $patient;

         //    var_dump($data['rendezvous']) ;
             return view('Dashboard/adminhopital/rendez_vous_list', $data);
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    # Fonction de connexion au dashboard patient --------------

    public function loginHopital()
    {
        $hopitalModel = new HopitalModel();

        $email =  $this->request->getVar('email');
        $mdp = $this->request->getVar('password');

        $hopital = $hopitalModel->where('email_hopt', $email)->first();

        if ($hopital) {
            if (password_verify($mdp, $hopital['password_hopt'])) {
                // Vérifier si l'hôpital est suspendu
                $this->suspendreHopital($hopital['id']);
                // Si l'hôpital est suspendu, afficher un message d'erreur
                if ($hopital['status'] == 0) {
                   
                    return redirect()->to(base_url('/Hopital'))->with('fail', 'L\'hôpital est suspendu. Vous ne pouvez pas vous connecter.');
                } else {

                    session()->set('hopital', $hopital);
                    session()->set('id', $hopital['id']);
                    session()->set('email', $hopital['email_hopt']);
                    session()->set('isLoggedIn', true);

                    return redirect()->to(base_url('/Hopital/dash'));
                }
            } else {
                echo "Mot de passe incorrect";

                return redirect()->to(base_url('/Hopital'));
            }
        } else {
        }
    }

    # ------------ Session du dashboard patient -------------------

    public function dash()
    {
        if (isset(session('hopital')['id'])) {
            $hopitalModel = new  HopitalModel();
            $hopital = $hopitalModel->where('id', session('hopital')['id'])->first();
            $data['hopital'] = $hopital;
            // var_dump($hopital['id']); exit;
            return view('Dashboard/adminhopital/index3', $data);
        } else {
            return redirect()->to(base_url('/Hopital'));
        }
    }

    # ----- Enregistrement des informations du patient dans la base de données--------------

    public function saveHopital()
    {
        // if (isset(session('fablab')['id'])) {
        $rules = [
            'num_ident_hopt' => 'required|max_length[255]',
            'nom_hopt' => 'required|max_length[255]',
            'contact_hopt' => 'required|min_length[8]|max_length[255]',
            'email_hopt' => 'min_length[6]|max_length[255]|valid_email|is_unique[hopital.email_hopt]',
            'local_hopt' => 'required|max_length[255]',
            'type_etablissement_hopt' => 'required|max_length[255]',
            'prenom_dr' => 'required|min_length[3]|max_length[255]',
            'contact_dr' => 'required|min_length[8]|max_length[20]',
            'email_dr' => 'min_length[6]|max_length[255]|valid_email|is_unique[hopital.email_dr]',
            'type_de_piece_dr' => 'required|max_length[255]',
            'fichier_piece_dr' => 'uploaded[fichier_piece_dr]',
        ];

        $messages = [
            'num_ident_hopt' => [
                'required' => 'Ce champ est requis.',
                'max_length' => 'Ce champ ne depasse 255 caractère.'
            ],
            'nom_hopt' => [
                'required' => 'Ce champ est requis.',
                'max_length' => 'Ce champ ne depasse 255 caractère.'
            ],
            'contact_hopt' => [
                'required' => 'Ce champ est requis.',
                'min_length' => 'Ce champ requiere au moins 8 caractères.',
                'max_length' => 'Ce champ ne dépasse pas 255 caractères.'
            ],

            'email_hopt' => [
                'required' => 'Ce contenu doit être valide.',
            ],

            'local_hopt' => [
                'required' => 'Ce champ est requis.',
                'max_length' => 'Ce champ ne depasse 255 caractère.'
            ],

            'type_etablissement_hopt' => [
                'required' => 'Ce champ est requis.',
                'max_length' => 'Ce champ ne depasse 255 caractère.'
            ],


            'prenom_dr' => [
                'required' => 'Ce champ est requis.',
                'min_length' => 'Ce champ requiere au moins 3 caractères.',
                'max_length' => 'Ce champ ne dépasse pas 255 caractères.'
            ],


            'contact_dr' => [
                'required' => 'Ce champ est requis.',
                'min_length' => 'Ce champ requiere au moins 8 caractères.',
                'max_length' => 'Ce champ ne dépasse pas 255 caractères.'
            ],



            'email_dr' => [
                'required' => 'Ce contenu doit être valide.',
            ],


            'type_de_piece_dr' => [
                'required' => 'Ce champ est requis.',
                'max_length' => 'Ce champ ne depasse 255 caractère.'
            ],


            'fichier_piece_dr' => [
                'Ce champ est requis.',
            ],
        ];

        if (!$this->validate($rules, $messages)) {
            return view('Dashboard/adminfablab/forms_hopital', ['validation' => $this->validator]);
        } else {
            $piece = $this->request->getFile('fichier_piece_dr');

            // Définir le chemin du répertoire de destination pour le fichier téléchargé
            $path = 'uploads/fichier_hopital/';

            // Utiliser la fonction move_file() pour déplacer le fichier et obtenir le nouveau nom
            $newName = $this->move_file($path, $piece);


            $password_random_generate = bin2hex(random_bytes(10));
            $hopital = new HopitalModel();
            $token = bin2hex(random_bytes(20));
            $data = [
                'id_prosante' => $this->request->session()->get('id'),
                'num_ident_hopt' => $this->request->getVar('num_ident_hopt'),
                'nom_hopt' => $this->request->getVar('nom_hopt'),
                'contact_hopt' => $this->request->getVar('contact_hopt'),
                'email_hopt' => $this->request->getVar('email_hopt'),
                'local_hopt' => $this->request->getVar('local_hopt'),
                'type_etablissement_hopt' => $this->request->getVar('type_etablissement_hopt'),
                'nom_dr' => $this->request->getVar('nom_dr'),
                'prenom_dr' => $this->request->getVar('prenom_dr'),
                'contact_dr' => $this->request->getVar('contact_dr'),
                'email_dr' => $this->request->getVar('email_dr'),
                'type_de_piece_dr' => $this->request->getVar('type_de_piece_dr'),
                'fichier_piece_dr' => $newName,
                'password_hopt' => password_hash($password_random_generate, PASSWORD_BCRYPT),
                'lien' => $token,
            ];
        }

        // $message = "Merci de votre inscription. Activer votre compte".anchor(uri:'/Hopital/activate/'.$data['lien'], title:' Activer maintenant', attributes:'');

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
            "<div style='font-weight:bold;'>" . "Email :" . "<span>" . $this->request->getVar('email_hopt') . "</span>" . "</div>" .
            "<div style='font-weight:bold;'>" . "Mot de passe :" . "<span>" . $password_random_generate . "</span>" . "</div>" .
            "</div>" .
            "</div>" .
            "<div class='footer' style='background-color:#004aad;height:40px;display:flex;justify-content:center;align-items:center'>" .
            "<div style='font-style:italic;color:white;font-size:smaller;font-weight:bold;'>" . "@ Tout droit reservé SIGIM" . "</div>" .
            "</div>" .
            "</div>" .
            "</section>" .
            "</body>" .
            "</html>";
        // Envoi du mail avec le contenu de la variable message

        $query = $hopital->insert($data);

        if (!$query) {
            return redirect()->back('/forms_hopital')->with("fail", "quelque chose s'est mal pasesée");
        } else {
            $to = $this->request->getVar('email_hopt');
            $email = \Config\Services::email();
            $email->setTo($to);
            $email->setFrom('tcheregnimin.tuo@uvci.edu.ci');
            $email->setSubject('Confirmation inscription');
            $email->setMessage($message);
            $email->send();
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
        //$this->sendConfirmationEmail($data['email']);
        return redirect()->to(base_url('adminfablab/forms_hopital'))->with("success", "Votre compte a été crée avec succés");
    }

    public function activate($token)
    {
        $hopital = new HopitalModel();
        $verifToken = $hopital->where('lien', $token)->findAll();
        if (count($verifToken) > 0) {
            $data['status'] = 1;
            $activateHopital = $hopital->update($verifToken[0]['id'], $data);
            if ($activateHopital) {
                return redirect()->to('/Hopital')->with('success', 'Votre compte a été activé, vous pouvez maintenant vous connecter.');
            }
        } else {
            echo 'Not found';
        }
    }

    public function createServices()
    {
        if (isset(session('hopital')['id'])) {
            $hopitalModel = new HopitalModel();
            $hopital = $hopitalModel->where('id', session()->get('id'))->first();
            $data['hopital'] = $hopital;
            return view('Dashboard/adminhopital/forms_services', $data);
        } else {
            return redirect()->to(base_url('Hopital'));
        }
    }

    public function activerHopital($id)
    {
        // Chargez le modèle et récupérez l'objet correspondant au id passé en paramètre.
        $hopitalModel = new HopitalModel();
        $hopital = $hopitalModel->find($id);

        // Mets à jour le statut du rendez-vous à "Validé"
        $hopital['status'] = 1;

        // Enregistre les modifications dans la BDD
        $result = $hopitalModel->update($id, ['status' => $hopital['status']]);
        if ($result) {
            // Retourne vers la liste des rendez-vous
            return redirect()->to('/adminfablab/datatable');
        } else {
            echo 'error';
        }
    }

    public function suspendreHopital($id)
    {
        // Chargez le modèle et récupérez l'objet correspondant au id passé en paramètre.
        $hopitalModel = new HopitalModel();
        $hopital = $hopitalModel->find($id);

        // Mets à jour le statut de l'hôpital à "Suspendu"
        $hopital['status'] = 0;

        // Enregistre les modifications dans la BDD
        $result = $hopitalModel->update($id, ['status' => $hopital['status']]);
        if ($result) {
            // Retourne vers la liste des hôpitaux
            return redirect()->to('/adminfablab/datatable');
        } else {
            echo 'error';
        }
    }

    public function getServices()
    {
        if (isset(session('hopital')['id'])) {
            $serviceModel = new ServiceModel();
            $hopitalModel = new HopitalModel();
            $hopital = $hopitalModel->where('id', session()->get('id'))->first();
            $data['hopital'] = $hopital;

            $services = $serviceModel->select('services.*, hopital.*')
            ->join('hopital', 'hopital.id = services.id_hopital','left')
            ->where('services.id_hopital', session('hopital')['id'])
            ->findAll();

            $data['service'] = $services;
            return view('Dashboard/adminhopital/services_list', $data);
        } else {
            return redirect()->to(base_url('Hopital'));
        }
    }

    public function getProsante()
    {
        if (isset(session('hopital')['id'])) {

            $hopitalModel = new HopitalModel();
            $hopital = $hopitalModel->where('id',session('hopital')['id'])->first();
            $data['hopital'] = $hopital;            
            
            $prosanteModel = new ProsanteModel();
            $prosante = $prosanteModel->select('prosantes.*, hopital.*')
            ->join('hopital', 'hopital.id = prosantes.id_hopital','left')
            ->where('prosantes.id_hopital', session('hopital')['id'])
            ->findAll();

            $data['prosante'] = $prosante;

            // var_dump($prosante); exit;

            return view('Dashboard/adminhopital/prosante_list', $data);
        } else {
            return redirect()->to(base_url('Hopital'));
        }
    }

    # Fonction pour retirer un service--------------------------------
    public function deleteService($id)
    {
        $serviceModel = new ServiceModel();
        $services = $serviceModel->findAll();
        $res = $serviceModel->delete($id);
        $data['service'] = $services;
        if ($res) {
            return view('Dashboard/adminhopital/services_list', $data);
        } else {
            return view('Dashboard/adminhopital/services_list', $data);
        }
    }

    # Fonctions pour activer ou suspendre un prosanté------------------------------

    public function activerProsante($id)
    {
        // Chargez le modèle et récupérez l'objet correspondant au id passé en paramètre.
        $prosanteModel = new ProsanteModel();
        $prosante = $prosanteModel->find($id);

        // Mets à jour le statut du rendez-vous à "Validé"
        $prosante['status'] = 0;

        // Enregistre les modifications dans la BDD
        $result = $prosanteModel->update($id, ['status' => $prosante['status']]);
        if ($result) {
            // Retourne vers la liste des rendez-vous
            return redirect()->to('/prosante/prosante_list');
        } else {
            echo 'error';
        }
    }

    public function suspendreProsante($id)
    {
        // Chargez le modèle et récupérez l'objet correspondant au id passé en paramètre.
        $prosanteModel = new ProsanteModel();
        $prosante = $prosanteModel->find($id);

        // Mets à jour le statut du rendez-vous à "Validé"
        $prosante['status'] = 1;

        // Enregistre les modifications dans la BDD
        $result = $prosanteModel->update($id, ['status' => $prosante['status']]);
        if ($result) {
            // Retourne vers la liste des rendez-vous
            return redirect()->to('/prosante/prosante_list');
        } else {
            echo 'error';
        }
    }


    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('Hopital'));
    }
    
    #@@@@@@@@@@@@@@@@@@@@@@@ liste des patients @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

    public function listpa()
    {
        if (isset(session('hopital')['id'])) {
            $patientModel = new  PatientModel();
            $hopitalModel = new HopitalModel();
            $hopital = $hopitalModel->where('id', session()->get('id'))->first();

            $patient = $patientModel
            ->select('patient.*,hopital.*,users.*')
            ->join('hopital', 'hopital.id = patient.id_hopital', 'left') 
            // ->join('patient', 'patient.id_hopital = hopital.id', 'left')
            ->join('users', 'users.id = patient.user_id', 'left')
            ->where('patient.id_hopital', session('hopital')['id']) 
            ->findAll();

             $data['hopital'] = $hopital;
             $data['patient'] = $patient;

            // var_dump($data) ; exit;
             return view('Dashboard/adminhopital/liste_patient', $data);
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function getProfileHop()
    {
        if (isset(session('hopital')['id'])) {
            $hopitalModel = new HopitalModel();
            $hopital = $hopitalModel->where('id', session()->get('id'))->first();
            $data['hopital'] = $hopital;
            return view('Dashboard/adminhopital/profile', $data);
        } else {
            return redirect()->to(base_url('/Hopital'));
        }
    }

    # MISE A JOUR INFORMATION PERSONNELLE DASHBORD FABALAB
    
    public function updateProfile()
    {
        $hopitalModel = new HopitalModel();
        $hopital = $hopitalModel->where('id', session()->get('id'))->first();
        $data['hopital'] = $hopital;

        $rules = [
            'nom_dr' => 'required|min_length[3]|max_length[20]'
        ];

        $messages = [
            'nom_dr' => [
                'required' => 'Le champ nom du directeur est requis.',
                'min_length' => 'Le prenom doit avoir au moins 3 caractères.',
                'max_length' => 'Le prenom ne peut pas dépasser 20 caractères.'
            ],

        ];

        if (!$this->validate($rules, $messages)) {
            return view('Dashboard/adminhopital/profile', ['validation' => $this->validator]);
        } else {

            $user = $this->request->getVar('my_id');

            $photo = $this->request->getFile('photo_hopt');

            // Définir le chemin du répertoire de destination pour le fichier téléchargé
            $path = 'uploads/images/';

            // Utiliser la fonction move_file() pour déplacer le fichier et obtenir le nouveau nom
            $newPic = $this->move_file($path, $photo);

            $updateData = [
                'nom_dr' => $this->request->getVar('nom_dr'),
                'prenom_dr' => $this->request->getVar('prenom_dr'),
                'contact_dr' => $this->request->getVar('contact_dr'),
            ];

            $updatePhotoData = [
                'photo_hopt' => $newPic,
            ];

            $db = \Config\Database::connect();

            $db->table('hopital')->set($updateData)->where('id', $user)->update();

            $verif_photo = $_FILES['photo_hopt']['name'];

            if (!empty($verif_photo)) {
                $db->table('hopital')->set($updatePhotoData)->where('id', $user)->update();
            }

            return redirect()->to(base_url('/hopital/profile/'))->with("success", "la mise a été effectué avec succes !");
        }
    }

    public function updatePasswordProfile()
    {
        $hopitalModel = new HopitalModel();
        $hopital = $hopitalModel->where('id',  session()->get('id'))->first();
        $data['hopital'] = $hopital;

        $rules = [
            'actual_password_hopital' => 'required|min_length[7]',
            'new_password_hopital' => 'required|min_length[7]',
            'confirm_new_password_hopital' => 'required|min_length[7]',
        ];

        $messages = [
            'actual_password_hopital' => [
                'required' => 'Le champ nom est requis.',
                'min_length' => 'Le champ doit avoir au moins 7 caractères.'
            ],
            'new_password_hopital' => [
                'required' => 'Le champ prenom est requis.',
                'min_length' => 'Le champ doit avoir au moins 7 caractères.'
            ],
            'confirm_new_password_hopital' => [
                'required' => 'Le champ service est requis.',
                'min_length' => 'Le champ doit avoir au moins 7 caractères.'
            ],
        ];

        if (!$this->validate($rules, $messages)) {
            return view('Dashboard/adminhopital/profile/', ['validation' => $this->validator]);
        } else {
            
            $user = $this->request->getVar('my_id');

            $actual_password_hopital = $this->request->getVar('actual_password_hopital');

            $new_password_hopital = $this->request->getVar('new_password_hopital');
            $hash_new_password = password_hash($new_password_hopital, PASSWORD_BCRYPT);

            $confirm_new_password_hopital = $this->request->getVar('confirm_new_password_hopital');

            $updateMdp = [
                'password_hopt' => $hash_new_password,
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
            "<div style='font-weight:bold;'>" . "Nouveau Mot de passe :" . "<span>" . $new_password_hopital . "</span>" . "</div>" .
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

            if (password_verify($actual_password_hopital, $hopital['password_hopt'])) {
                if ($new_password_hopital === $confirm_new_password_hopital) {
                    if ($hash_new_password !== $hopital['password_hopt']) {

                        $to = $hopital['email_hopt'];
                        $email = \Config\Services::email();
                        $email->setTo($to);
                        $email->setFrom('tcheregnimin.tuo@uvci.edu.ci');
                        $email->setSubject('Nouveau mot de passe');
                        $email->setMessage($message);
                        $email->send();
                        $data = $email->printDebugger(['headers']);
                        print_r($data);

                        
                        $db->table('hopital')->set($updateMdp)->where('id', $user)->update();

                    } else {

                        return redirect()->to(base_url('/hopital/profile/'))->with("fail", "la mise a été effectué avec succes !");
                    }
                } else {
                    return redirect()->to(base_url('/hopital/profile/'))->with("fail", "mot de passe non identique !");
                }
            } else {
                return redirect()->to(base_url('/hopital/profile/'))->with("fail", "ce mot de passe n'existe pas dans notre base de donnée !");
            }

            return redirect()->to(base_url('/hopital/profile/'))->with("success", "Mot de passe modifié avec succes !");
        }
    }
    # FIN DE LA MISE A JOUR

    public function register()
    {
        if (isset(session('hopital')['id'])) {

            $hopitalModel = new HopitalModel();
            $hopital = $hopitalModel->where('id',session('hopital')['id'])->first();
            $data['hopital'] = $hopital; 
            return view('Dashboard/adminhopital/register',$data);
        } else {
            return redirect()->to(base_url('Hopital'));
        }
    }

}
