<?php

namespace App\Controllers;

use App\Models\ChatModel;
use App\Models\PatientModel;
use App\Models\ProsanteModel;
use App\Models\RendezvousModel;
use App\Models\MedicamentModel;
use App\Models\ConsultationModel;
use App\Models\AlergieModel;
use App\Models\Alert_notifModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class Prosante extends BaseController
{

    public function __construct()
    {


        helper(['form', 'url']);
        // if (session()->get('role') != "prosante") {
        //     echo 'Accès réfusé pour les prosanté';
        //     exit;
        // }


    }

    public function index()
    {
        if (isset(session('Prosante')['id'])) {

            $alert_notif = new Alert_notifModel();


            $id_dest = session('Prosante')['id'];

            $data['alert_notif'] = $alert_notif->where('id_dest', $id_dest)->orderBy('vue_notif', 'ASC')->findAll();


            //  return view('Backend/Prosante/index', $data);
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    # Création de fonction pour l'insertion de la photo ------------------

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

    public function register()
    {

        if (isset(session('hopital')['id'])) {
            $rules = [
                'nom' => 'required|min_length[3]|max_length[20]',
                'prenom' => 'required|min_length[3]|max_length[20]',
                'service' => 'required|min_length[3]|max_length[20]',
                'contact' => 'required|max_length[10]',
                'profession' => 'required|min_length[5]|max_length[40]',
                'email' => 'required|min_length[6]|max_length[100]|valid_email|is_unique[users.email]',
                // 'photo' => 'uploaded[photo]|mime_in[photo,image/jpg,image/jpeg,image/png]|max_size[photo, 5120]',
            ];

            $messages = [
                'nom' => [
                    'required' => 'Le champ nom est requis.',
                    'min_length' => 'Le nom doit avoir au moins 3 caractères.',
                    'max_length' => 'Le nom ne peut pas dépasser 20 caractères.'
                ],
                'prenom' => [
                    'required' => 'Le champ prenom est requis.',
                    'min_length' => 'Le prenom doit avoir au moins 3 caractères.',
                    'max_length' => 'Le prenom ne peut pas dépasser 20 caractères.'
                ],
                'service' => [
                    'required' => 'Le champ prenom est requis.',
                    'min_length' => 'Le prenom doit avoir au moins 3 caractères.',
                    'max_length' => 'Le prenom ne peut pas dépasser 20 caractères.'
                ],

                'contact' => [
                    'required' => 'Le champ tel est obligatoire.',
                    'min_length' => 'Le tel doit avoir au moins 8 caractères.',
                    'max_length' => 'Le tel ne peut pas dépasser 10 caractères.'
                ],

                'profession'  => [
                    'required'=> "La profession est obligatoire.",
                    'min_length' => 'La profession doit contenir au moins 5 caractères.',
                    'max_length' => 'La profession ne peut pas dépasser 40 caractères.'
                ],


                'email' => [
                    'required' => 'Le champ email est requis et doit être valide.',
                ],

                // 'photo' => [
                //     'required' => 'Le champ photo est requis.',
                // ],


            ];


            if ($this->request->is('post')) {


                if (!$this->validate($rules, $messages)) {
                    return view('Dashboard/adminhopital/register', ['validation' => $this->validator]);
                } else {
                    $prosante = new ProsanteModel();

                    $nom = $this->request->getVar('nom');
                    $prenom = $this->request->getVar('prenom');
                    $contact = $this->request->getVar('contact');
                    $service = $this->request->getVar('service');
                    $profession = $this->request->getVar('profession');
                    # Générer la référence du patient-----------------------------------------

            if (isset($nom, $prenom)) {
                // Obtenez les initiales du nom et prénom
                $initialesNom = substr($nom, 0, 1);
                $initialesPrenom = substr($prenom, 0, 1);

                // Récupérez le dernier ID enregistré dans la base de données
                $lastId = $prosante->selectMax('id')->first()['id'];

                // Incrémentez le dernier ID pour le nouvel enregistrement
                $newId = $lastId + 1;

                // Génère une référence unique avec les initiales, le numéro et les initiales du prénom
                $reference = 'REF: ' . $initialesNom . $initialesPrenom . rand(1000, 9999) . 'N°' . $newId;

                // Utilisez la référence comme nécessaire dans votre application
            } else {
                echo "Erreur!";
            }

                    // $photo = $this->request->getFile('photo');

                    // // Définir le chemin du répertoire de destination pour le fichier téléchargé
                    // $path = 'uploads/images/';

                    // // Utiliser la fonction move_file() pour déplacer le fichier et obtenir le nouveau nom
                    // $newName = $this->move_file($path, $photo);

                    // Mes modifications--------------------------------------------------
                    $users = new UserModel();

                    $password_random_generate = bin2hex(random_bytes(10));
                    $token = bin2hex(random_bytes(20));

                    $userData = [
                        'email' => $this->request->getVar('email'),
                        'mdp' => password_hash($password_random_generate, PASSWORD_BCRYPT),
                        'role' => 'prosante',
                    ];

                    $userId = $users->insert($userData);



                    $prosanteData = [
                        'user_id' => $userId,
                        'reference' => $reference,
                        'nom' => $nom,
                        'prenom' => $prenom,
                        'service' => $service,
                        'contact' => $contact,
                        'profession' => $profession,

                        // 'photo' => $newName,
                        'lien' => $token,
                    ];
                }



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



                $query = $prosante->insert($prosanteData);

                // Fin de mes modifications--------------------------------------------------------

                if (!$query) {
                    // Si l'insertion dans la table "prosante" échoue, vous pourriez envisager de supprimer l'utilisateur de la table "user"
                    $users->delete(['id' => $userId]);
                    return redirect()->back('/Hopital/register')->with("fail", "quelque chose s'est mal pasesée");
                    # code...
                } else {

                    $to = $this->request->getVar('email');
                    $email = \Config\Services::email();
                    $email->setTo($to);
                    $email->setFrom('fablabsigim@gmail.com');
                    $email->setSubject('Confirmation inscription');
                    $email->setMessage($message);
                    $email->send();
                    $data = $email->printDebugger(['headers']);
                    print_r($data);

                    return redirect()->to(base_url('/Hopital/register'))->with("success", "Votre compte a bien été crée pour l'activer verifier votre boite de messagerie !");
                }
            } else {
                return view('Dashboard/adminhopital/register');
            }
        }
    }
    
    // mise à jour des informations du professionnel de sante (prosante)
    public function getProfilePro()
    {
        // var_dump($data['prosante']);

        if (isset(session('users')['id'])) {
            $prosanteModel = new ProsanteModel();
            $prosante = $prosanteModel->select('prosantes.*, users.*')
                ->join('users', 'users.id = prosantes.user_id', 'left')
                ->where('prosantes.user_id', session()->get('id'))
                ->first();
            $data['prosante'] = $prosante;

            $rendezvousModel = new RendezvousModel();
            $data['sum'] = $rendezvousModel->getNbRdvValides();


            return view('Dashboard/prosante/profile', $data);
        } else {
            return redirect()->to(base_url('login'));
        }
    }
   
    public function updateProfile()
    {

        $prosanteModel = new ProsanteModel();
        $prosante = $prosanteModel->select('prosantes.*, users.*')
            ->join('users', 'users.id = prosantes.user_id', 'left')
            ->where('prosantes.user_id', session()->get('id'))
            ->first();
        $data['prosante'] = $prosante;

        //   var_dump($prosante['email']);


        $rules = [
            'nom_prosante' => 'required|min_length[3]|max_length[20]',
            'prenom_prosante' => 'required|min_length[3]|max_length[20]',
            'service_prosante' => 'required|min_length[3]|max_length[20]',
            //   'email_prosante' => 'required|min_length[6]|max_length[100]|valid_email|is_unique[users.email]',
            //  'photo_prosante' => 'mime_in[photo_prosante,image/jpg,image/jpeg,image/png]|max_size[photo_prosante, 5120]',
        ];

        $messages = [
            'nom_prosante' => [
                'required' => 'Le champ nom est requis.',
                'min_length' => 'Le nom doit avoir au moins 3 caractères.',
                'max_length' => 'Le nom ne peut pas dépasser 20 caractères.'
            ],
            'prenom_prosante' => [
                'required' => 'Le champ prenom est requis.',
                'min_length' => 'Le prenom doit avoir au moins 3 caractères.',
                'max_length' => 'Le prenom ne peut pas dépasser 20 caractères.'
            ],
            'service_prosante' => [
                'required' => 'Le champ service est requis.',
                'min_length' => 'service doit avoir au moins 3 caractères.',
                'max_length' => 'Le service ne peut pas dépasser 20 caractères.'
            ],

            'email_prosante' => [
                'required' => 'Le champ email est requis et doit être valide.',
                // 'is_unique[users.email]' => 'cette email exist deja',
            ],

            //   'photo_prosante' => [
            /* 'uploaded[photo_prosante]' => 'vous devez charger une image de profile', */
            //   'mime_in[photo_prosante,image/jpg,image/jpeg,image/png]' => 'la photo doit etre en extension jpg , jpeg , png',
            //   ],

        ];

        if (!$this->validate($rules, $messages)) {
            return view('Dashboard/prosante/profile', ['validation' => $this->validator]);
        } else {

            $user = $this->request->getVar('my_id');

            $photo = $this->request->getFile('photo_prosante');

            // Définir le chemin du répertoire de destination pour le fichier téléchargé
            $path = 'uploads/images/';

            // Utiliser la fonction move_file() pour déplacer le fichier et obtenir le nouveau nom
            $newPic = $this->move_file($path, $photo);


            $piece = $this->request->getFile('piece_prosante');

            $pathFiles = 'uploads/fichier_examen/';

            $newFiles = $this->move_file($pathFiles, $piece);

            $updateData = [
                'nom' => $this->request->getVar('nom_prosante'),
                'prenom' => $this->request->getVar('prenom_prosante'),
                'profession' => $this->request->getVar('profession_prosante'),
                'service' => $this->request->getVar('service_prosante'),
                'domicile' => $this->request->getVar('domicile_prosante'),
                'contact' => $this->request->getVar('contact_prosante'),
                'type_de_piece' => $this->request->getVar('type_de_piece_prosante'),
            ];

            $updateEmailData = [
                'email' => $this->request->getVar('email_prosante'),
            ];

            $updatePhotoData = [
                'photo' => $newPic,
            ];

            $updatePieceData = [
                'piece' => $newFiles,
            ];

            $db = \Config\Database::connect();

            $db->table('prosantes')->set($updateData)->where('user_id', $user)->update();

            $verif_photo = $_FILES['photo_prosante']['name'];
            $verif_piece = $_FILES['piece_prosante']['name'];

            if (!empty($verif_photo)) {
                $db->table('prosantes')->set($updatePhotoData)->where('user_id', $user)->update();
            }

            if ($this->request->getVar('email_prosante') != $prosante['email']) {
                $db->table('users')->set($updateEmailData)->where('id', $user)->update();
            }

            if (!empty($verif_piece)) {
                $db->table('prosantes')->set($updatePieceData)->where('user_id', $user)->update();
            }

            return redirect()->to(base_url('/prosante/profile'))->with("success", "la mise a été effectué avec succes !");
        }
    }

    public function updatePasswordProfile()
    {

        $prosanteModel = new ProsanteModel();
        $prosante = $prosanteModel->select('prosantes.*, users.*')
            ->join('users', 'users.id = prosantes.user_id', 'left')
            ->where('prosantes.user_id', session()->get('id'))
            ->first();
        $data['prosante'] = $prosante;

        $rules = [
            'actual_password_prosante' => 'required|min_length[7]',
            'new_password_prosante' => 'required|min_length[7]',
            'confirm_new_password_prosante' => 'required|min_length[7]',

        ];

        $messages = [
            'actual_password_prosante' => [
                'required' => 'Le champ nom est requis.',
                'min_length' => 'Le champ doit avoir au moins 7 caractères.'
            ],
            'new_password_prosante' => [
                'required' => 'Le champ prenom est requis.',
                'min_length' => 'Le champ doit avoir au moins 7 caractères.'
            ],
            'confirm_new_password_prosante' => [
                'required' => 'Le champ service est requis.',
                'min_length' => 'Le champ doit avoir au moins 7 caractères.'
            ],
        ];


        if (!$this->validate($rules, $messages)) {
            return view('Dashboard/prosante/profile', ['validation' => $this->validator]);
        } else {

            $user = $this->request->getVar('my_id');

            $actual_password_prosante = $this->request->getVar('actual_password_prosante');

            $new_password_prosante = $this->request->getVar('new_password_prosante');
            $hash_new_password = password_hash($new_password_prosante, PASSWORD_BCRYPT);

            $confirm_new_password_prosante = $this->request->getVar('confirm_new_password_prosante');

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
            "<div style='font-weight:bold;'>" . "Nouveau Mot de passe :" . "<span>" . $new_password_prosante . "</span>" . "</div>" .
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

            if (password_verify($actual_password_prosante, $prosante['mdp'])) {
                if ($new_password_prosante === $confirm_new_password_prosante) {
                    if ($hash_new_password !== $prosante['mdp']) {

                        $to = $prosante['email'];
                        $email = \Config\Services::email();
                        $email->setTo($to);
                        $email->setFrom('tcheregnimin.tuo@uvci.edu.ci');
                        $email->setSubject('Nouveau mot de passe');
                        $email->setMessage($message);
                        $email->send();
                        $data = $email->printDebugger(['headers']);
                        print_r($data);

                        
                        $db->table('users')->set($updateMdp)->where('id', $user)->update();

                    } else {

                        return redirect()->to(base_url('/prosante/profile'))->with("fail", "la mise a été effectué avec succes !");
                    }
                } else {
                    return redirect()->to(base_url('/prosante/profile'))->with("fail", "mot de passe non identique !");
                }
            } else {
                return redirect()->to(base_url('/prosante/profile'))->with("fail", "ce mot de passe n'existe pas dans notre base de donnée !");
            }



            return redirect()->to(base_url('/prosante/profile'))->with("success", "Mot de passe modifié avec succes !");
        }
    }
   
    public function register_prosante($key)
    {
        if (isset(session('Prosante')['id'])) {

            $patient = new PatientModel();
            $data = [
                'groupe_sanguin' => $this->request->getVar('groupe_sanguin'),
                'taille' => $this->request->getVar('taille'),
                'poids' => $this->request->getVar('poids'),
                'allergie' => $this->request->getVar('allergie'),
                'note' => $this->request->getVar('note'),
            ];

            $data['patient'] = $patient->where('id', $key)->first();

            if ($this->request->is('post')) {

                $patient->update($key, $data);
            }

            return view('Backend/Prosante/register-prosante', $data);
        } else {
            return redirect()->to(base_url('/Patient'));
        }
    }

    public function logout()
    {
        if (isset(session('prosantes')['id'])) {
            session()->destroy('prosantes');
            return redirect()->to(base_url('login'));
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    # Gestion du chat -----------------------------------
    public function alert_msg()
    {

        if (isset(session('users')['id'])) {
            $prosanteModel = new ProsanteModel();
            $prosante = $prosanteModel->where('user_id', session()->get('id'))->first();
            $data['prosante'] = $prosante;

            $consultationModel = new ConsultationModel();

            $prosanteId = session()->get('id');

            $contacts = $consultationModel->distinct()
            ->select('consultation.id_patient, patient.nom, patient.prenom, patient.photo, patient.status, users.role, users.user_status')
            ->join('patient', 'patient.user_id = consultation.id_patient', 'left')
            ->join('users', 'users.id = patient.user_id', 'left')
            ->where('consultation.id_prosante', $prosanteId)
            ->findAll();

            $newContacts = [];
        
        foreach ($contacts as &$contact) {
            $conversations = $consultationModel->distinct()
                ->select('chats.sender_id, chats.receiver_id, chats.message as last_message, COUNT(chats.id) as total_messages, MAX(chats.created_at) as last_message_time, chats.status as last_message_status')
                ->join('chats', "(chats.sender_id = $prosanteId AND chats.receiver_id = {$contact['id_patient']}) OR (chats.sender_id = {$contact['id_patient']} AND chats.receiver_id = $prosanteId)", 'left')
                ->orWhere('chats.sender_id', $contact['id_patient'])
                ->where('chats.receiver_id', $prosanteId)
                ->where('chats.status', 0)
                ->groupBy('chats.receiver_id,chats.sender_id')
                ->orderBy('last_message_time', 'DESC')
                ->first();
        
                if ($conversations && $conversations['total_messages'] > 0) {
                    // Ajoutez ce contact à la liste des nouveaux contacts
                    $contact['alert_conversations'] = $conversations;
                    $newContacts[] = $contact;
                }
        }
            $data['alert_contacts'] = $newContacts;

         //   var_dump($data['alert_contacts']);

             return view('Dashboard/prosante/alert_msg', $data);
        } else {
            return null ;
        }
    }

    public function chatHome()
    {
        if (isset(session('users')['id'])) {
            $prosanteModel = new ProsanteModel();
            $prosante = $prosanteModel->where('user_id', session()->get('id'))->first();
            $data['prosante'] = $prosante;


            $consultationModel = new ConsultationModel();

 
            $prosanteId = session()->get('id');

            $contacts = $consultationModel->distinct()
                ->select('consultation.id_patient, patient.nom, patient.prenom, patient.photo, patient.status, users.role, users.user_status')
                ->join('patient', 'patient.user_id = consultation.id_patient', 'left')
                ->join('users', 'users.id = patient.user_id', 'left')
                ->where('consultation.id_prosante', $prosanteId)
                ->findAll();
            
            foreach ($contacts as &$contact) {
                $conversations = $consultationModel->distinct()
                    ->select('chats.sender_id, chats.receiver_id, chats.message as last_message, COUNT(chats.id) as total_messages, MAX(chats.created_at) as last_message_time, chats.status as last_message_status')
                    ->join('chats', "(chats.sender_id = $prosanteId AND chats.receiver_id = {$contact['id_patient']}) OR (chats.sender_id = {$contact['id_patient']} AND chats.receiver_id = $prosanteId)", 'left')
                    ->where('chats.sender_id', $prosanteId)
                    ->where('chats.receiver_id', $contact['id_patient'])
                    ->orWhere('chats.sender_id', $contact['id_patient'])
                    ->where('chats.receiver_id', $prosanteId)
                    ->groupBy('chats.sender_id, chats.receiver_id')
                    ->orderBy('last_message_time', 'DESC')
                    ->first();
            
                $contact['conversations'] = $conversations;
            }
            
         
            $data['contacts'] = $contacts;

        //    var_dump($data['contacts']);

             return view('Dashboard/prosante/messagerie', $data);
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function sendMessage()
    {
        helper(['form', 'html']);
        $rules = [
            'message' => 'required|min_length[3]|max_length[250]',
        ];

        $message = [
            'message' => [
                'required'      => "Le champ est obligatoire.",
                'min_length'   => "Votre message doit contenir au moins 3 caractères.",
                'max_length'   => "Votre message ne peut pas dépasser les 250 caractères."
            ]
        ];

        if (!$this->validate($rules, $message)) {
            return view('Backend/Prosante/chat', ['validation' => $this->validator]);
        } else {
            $model = new ChatModel();
            $receiver_id = $_POST['receiver_id'];
            $prosante = session()->get('id');
            $msg = [
                'sender_id' => $prosante,
                'receiver_id' => $receiver_id,
                'message' => $this->request->getVar('message'),
                'status' => '0',
                'created_at' => date("Y-m-d H:i:s"),
            ];
            $model->insert($msg);
            session()->setFlashdata('success', 'Votre message a été envoyé avec succès !');
            return redirect()->to(base_url("/Prosante/chat"));
        }
    }

    public function getMessage($key)
    {
        if (isset(session('users')['id'])) {

            $prosanteModel = new ProsanteModel();
            $prosante = $prosanteModel->where('user_id', session()->get('id'))->first();
            $data['prosante'] = $prosante;

            $chat_model = new ChatModel();
            $user_model = new UserModel();
            $mysession_model = new PatientModel();

            $consultationModel = new ConsultationModel();


            $get_my_session = session()->get('id');

            $prosanteId = session()->get('id');

            $contacts = $consultationModel->distinct()
                ->select('consultation.id_patient, patient.nom, patient.prenom, patient.photo, patient.status, users.role, users.user_status')
                ->join('patient', 'patient.user_id = consultation.id_patient', 'left')
                ->join('users', 'users.id = patient.user_id', 'left')
                ->where('consultation.id_prosante', $prosanteId)
                ->findAll();
            
            foreach ($contacts as &$contact) {
                $conversations = $consultationModel->distinct()
                    ->select('chats.sender_id, chats.receiver_id, chats.message as last_message, COUNT(chats.id) as total_messages, MAX(chats.created_at) as last_message_time, chats.status as last_message_status')
                    ->join('chats', "(chats.sender_id = $prosanteId AND chats.receiver_id = {$contact['id_patient']}) OR (chats.sender_id = {$contact['id_patient']} AND chats.receiver_id = $prosanteId)", 'left')
                    ->where('chats.sender_id', $prosanteId)
                    ->where('chats.receiver_id', $contact['id_patient'])
                    ->orWhere('chats.sender_id', $contact['id_patient'])
                    ->where('chats.receiver_id', $prosanteId)
                    ->groupBy('chats.sender_id, chats.receiver_id')
                    ->orderBy('last_message_time', 'DESC')
                    ->first();
            
                $contact['conversations'] = $conversations;
            }
            
         
            $data['contacts'] = $contacts;

            $get_my_user = $user_model
                ->select('users.id , users.user_status, users.updated_at, patient.nom , patient.photo')
                ->join('patient', 'patient.user_id = users.id', 'left')
                ->where('users.id', $key)
                ->first();

            $data['get_my_users'] = $get_my_user;


         //     var_dump($data['get_my_users']);

            $conversations = $chat_model
                ->select('chats.id, chats.sender_id, chats.receiver_id, chats.message, chats.status, chats.updated_at, prosantes.user_id as prosante_id, prosantes.nom as prosante_nom, prosantes.photo as prosante_photo, patient.user_id as patient_id, patient.nom as patient_nom , patient.photo as patient_photo')
                ->join('prosantes', 'chats.sender_id = prosantes.user_id', 'left') // Join avec prosantes
                ->join('patient', 'chats.sender_id = patient.user_id', 'left') // Join avec patients
                ->where('chats.sender_id', $get_my_session)
                ->where('chats.receiver_id', $key)
                ->orWhere('chats.receiver_id', $get_my_session)
                ->where('chats.sender_id', $key)
                ->orderBy('chats.id', 'ASC')
                ->get();

            $data['conversations'] = $conversations->getResult();

            //     var_dump($data['contacts']);

           return view('Dashboard/prosante/chat', $data);
        } else {
            return redirect()->to(base_url('/Patient'));
        }
    }

    public function loadMessages()
    {
        if (isset(session('users')['id'])) {

            $chat_model = new ChatModel();
            $user_model = new UserModel();
            $mysession_model = new PatientModel();

            $get_my_session = session()->get('id');
            $key = $_POST['receiver_id'];


            $contacts = $chat_model
                ->select('IF(chats.sender_id = ' . $get_my_session . ', chats.receiver_id, chats.sender_id) as contact_id, MAX(chats.message) as last_message, MAX(chats.created_at) as last_message_time, COUNT(chats.id) as message_count, SUM(chats.status = 0) as unread_count, prosantes.nom as prosante_nom, prosantes.photo as prosante_photo, patient.nom as patient_nom, patient.photo as patient_photo, users.user_status as online_hoffline')
                ->join('users', 'chats.sender_id = users.id', 'left')
                ->join('prosantes', 'prosantes.user_id = users.id', 'left')
                ->join('patient', 'patient.user_id = users.id', 'left')
                ->where('(chats.sender_id = ' . $get_my_session . ' OR chats.receiver_id = ' . $get_my_session . ')')
                ->groupBy('contact_id')
                ->orderBy('last_message_time', 'DESC')
                ->get();

            $data['contacts'] = $contacts->getResult();

            $get_my_user = $user_model
                ->select('users.id , users.user_status, users.updated_at, patient.nom , patient.photo')
                ->join('patient', 'patient.user_id = users.id', 'left')
                ->where('users.id', $key)
                ->get();

            $data['get_my_users'] = $get_my_user->getResult();


            //  var_dump($data['get_my_user']);

            $conversations = $chat_model
                ->select('chats.id, chats.sender_id, chats.receiver_id, chats.message, chats.status, chats.updated_at, prosantes.user_id as prosante_id, prosantes.nom as prosante_nom, prosantes.photo as prosante_photo, patient.user_id as patient_id, patient.nom as patient_nom , patient.photo as patient_photo')
                ->join('prosantes', 'chats.sender_id = prosantes.user_id', 'left') // Join avec prosantes
                ->join('patient', 'chats.sender_id = patient.user_id', 'left') // Join avec patients
                ->where('chats.sender_id', $get_my_session)
                ->where('chats.receiver_id', $key)
                ->orWhere('chats.receiver_id', $get_my_session)
                ->where('chats.sender_id', $key)
                ->orderBy('chats.id', 'ASC')
                ->get();

        

            $updateStatus = [
                'status' => 1,
            ];

            $db = \Config\Database::connect();

            $db->table('chats')->set($updateStatus)->where('sender_id', $key)->where('receiver_id' , $get_my_session)->update();


            $data['conversations'] = $conversations->getResult();

            //     var_dump($data['contacts']);

            return view('Dashboard/prosante/loadMessages', $data);
        }
    }

    public function carnetPatient()
    {
        if (isset(session('users')['id'])) {

            $prosanteModel = new ProsanteModel();
            $patientModel = new  PatientModel();
            
            $patient = $patientModel->where('user_id', session()->get('id'))->first();
            //$carnet = $prosanteModel->getCarnet($patient['numero_carnet']);
            $data['patient'] = $patient;
            $rendezvousModel = new RendezvousModel();
            $data['sum'] = $rendezvousModel->getNbRdvValides();
            $prosante = $prosanteModel->where('user_id', session()->get('id'))->first();
            
            $prosante = $prosanteModel->select('prosantes.*, users.*')
            ->join('users', 'users.id = prosantes.user_id', 'left')
            ->where('prosantes.user_id', session()->get('id'))
            ->first();
            $data['prosante'] = $prosante;
            $consultationModel = new ConsultationModel();

            $infos = $consultationModel->select('consultation.*, patient.*')
            ->join('patient', 'patient.user_id = consultation.id_patient')
            ->where('consultation.id_prosante', session()->get('id'))
            ->findAll();
            $data['infos'] = $infos;


            return view('Dashboard/prosante/carnet_patient', $data);
        } else {
            return redirect()->to(base_url('login'));
        }
    }
    
    public function savoirPlus()
    {
        // Récupérer le nom du patient saisi
        $prosanteReference = $this->request->getVar('reference');
        $patientIdentifiant = $this->request->getVar('identifiant');
  
  
        // Charger le modèle Patient
        $patientModel = new PatientModel();
        // Rechercher le patient dans la base de données
        $patients = $patientModel->select('patient.*, users.email AS email')
        ->join( 'users','users.id = patient.user_id', 'left')
        ->where('identifiant', $patientIdentifiant)
        ->findAll();
        $prosanteModel = new ProsanteModel();
      
        $prosanteConnected = $prosanteModel->where('user_id', session()->get('id'))->first();
        $data['prosante']= $prosanteConnected;

        // Rechercher le patient dans la base de données
        $prosanteByReference = $prosanteModel->select('prosantes.*, users.*')
            ->join( 'users','users.id = prosantes.user_id', 'left')
            ->where('reference', $prosanteReference)
            ->findAll();

            $consultationModel = new ConsultationModel();

            $infos = $consultationModel->select('consultation.*, patient.*, prosantes.*')
            ->join('patient', 'patient.user_id = consultation.id_patient')
            ->join('prosantes', 'prosantes.user_id = consultation.id_prosante', 'left')
            ->where('consultation.id_prosante', session()->get('id'))
            ->findAll();
            $data['infos'] = $infos;
          
        //   var_dump($infos);
        //   exit();
          
      // Si aucun patient n'est trouvé, afficher un message
      if (!$prosanteByReference && $patients) {
        return $this->response->setBody('Cette référence ne correspond à aucun patient et/ou professionnel de santé');
      }
  
      // Afficher les informations du patient correspondant
      return view('Dashboard/prosante/carnet_patient', ['infos' => $infos, 'prosante' => $prosanteByReference, 'patients' => $patients, 'prosante' => $data['prosante']]);
    }

    public function ajoutInfo($value)
    {
        if (isset(session('users')['id'])) {
          
            $patientModel = new PatientModel();

            // Rechercher le patient dans la base de données
            $patient = $patientModel->select('patient.*, users.email AS email')
                ->join('users', 'users.id = patient.user_id', 'left')
                ->where('user_id', $value)
                ->first(); // Utiliser first() si vous vous attendez à un seul résultat
                // var_dump($patient); exit();
            $prosanteModel = new ProsanteModel();
            $patientId = $patient['user_id'];
            $prosanteId = session()->get('id');

            $consultationModel = new MedicamentModel();
            
            $data['consultation'] = $consultationModel->where('id_patient', $patientId)
                ->where('id_prosante', $prosanteId)
                ->findAll();
            $prosante = $prosanteModel->where('user_id', session()->get('id'))->first();
            $data['prosante'] = $prosante;

            $identifiant = urldecode($this->request->uri->getSegment(3));
            // Ajoutez l'identifiant au tableau $data
            $data['identifiant'] = $identifiant;
            
            $data['patient'] = $patient; // Utilisez une clé pour stocker le patient, pas de 'patients_medocs'
            
          //  var_dump($data['patient']['identifiant']); // Assurez-vous que les données du patient sont correctes
            
            return view('Dashboard/prosante/ajout_information', $data);
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function identPat()
    {
        if (isset(session('users')['id'])) {
            $prosanteModel = new ProsanteModel();
            $patientModel = new  PatientModel();
            $patient = $patientModel->findAll();
            $prosante = $prosanteModel->where('user_id', session()->get('id'))->first();
            $data['prosante'] = $prosante;
            $data['patient'] = $patient;
            return view('Dashboard/prosante/identification_patient', $data);
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function saveConsultation()
    {
        if (isset(session('users')['id'])) 
        {
            $consultationModel = new ConsultationModel();
            $patientModel = new PatientModel();
            // Rechercher le patient dans la base de données
            $patient = $patientModel->select('patient.*, users.email AS email')
            ->join('users', 'users.id = patient.user_id', 'left')
            ->where('user_id', $this->request->getVar('id_patient'))
            ->first(); // 
            $data['patient'] = $patient;
                // $patientId = $this->request->getPost('user_id');
            // var_dump($patient); exit();
    
           
                $id_prosante = session()->get('id');
                $data = [
                    'id_patient' => $this->request->getVar('id_patient'),  
                    'id_prosante' => $id_prosante,
                    'poids' => $this->request->getPost('poids'),
                    'taille' => $this->request->getPost('taille'),
                    'tension' => $this->request->getPost('tension'),
                    'temperature' => $this->request->getPost('temperature'),
                    'observation' => $this->request->getPost('observation'),
                    'examen' => $this->request->getPost('examen'),
                    'consultation1' => $this->request->getPost('consultation1'),
                    'consultation2' => $this->request->getPost('consultation2'),
                    'consultation3' => $this->request->getPost('consultation3'),
                ];
    
                $db = $consultationModel->save($data);
    
                if (!$db) {
                    return redirect()->back()->withInput()->with('fail', 'Erreur lors de l\'enregistrement de la consultation');
                }
    
                return redirect()->to('prosante/ajout_information/' . $patient['user_id'])->with('success', 'Les informations ont bien été prises en compte');
           
        } else {
            return redirect()->to(base_url('/login'));
        }
    }

    public function saveAlerg()
    {
        $patientModel = new PatientModel();
    
        // Rechercher le patient dans la base de données
        $patient = $patientModel->select('patient.*, users.email AS email')
            ->join('users', 'users.id = patient.user_id', 'left')
            ->where('user_id', $this->request->getVar('id_patient'))
            ->first(); // Utiliser first() si vous vous attendez à un seul résultat
    
        $data['patient'] = $patient; // Utilisez une clé pour stocker le patient, pas de 'patients_medocs'
        $identifiant = $data['patient']['identifiant']; // Stockez l'identifiant du patient
    
        $rules =  [
            'nom_alergie' => 'required',
        ];
    
        $messages = [
            'nom_alergie' => [
                'required' => "Le nom de l'alergie est obligatoire.",
            ],
        ];
    
        if (!$this->validate($rules, $messages)) {
            return view('Dashboard/prosante/ajout_information/' . $patient['user_id'], ['validation' => $this->validator, 'patient' => $data['patient']]);
        } else {
            $dataAlerg= [
                'id_prosante' => session()->get('id'),
                'nom_alergie' => $this->request->getVar('nom_alergie'),
                'reaction_alergique'  => $this->request->getVar('reaction_alergique'),
                'id_patient' => $this->request->getVar('id_patient'),    
            ];
            $alergieModel = new AlergieModel();
            $alergieModel->insert($dataAlerg); // Utilisation de la méthode insert() pour ajouter une nouvelle entrée
            return redirect()->to('prosante/ajout_information/' . $patient['user_id'])->with('success', 'Medicament enregistré avec succès.');
        }
    }

  
}
