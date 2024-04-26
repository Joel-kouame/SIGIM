<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\UserController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\RendezvousModel;
use App\Models\ServiceModel;
use App\Models\PatientModel;
use App\Models\UserModel;

use function App\Helpers\getStatusLabel;

class RendezvousController extends BaseController
{

    public function  __construct()
    {
        helper('status');
    }

    // public function index()
    // {
    //     // Affiche la vue du formulaire
    //     return view('rendezvous_form');
    // }

    public function save()
    {
        $patientModel = new  PatientModel();
        $patient = $patientModel->where('user_id', session()->get('id'))->first();
        // var_dump($patient);die;
        
        # Les règles de validation
        $rules = [
            'nom_rendez_vous' => 'required|min_length[3]',
            'prenom_rendez_vous' => 'required|min_length[5]',
            'contact_rendez_vous' => 'required',
            'service_rendez_vous' => 'required',
            'hopital_rendez_vous' => 'required',
            'date_rendez_vous' => 'required',
            'motif_rendez_vous' =>  'required|min_length[10]',
        ];

        $messages = [
            'nom_rendez_vous' =>  [
                'required' => "Le nom est obligatoire.",
                'min_length' => "Le nom doit contenir au moins 3 caractères."
            ],
            'prenom_rende vous' => [
                'required' => "Le prénom est obligatoire.",
                'min_length' => "Le prénom doit contenir au moins 5 caractères."
            ],
            'contact_rendez_vous' => [
                'checkContact' => "Le numéro de téléphone doit être au format : +21671234567"
            ],
            'date_rendez_vous' => [
                'validDateCompare' => "La date ne peut pas être antérieure à la date actuelle."
            ],
            'service_rendez_vous' => [
                'required' => "Vous devez sélectionner un service."
            ],
            'hopital_rendez_vous' => [
                'checkHopital' => "L'hôpital est obligatoire."
            ],
            'date_rendez_vous' =>  [
                'required' => "La date est obligatoire."
            ],
            'motif_rendez_vous' => [
                'required' => "Le motif est obligatoire.",
                'min_length' => "Le motif doit contenir au moins 10 caractères."
            ]

        ];

        if (!$this->validate($rules, $messages)) {
            return view('Dashboard/patient/create_rendez_vous', ['validation' => $this->validator, 'patient' => $patient]);
        } else {

            // Récupère l'ID de l'utilisateur connecté depuis la session
            $userID = session('users')['id'];

            $nom = $this->request->getVar('nom_rendez_vous');
            $prenom = $this->request->getVar('prenom_rendez_vous');
            $contact = $this->request->getVar('contact_rendez_vous');
            $service = $this->request->getVar('service_rendez_vous');
            $hopital = $this->request->getVar('hopital_rendez_vous');
            $date = $this->request->getVar('date_rendez_vous');
            $motif = $this->request->getVar('motif_rendez_vous');

            // Vérifie si le formulaire a été soumis
            if ($this->request->getMethod() === 'post') {
                // Vérifie si l'utilisateur est connecté
                if (!$userID) {
                    // Redirige vers la page de connexion si l'utilisateur n'est pas connecté
                    return redirect()->to(base_url('login'));
                    $patientModel = new  PatientModel();
                    $patient = $patientModel->find($userID);
                  
                }
                $rendezvousModel = new RendezvousModel();

                # Générer la référence du rendez-vous-------------------------------

                if (isset($nom, $prenom)) {
                    // Obtenez les initiales du nom et prénom
                    $initialesNom = substr($nom, 0, 1);
                    $initialesPrenom = substr($prenom, 0, 1);

                    // Récupérez le dernier ID enregistré dans la base de données
                    $lastId = $rendezvousModel->selectMax('id')->first()['id'];

                    // Incrémentez le dernier ID pour le nouvel enregistrement
                    $newId = $lastId + 1;

                    // Génère une référence unique avec les initiales, le numéro et les initiales du prénom
                    $reference = $initialesNom . $initialesPrenom . rand(1000, 9999) . 'N°' . $newId;

                    // Utilisez la référence comme nécessaire dans votre application
                } else {
                    echo "Erreur!";
                }


                // Récupère les données du formulaire
                $data = [
                    'patient_id' => $userID,
                    'reference' => $reference,
                    'nom' => $nom,
                    'prenom' =>  $prenom,
                    'contact' => $contact,
                    'service' => $service,
                    'id_hopital' => $hopital,
                    'date' => $date,
                    'motif' => $motif,
                ];

                // Chargez le modèle approprié (assurez-vous d'avoir créé le modèle)

                // Enregistre les données dans la base de données
                $query = $rendezvousModel->save($data);

                if (!$query) {
                    return redirect()->back()->withInput()->with('fail', 'Une erreur est survenue.');
                } else {

                    // Redirige vers la page de confirmation ou une autre page
                    return redirect()->to('/patient/create_rendez_vous')->with('success', 'Votre rendez-vous a bien été enregistré');
                }
            }
        }
    }

    public function edit($id)
    {
        // Chargez le modèle
        $rendezvousModel = new RendezvousModel();

        // Récupère les données du rendez-vous à modifier
        $data['rendez_vous'] = $rendezvousModel->find($id);

        // Affiche la vue du formulaire avec les données à modifier
        return view('rendezvous_edit', $data);
    }

    public function update($id)
    {
        // Chargez le modèle
        $rendezvousModel = new RendezvousModel();

        // Récupère les données du formulaire
        $data = [
            'nom' => $this->request->getPost('nom_rendez_vous'),
            'prenom' => $this->request->getPost('prenom_rendez_vous'),
            'contact' => $this->request->getPost('contact_rendez_vous'),
            'service' => $this->request->getPost('service_rendez_vous'),
            'hopital' => $this->request->getPost('hopital_rendez_vous'),
            'date' => $this->request->getPost('date_rendez_vous'),
            'heure' => $this->request->getPost('heure_rendez_vous'),
            'motif' => $this->request->getPost('motif_rendez_vous'),
        ];

        // Met à jour les données dans la base de données
        $rendezvousModel->update($id, $data);

        // Redirige vers la page de confirmation ou une autre page
        return redirect()->to('/confirmation');
    }

    public function delete($id)
    {
        // Chargez le modèle
        $rendezvousModel = new RendezvousModel();

        // Supprime le rendez-vous
        $rendezvousModel->delete($id);

        // Redirige vers la page de confirmation ou une autre page
        return redirect()->to('/confirmation');
    }


    public function validerRendezVous($id)
    {
        // Chargez le modèle et récupérez l'objet correspondant au id passé en paramètre.
        $rendezvousModel = new RendezvousModel();
        $rendezvous = $rendezvousModel->find($id);

        // Mets à jour le statut du rendez-vous à "Validé"
        $rendezvous['status'] = 1;

        // Enregistre les modifications dans la BDD
        $result = $rendezvousModel->update($id, ['status' => $rendezvous['status']]);
        if ($result) {
            // Retourne vers la liste des rendez-vous
            return redirect()->to('/prosante/rendez_vous_list');
        } else {
            echo 'error';
        }
    }

    public function annulerRendezVous($id)
    {
        // Chargez le modèle et récupérez l'objet correspondant au id passé en paramètre.
        $rendezvousModel = new RendezvousModel();
        $rendezvous = $rendezvousModel->find($id);

        // Mets à jour le statut du rendez-vous à "Validé"
        $rendezvous['status'] = 2;

        // Enregistre les modifications dans la BDD
        $result = $rendezvousModel->update($id, ['status' => $rendezvous['status']]);
        if ($result) {
            // Retourne vers la liste des rendez-vous
            return redirect()->to('/prosante/rendez_vous_list');
        } else {
            echo 'error';
        }
    }

    
    // @@@@@@@@@@@@@@@@@@@@@@@@@@

    public function prosantedebug()
    {
        $rendezvousModel = new RendezvousModel();
        $data['sum'] = $rendezvousModel->getNbRdvValides();
        $data['annule'] = $rendezvousModel->getNbRdvAnnuler();
        $data['attente'] = $rendezvousModel->getNbRdvAttente();

        return view('Dashboard/prosante/profile', $data);
    }
}
