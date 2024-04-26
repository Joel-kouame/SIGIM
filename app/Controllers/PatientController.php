<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PatientModel;
use App\Models\Alert_notifModel;
use App\Models\UserModel;
use App\Models\ChatModel;
use App\Models\MedicamentModel;
use App\Models\ConsultationModel;
use App\Models\AlergieModel;
use App\Models\RendezvousModel;
use App\Models\ProsanteModel;
use App\Models\HopitalModel;


class PatientController extends BaseController
{
    public function __construct()
    {
        helper(['html', 'url', 'form']);
        // if (session()->get('role') != "patient") {
        //     echo 'Accès réfusé pour les patients';
        //     exit;
        // }
    }

    public function register()
    {
        $hopitalModel = new HopitalModel();
        $hopital = $hopitalModel->findAll();
        $data['hopital'] = $hopital;
        return view('Backend/Patient/register', $data);
    }

    public function carnetPatient()
    {
        if (isset(session('users')['id'])) {
            $patientModel = new PatientModel();
            $consultationModel = new MedicamentModel();
            $rendezvousModel = new RendezvousModel();
            $prosanteModel = new ProsanteModel();
            $consultationModel = new ConsultationModel();
            $alergieModel = new AlergieModel();
            $userModel = new  UserModel();
            $user = $userModel->find(session()->get('id'));

            $patient = $patientModel->select('patient.*, users.*')
                ->join('users', 'users.id = patient.user_id', 'left')
                ->where('patient.user_id', session()->get('id'))
                ->first();
            $data['sum'] = $rendezvousModel->getNbRdvValides();
            $data['patient'] = $patient;

            $alergie = $alergieModel->select('alergie.*, prosantes.*')
                ->join('prosantes', 'prosantes.user_id = alergie.id_prosante')
                ->where('alergie.id_patient', session()->get('id'))
                ->findAll();
            $data['alergie'] = $alergie;

            // var_dump($id_prosante); exit;
            $infos = $consultationModel->select('consultation.*, prosantes.*')
                ->join('prosantes', 'prosantes.user_id = consultation.id_prosante')
                ->where('consultation.id_patient', session()->get('id'))
                ->findAll();
            $data['infos'] = $infos;

            $medocs = $consultationModel->select('consultation.*,prosantes.*')
                ->join('prosantes', 'prosantes.user_id = consultation.id_prosante')
                ->where('consultation.id_patient', session()->get('id'))
                ->findAll();
            $data['medocs'] = $medocs;

            // var_dump($data['medocs']); exit;

            return view('Dashboard/Patient/carnet_patient', $data, ['infos' => $infos]);
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

    # ----- Enregistrement des informations du patient dans la base de données--------------

    public function savePatient()
    {

        $rules = [
            'nom' => 'required|min_length[3]|max_length[20]',
            'prenom' => 'required|min_length[3]|max_length[20]',
            'date' => 'required',
            'sexe' => 'required',
            'tel' => 'required|max_length[10]',
            'id_hopital' => 'required',
            // 'profession' =>  'permit_empty|min_length[5]|max_length[50]',
            // 'lieu' =>  'required|min_length[5]|max_length[50]',
            'email' => 'required|min_length[6]|max_length[100]|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]|max_length[255]',
            'confirm_password' => 'required|matches[password]',
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

            'date' => [
                'required' => 'Le champ date est requis.',
            ],

            'sexe' => [
                'required' => 'Le champ sexe est requis.',
            ],

            'tel' => [
                'required' => 'Le champ tel est requis.',
                'min_length' => 'Le tel doit avoir au moins 8 caractères.',
                'max_length' => 'Le tel ne peut pas dépasser 10 caractères.'
            ],

            // 'profession' => [
            //     'required' => 'Le champ profession est requis.',
            //     'min_length' => 'Le profession doit avoir au moins 5 caractères.',
            //     'max_length' => 'Le tel ne peut pas dépasser 50 caractères.'
            // ],

            // 'lieu' => [
            //     'required' => 'Le champ lieu est requis.',
            //     'min_length' => 'Le lieu doit avoir au moins 5 caractères.',
            //     'max_length' => 'Le lieu ne peut pas dépasser 50 caractères.'
            // ],
            'id_hopital' => [
                'required' => 'Le champ hopital est requis et doit être valide.',
            ],

            'email' => [
                'required' => 'Le champ email est requis et doit être valide.',
            ],

            'password' => [
                'required' => 'Le champ password est requis.',
                'min_length' => 'Le password doit avoir au moins 8 caractères.',
                'max_length' => 'Le password ne peut pas dépasser 20 caractères.'
            ],

            'confirm_password' => [
                'required' => 'Le champ confirm_password est requis.',
                'min_length' => 'Le confirm_password doit avoir au moins 8 caractères.',
                'max_length' => 'Le confirm_password ne peut pas dépasser 20 caractères.'
            ],

            // 'photo' => [
            //     'required' => 'Le champ photo est requis.',
            // ],

        ];

        if (!$this->validate($rules, $messages)) {
            return view('Backend/Patient/register', ['validation' => $this->validator]);
        } else {
            $patients = new PatientModel();
            $users = new UserModel();

            $nom = $this->request->getVar('nom');
            $prenom = $this->request->getVar('prenom');
            $date_de_naissance = $this->request->getVar('date');
            $sexe = $this->request->getVar('sexe');
            $telephone = $this->request->getVar('tel');
            $id_hopital = $this->request->getVar('id_hopital');
            // $lieu = $this->request->getVar('lieu');
            $email = $this->request->getVar('email');
            // $photo = $this->request->getFile('photo');

            // Définir le chemin du répertoire de destination pour le fichier téléchargé
            $path = 'public/uploads/images/';

            // Utiliser la fonction move_file() pour déplacer le fichier et obtenir le nouveau nom
            // $newName = $this->move_file($path, $photo);

            # Générer la référence du patient-----------------------------------------

            if (isset($nom, $prenom)) {
                // Obtenez les initiales du nom et prénom
                $initialesNom = substr($nom, 0, 1);
                $initialesPrenom = substr($prenom, 0, 1);

                // Récupérez le dernier ID enregistré dans la base de données
                $lastId = $patients->selectMax('id')->first()['id'];

                // Incrémentez le dernier ID pour le nouvel enregistrement
                $newId = $lastId + 1;

                // Génère une référence unique avec les initiales, le numéro et les initiales du prénom
                $reference = $initialesNom . $initialesPrenom . rand(1000, 9999) . $newId;

                // Utilisez la référence comme nécessaire dans votre application
            } else {
                echo "Erreur!";
            }


            // Génère QR Code
            $qrData = "Identifiant: $reference\n\nNom: $nom\n\nPrenom: $prenom\n\nDate de naissance: $date_de_naissance\n\nSexe: $sexe\n\nTelephone: $telephone\n\nEmail: $email";


            $writer = new \Endroid\QrCode\Writer\PngWriter();
            $qrCode = new \Endroid\QrCode\QrCode($qrData);
            $result = $writer->write($qrCode);
            $png = $result->getString();

            // Crée le répertoire s'il n'existe pas
            $qrDirectory = 'public/uploads/qrcode/';

            // Enregistre le QR code dans un fichier avec un nom dynamique basé sur le timestamp
            $timestamp = time();
            $qrImagePath = $qrDirectory . $timestamp . '.png';

            // Utilisez file_put_contents pour enregistrer le contenu du QR code dans un fichier
            file_put_contents($qrImagePath, $png);


            # Lien dans le mail d'activation du compte---------------------------------

            $token = bin2hex(random_bytes(20));


            #Définir les données pour la table "user"
            $userData = [
                'email' => $this->request->getVar('email'),
                'mdp' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
                'role' => 'patient',
            ];

            #Insérer dans la table "user"
            $userID = $users->insert($userData);

            #Définir les données pour la table "patient"
            $patientData = [
                'user_id' => $userID,
                'id_hopital' => $id_hopital,
                'identifiant' => $reference,
                'nom' => $nom,
                'prenom' => $prenom,
                'date_de_naissance' => $date_de_naissance,
                'sexe' => $sexe,
                'telephone' => $telephone,
                // 'profession' => $profession,
                // 'lieu_habitation' => $lieu,
                // 'photo' => $newName,
                'lien' => $token,
                'qr_image' => $qrImagePath
            ];

            #Insérer dans la table "patient"

        }

        $message = "Merci de votre inscription. Activer votre compte" . anchor(uri: 'Patient/activate/' . $patientData['lien'], title: ' Activer maintenant', attributes: '');

        $query = $patients->insert($patientData);

        if (!$query) {
            #Si l'insertion dans la table "patient" échoue, vous pourriez envisager de supprimer l'utilisateur de la table "user"
            $users->delete(['id' => $userID]);
            return redirect()->back('/Patient/register')->with("fail", "quelque chose s'est mal passée");
        } else {
            $to = $this->request->getVar('email');
            $email = \Config\Services::email();
            $email->setTo($to);
            $email->setFrom('sigim@voisinagefablab.ci');
            $email->setSubject('Confirmation inscription');
            $email->setMessage($message);
            $email->send();
            $dataEmail = $email->printDebugger(['headers']);
            print_r($dataEmail);
        }
        return redirect()->to(base_url('/Patient/register'))->with("success", "Votre compte patient a bien été créé");
    }

    # Fonction d'activation de compte -------------------------------------------------

    public function activate($token)
    {
        $patient = new PatientModel();
        $verifToken = $patient->where('lien', $token)->findAll();
        if (count($verifToken) > 0) {
            $data['status'] = 1;
            $activatePatient = $patient->update($verifToken[0]['id'], $data);
            if ($activatePatient) {
                return redirect()->to('login')->with('success', 'Votre compte a été activé, vous pouvez maintenant vous connecter.');
            }
        } else {
            echo 'Not found';
        }
    }

    public function logoutPatient()
    {
        if (isset(session('patient')['id'])) {
            session()->remove('patient');
            return redirect()->to(base_url('login'));
        }
    }

    # GESTION DU CHAT
    public function alert_msg()
    {
        if (isset(session('users')['id'])) {
            $patientModel = new PatientModel();
            $patient = $patientModel->where('user_id', session()->get('id'))->first();
            $data['patient'] = $patient;
            $consultationModel = new ConsultationModel();
            $patientId = session()->get('id');
            $contacts = $consultationModel->distinct()
                ->select('consultation.id_prosante, prosantes.nom, prosantes.prenom, prosantes.photo, prosantes.status, users.role, users.user_status')
                ->join('prosantes', 'prosantes.user_id = consultation.id_prosante', 'left')
                ->join('users', 'users.id = prosantes.user_id', 'left')
                ->where('consultation.id_patient', $patientId)
                ->findAll();

            $newContacts = [];

            foreach ($contacts as &$contact) {
                $conversations = $consultationModel->distinct()
                    ->select('chats.sender_id, chats.receiver_id, chats.message as last_message, COUNT(chats.id) as total_messages, MAX(chats.created_at) as last_message_time, chats.status as last_message_status')
                    ->join('chats', "(chats.sender_id = $patientId AND chats.receiver_id = {$contact['id_prosante']}) OR (chats.sender_id = {$contact['id_prosante']} AND chats.receiver_id = $patientId)", 'left')
                    ->where('chats.receiver_id', $patientId)
                    ->where('chats.sender_id', $contact['id_prosante'])
                    ->where('chats.status', 0)
                    ->groupBy('chats.sender_id, chats.receiver_id')
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

             return view('Dashboard/patient/alert_msg', $data);
        } else {
            return null ;
        }
    }

    public function chatHome()
    {
        if (isset(session('users')['id'])) {


            $patientModel = new PatientModel();

            $patient = $patientModel->where('user_id', session()->get('id'))->first();
            $data['patient'] = $patient;


            $consultationModel = new ConsultationModel();


            $patientId = session()->get('id');

            $contacts = $consultationModel->distinct()
                ->select('consultation.id_prosante, prosantes.nom, prosantes.prenom, prosantes.photo, prosantes.status, users.role, users.user_status')
                ->join('prosantes', 'prosantes.user_id = consultation.id_prosante', 'left')
                ->join('users', 'users.id = prosantes.user_id', 'left')
                ->where('consultation.id_patient', $patientId)
                ->findAll();

            foreach ($contacts as &$contact) {
                $conversations = $consultationModel->distinct()
                    ->select('chats.sender_id, chats.receiver_id, chats.message as last_message, COUNT(chats.id) as total_messages, MAX(chats.created_at) as last_message_time, chats.status as last_message_status')
                    ->join('chats', "(chats.sender_id = $patientId AND chats.receiver_id = {$contact['id_prosante']}) OR (chats.sender_id = {$contact['id_prosante']} AND chats.receiver_id = $patientId)", 'left')
                    ->where('chats.sender_id', $patientId)
                    ->where('chats.receiver_id', $contact['id_prosante'])
                    ->orWhere('chats.sender_id', $contact['id_prosante'])
                    ->where('chats.receiver_id', $patientId)
                    ->groupBy('chats.sender_id, chats.receiver_id')
                    ->orderBy('last_message_time', 'DESC')
                    ->first();

                $contact['conversations'] = $conversations;
            }


            $data['contacts'] = $contacts;

            //   var_dump($data['contacts']);


            return view('Dashboard/patient/messagerie', $data);
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
            return view('Dashboard/patient/chat', ['validation' => $this->validator]);
        } else {
            $model = new ChatModel();
            $receiver_id = $_POST['receiver_id'];
            $patient = session()->get('users')['id'];
            $msg = [
                'sender_id' => $patient,
                'receiver_id' => $receiver_id,
                'message' => $this->request->getVar('message'),
                'status' => '0',
                'created_at' => date("Y-m-d H:i:s"),
            ];
            $model->insert($msg);
            session()->setFlashdata('success', 'Votre message a été envoyé avec succès !');
            return redirect()->to(base_url("/patient/chat"));
        }
    }

    public function getMessage($key)
    {
        if (isset(session('users')['id'])) {

            $patientModel = new PatientModel();
            $patient = $patientModel->where('user_id', session()->get('id'))->first();
            $data['patient'] = $patient;


            //   var_dump($data['patient']);

            $chat_model = new ChatModel();
            $user_model = new UserModel();
            $mysession_model = new ProsanteModel();
            // $key = $_POST['receiver_id'];

            $get_my_session = session()->get('users')['id'];


            $consultationModel = new ConsultationModel();


            $patientId = session()->get('id');

            $contacts = $consultationModel->distinct()
                ->select('consultation.id_prosante, prosantes.nom, prosantes.prenom, prosantes.photo, prosantes.status, users.role, users.user_status')
                ->join('prosantes', 'prosantes.user_id = consultation.id_prosante', 'left')
                ->join('users', 'users.id = prosantes.user_id', 'left')
                ->where('consultation.id_patient', $patientId)
                ->findAll();

            foreach ($contacts as &$contact) {
                $conversations = $consultationModel->distinct()
                    ->select('chats.sender_id, chats.receiver_id, chats.message as last_message, COUNT(chats.id) as total_messages, MAX(chats.created_at) as last_message_time, chats.status as last_message_status')
                    ->join('chats', "(chats.sender_id = $patientId AND chats.receiver_id = {$contact['id_prosante']}) OR (chats.sender_id = {$contact['id_prosante']} AND chats.receiver_id = $patientId)", 'left')
                    ->where('chats.sender_id', $patientId)
                    ->where('chats.receiver_id', $contact['id_prosante'])
                    ->orWhere('chats.sender_id', $contact['id_prosante'])
                    ->where('chats.receiver_id', $patientId)
                    ->groupBy('chats.sender_id, chats.receiver_id')
                    ->orderBy('last_message_time', 'DESC')
                    ->first();

                $contact['conversations'] = $conversations;
            }


            $data['contacts'] = $contacts;

            //   var_dump($data['contacts']);

            $get_my_user = $user_model
                ->select('users.id , users.user_status, users.updated_at, prosantes.nom , prosantes.photo')
                ->join('prosantes', 'prosantes.user_id = users.id', 'left')
                ->where('users.id', $key)
                ->first();

            $data['get_my_users'] = $get_my_user;


            // var_dump($data['get_my_users']);
            // exit();

            $conversations = $chat_model
                ->select('chats.id, chats.sender_id, chats.receiver_id, chats.message, chats.status, chats.updated_at, prosantes.user_id as prosante_id, prosantes.nom as prosante_nom, prosantes.photo as prosante_photo, patient.user_id as patient_id, patient.nom as patient_nom , patient.photo as patient_photo')
                ->join('patient', 'chats.sender_id = patient.user_id', 'left') // Join avec patients
                ->join('prosantes', 'chats.sender_id = prosantes.user_id', 'left') // Join avec prosantes
                ->where('chats.sender_id', $key)
                ->where('chats.receiver_id', $get_my_session)
                ->orWhere('chats.receiver_id', $key)
                ->where('chats.sender_id', $get_my_session)
                ->orderBy('chats.id', 'ASC')
                ->get();

            $data['conversations'] = $conversations->getResult();

            //  var_dump($data['conversations']);
            //  exit();

            return view('Dashboard/patient/chat', $data);
        } else {
            return redirect()->to(base_url('login'));
        }
    }
    
    public function loadMessages()
    {

        if (isset(session('users')['id'])) {

            $chat_model = new ChatModel();
            $user_model = new UserModel();
            $mysession_model = new PatientModel();
            $prosante_model = new ProsanteModel();
            $key = $_POST['receiver_id'];

            $get_my_session = session()->get('users')['id'];

            // var_dump($key);
            // exit();

            $contacts = $chat_model
                ->select('IF(chats.sender_id = ' . $get_my_session . ', chats.receiver_id, chats.sender_id) as contact_id, MAX(chats.message) as last_message, MAX(chats.created_at) as last_message_time, COUNT(chats.id) as message_count, SUM(chats.status = 0) as unread_count, MAX(prosantes.nom) as prosante_nom, MAX(prosantes.photo) as prosante_photo, MAX(users.user_status) as online_hoffline')
                ->join('users', 'chats.sender_id = users.id', 'left')
                ->join('prosantes', 'prosantes.user_id = users.id', 'left')
                ->where('chats.sender_id = ' . $get_my_session . ' OR chats.receiver_id = ' . $get_my_session)
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

            $db->table('chats')->set($updateStatus)->where('sender_id', $key)->where('receiver_id', $get_my_session)->update();

            $data['conversations'] = $conversations->getResult();

            return view('Dashboard/patient/loadMessages', $data);
        }
    }
    #GESTION DU PROFILE

    public function getProfileP()
    {
        if (isset(session('users')['id'])) {
            $patientModel = new PatientModel();
            $rendezvousModel = new RendezvousModel();
            $userModel = new  UserModel();
            $user = $userModel->find(session()->get('id'));
            $data['sum'] = $rendezvousModel->getNbRdvValides();
            $patient = $patientModel->select('patient.*, users.*')
                ->join('users', 'users.id = patient.user_id', 'left')
                ->where('patient.user_id', session()->get('id'))
                ->first();
            $data['patient'] = $patient;
            /*  $data['user'] = $user;*/
            return view('Dashboard/patient/profile-patient', $data);
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function updateProfile()
    {

        $patientModel = new PatientModel();
        $patient = $patientModel->select('patient.*, users.*')
            ->join('users', 'users.id = patient.user_id', 'left')
            ->where('patient.user_id', session()->get('id'))
            ->first();
        $data['patient'] = $patient;

        //   var_dump($prosante['email']);

        $rules = [
            'nom_patient' => 'required|min_length[3]|max_length[20]',
            'prenom_patient' => 'required|min_length[3]|max_length[20]',
            /* 'service_patient' => 'required|min_length[3]|max_length[20]',*/
            /* 'email_patient' => 'required|min_length[6]|max_length[100]|valid_email|is_unique[users.email]',*/
            //  'photo_prosante' => 'mime_in[photo_prosante,image/jpg,image/jpeg,image/png]|max_size[photo_prosante, 5120]',
        ];

        $messages = [
            'nom_patient' => [
                'required' => 'Le champ nom est requis.',
                'min_length' => 'Le nom doit avoir au moins 3 caractères.',
                'max_length' => 'Le nom ne peut pas dépasser 20 caractères.'
            ],
            'prenom_patient' => [
                'required' => 'Le champ prenom est requis.',
                'min_length' => 'Le prenom doit avoir au moins 3 caractères.',
                'max_length' => 'Le prenom ne peut pas dépasser 20 caractères.'
            ],

            'email_patient' => [
                'required' => 'Le champ email est requis et doit être valide.',
            ],
        ];

        if (!$this->validate($rules, $messages)) {
            return view('Dashboard/patient/profile-patient', ['validation' => $this->validator]);
        } else {


            $user = $this->request->getVar('my_id');

            $photo = $this->request->getFile('photo_patient');

            // Définir le chemin du répertoire de destination pour le fichier téléchargé
            $path = 'uploads/images/';

            // Utiliser la fonction move_file() pour déplacer le fichier et obtenir le nouveau nom
            $newPic = $this->move_file($path, $photo);



            $piece = $this->request->getFile('piece_identite');

            $pathFiles = 'uploads/pieces/';

            $newFiles = $this->move_file($pathFiles, $piece);

            $updateData = [
                'nom' => $this->request->getVar('nom_patient'),
                'prenom' => $this->request->getVar('prenom_patient'),
                'nom_urgence' => $this->request->getVar('nom_urgence'),
                'profession' => $this->request->getVar('profession_patient'),
                'lieu_naissance' => $this->request->getVar('lieu_naissance'),
                'lieu_habitation' => $this->request->getVar('lieu_habitation'),
                'contact_urgent' => $this->request->getVar('contact'),
                'parent' => $this->request->getVar('parent'),
                'type_piece' => $this->request->getVar('type_piece'),
            ];

            $updateEmailData = [
                'email' => $this->request->getVar('email_patient'),
            ];

            $updatePhotoData = [
                'photo' => $newPic,
            ];


            /*   $updatePieceData = [
                'piece' => $newFiles,
            ];*/


            $db = \Config\Database::connect();

            $db->table('patient')->set($updateData)->where('user_id', $user)->update();


            $verif_photo = $_FILES['photo_patient']['name'];
            /*  $verif_piece = $_FILES['piece_prosante']['name'];  */


            if (!empty($verif_photo)) {
                $db->table('patient')->set($updatePhotoData)->where('user_id', $user)->update();
            }

            if ($this->request->getVar('email_patient') != $patient['email']) {
                $db->table('users')->set($updateEmailData)->where('id', $user)->update();
            }

            /* if (!empty($verif_piece)) {
                $db->table('prosantes')->set($updatePieceData)->where('user_id', $user)->update();
            }*/

            return redirect()->to(base_url('/patient/profile-patient'))->with("success", "la mise a été effectué avec succes !");
        }
    }

    public function updatePasswordProfile()
    {

        $patientModel = new PatientModel();
        $patient = $patientModel->select('patient.*, users.*')
            ->join('users', 'users.id = patient.user_id', 'left')
            ->where('patient.user_id', session()->get('id'))
            ->first();
        $data['patient'] = $patient;


        $rules = [
            'actual_password_patient' => 'required|min_length[7]',
            'new_password_patient' => 'required|min_length[7]',
            'confirm_new_password_patient' => 'required|min_length[7]',
        ];

        $messages = [
            'actual_password_patient' => [
                'required' => 'Le champ nom est requis.',
                'min_length' => 'Le champ doit avoir au moins 7 caractères.'
            ],
            'new_password_patient' => [
                'required' => 'Le champ prenom est requis.',
                'min_length' => 'Le champ doit avoir au moins 7 caractères.'
            ],
            'confirm_new_password_patient' => [
                'required' => 'Le champ service est requis.',
                'min_length' => 'Le champ doit avoir au moins 7 caractères.'
            ],
        ];



        if (!$this->validate($rules, $messages)) {
            return view('Dashboard/patient/profile-patient', ['validation' => $this->validator]);
        } else {


            $user = $this->request->getVar('my_id');

            $actual_password_prosante = $this->request->getVar('actual_password_patient');

            $new_password_prosante = $this->request->getVar('new_password_patient');
            $hash_new_password = password_hash($new_password_prosante, PASSWORD_BCRYPT);

            $confirm_new_password_prosante = $this->request->getVar('confirm_new_password_patient');

            $updateMdp = [
                'mdp' => $hash_new_password,
            ];


            $message =
                "<!DOCTYPE html>" .
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
                "<div class='title-section' style='font-size:26px;font-weight:bolder;margin:16px 0;text-transform:capitalize'>" . "Nouveau mot de Passe" . "</div>" .
                "<hr style='width: 50%;'>" .
                "<div class='body-section-content' style='padding:16px;font-style:justify'>" .
                "Suite à votre requete d'integrer la famille" . "<b>" . "<a href='https://www.youtube.com' style='text-transform: underline;'>" . "SIGIM" . "</a>" . "</b>" . "nous venons par ce mail vous informer que votre Mot de Passe a bien été Modifié !! " . "<br>" .
                "Vos informations de connexion ce trouve ci-deçous :" .
                "<div style='font-weight:bold;'>" . "lien de connexion :" . "<span>" . "<a href='https://www.youtube.com'>" . "lien.com" . "</a>" . "</span>" . "</div>" .
                "<div style='font-weight:bold;'>" . "Nouveau Mot de passe :" . "<span>" . $new_password_prosante . "</span>" . "</div>" .
                "<div style='font-weight:bold;'>" . "Email :" . "<span>" . $patient['email'] . "</span>" . "</div>" .
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


            if (password_verify($actual_password_prosante, $patient['mdp'])) {
                if ($new_password_prosante === $confirm_new_password_prosante) {
                    if ($hash_new_password !== $patient['mdp']) {


                        $to = $patient['email'];
                        $email = \Config\Services::email();
                        $email->setTo($to);
                        $email->setFrom('sigim@voisinagefablab.ci');
                        $email->setSubject('Nouveau mot de passe');
                        $email->setMessage($message);
                        $email->send();
                        $data = $email->printDebugger(['headers']);
                        print_r($data);


                        $db->table('users')->set($updateMdp)->where('id', $user)->update();
                    } else {

                        return redirect()->to(base_url('/patient/profile-patient'))->with("fail", "la mise a été effectué avec succes !");
                    }
                } else {
                    return redirect()->to(base_url('/patient/profile-patient'))->with("fail", "mot de passe non identique !");
                }
            } else {
                return redirect()->to(base_url('/patient/profile-patient'))->with("fail", "ce mot de passe n'existe pas dans notre base de donnée !");
            }

            return redirect()->to(base_url('/patient/profile-patient'))->with("success", "Mot de passe modifié avec succes !");
        }
    }

    public function search()
    {
        // Récupérer le nom du patient saisi
        $patientIdentifiant = $this->request->getVar('identifiant');

        // Charger le modèle Patient
        $patientModel = new \App\Models\PatientModel();
        $prosanteModel = new \App\Models\ProsanteModel();

        $prosante = $prosanteModel->where('user_id', session()->get('id'))->first();
        $data['prosante'] = $prosante;


        // Rechercher le patient dans la base de données
        $patients = $patientModel->select('patient.*, users.email AS email')
            ->join('users', 'users.id = patient.user_id', 'left')
            ->where('identifiant', $patientIdentifiant)
            ->findAll();

        // var_dump($data);
        // exit();

        // Si aucun patient n'est trouvé, afficher un message
        if (!$patients) {
            return $this->response->setBody('Aucun patient trouvé');
        }

        // Afficher les informations du patient correspondant
        return view('Dashboard/prosante/identification_patient', ['patients' => $patients, 'prosante' => $data['prosante']]);
    }
}
