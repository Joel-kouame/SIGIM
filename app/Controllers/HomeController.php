<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\InformationModel;
use App\Models\PatientModel;
use App\Models\RendezvousModel;
use App\Models\HopitalModel;
use App\Models\ProsanteModel;
use App\Models\ServiceModel;
use App\Models\UserModel;

class HomeController extends BaseController
{
    // public function index()
    // {
    //     //
    // }
    
    // ACCUEIL KOUAME
    public function index(): string
    {
        $informationModel = new InformationModel();
        $information = $informationModel->first();
        $data['information'] = $information;
        return view('Frontend/Accueil/index', $data);
    }
    public function contact(): string
    {
        $informationModel = new InformationModel();
        $information = $informationModel->first();
        $data['information'] = $information; 
        return view('Frontend/Accueil/contact', $data);
    }
    public function apropo(): string
    {
        $informationModel = new InformationModel();
        $information = $informationModel->first();
        $data['information'] = $information; 
        return view('Frontend/Accueil/apropos', $data);
    }
    public function blogs(): string
    {
        $informationModel = new InformationModel();
        $information = $informationModel->first();
        $data['information'] = $information; 
        return view('Frontend/Accueil/blog', $data);
    }
    public function eau(): string
    {
        $informationModel = new InformationModel();
        $information = $informationModel->first();
        $data['information'] = $information; 
        return view('Frontend/Accueil/blogs_eau', $data);
    }
    public function faqs(): string
    {
        $informationModel = new InformationModel();
        $information = $informationModel->first();
        $data['information'] = $information; 
        return view('Frontend/Accueil/faq', $data);
    }
    public function infoCarnet()
    {
        $informationModel = new InformationModel();
        $information = $informationModel->first();
        $data['information'] = $information; 
        return view('Frontend/Accueil/infocarnet', $data);
    }
    # Dashboard----------------------------------------

    public function dashboardProsante()
    {
        if (isset(session('users')['id'])) {

            $prosanteModel = new ProsanteModel();
            $rendezvousModel = new RendezvousModel();
            $data['sum'] = $rendezvousModel->getNbRdvValides();
            $prosante = $prosanteModel->where('user_id', session()->get('id'))->first();
            $data['prosante'] = $prosante;
            return view('Dashboard/prosante/index', $data);
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function dashboardPatient()
    {
        if (isset(session('users')['id'])) {
            $patientModel = new PatientModel();
            $rendezvousModel = new RendezvousModel();
            $data['sum'] = $rendezvousModel->getNbRdvValides();
            $patient = $patientModel->where('user_id', session()->get('id'))->first();
            $data['patient'] = $patient;

            return view('Dashboard/patient/index1', $data);
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function chat()
    {
        if (isset(session('users')['id'])) {
            $patientModel = new PatientModel();
            $patient = $patientModel->where('user_id', session()->get('id'))->first();
            $data['patient'] = $patient;
            return view('Dashboard/patient/chat', $data);
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function createRendezVous()
    {
        if (isset(session('users')['id'])) {
            $hopitalModel = new HopitalModel();
            $hopital = $hopitalModel->findAll();
            $serviceModel = new ServiceModel();
            $service = $serviceModel->findAll();
            $rendezvous = new RendezvousModel();
            $rdv = $rendezvous->where('id', session()->get('id'))->first();
            $patientModel = new PatientModel();
            $patient = $patientModel->where('user_id', session()->get('id'))->first();
            $data['hopital'] = $hopital;
            $data['service'] = $service;
            $data['patient'] = $patient;
            $data['rendez_vous'] = $rdv;
            return view('Dashboard/patient/create_rendez_vous', $data);
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function getRendezVous()
    {
        
        $sessionId = session('users')['id'] ?? null;

        $rendezvous = null; // Initialise la variable à null

        if ($sessionId) {
            $rendezvousModel = new RendezvousModel();
            $patientModel = new PatientModel();
            $hopitalModel =  new HopitalModel();
        
            $data['sum'] = $rendezvousModel->getNbRdvValides();
            $data['annule'] = $rendezvousModel->getNbRdvAnnuler();
            $data['attente'] = $rendezvousModel->getNbRdvAttente();

            // Assurez-vous que 'user_id' est la colonne correcte dans votre table de rendez-vous
            $rendezvous = $rendezvousModel->where('patient_id', $sessionId)->findAll();
            $patient = $patientModel->where('user_id', $sessionId)->first();
        }

        $data['patient'] = $patient;
        $data['rendezvous'] = $rendezvous;
        // var_dump($rendezvous); exit;

        if ($sessionId) {
            return view('Dashboard/patient/afficher_rendez_vous', $data);
        }

        return redirect()->to(base_url('login'));
    }

    public function alerte()
    {
        if (isset(session('users')['id'])) {
            $patientModel = new PatientModel();
            $patient = $patientModel->where('user_id', session()->get('id'))->first();
            $data['patient'] = $patient;
            return view('Dashboard/patient/alerte', $data);
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function create_register()
    {
        if (isset(session('users')['id'])) {
            return view('Dashboard/register');
        } else {
            return redirect()->to(base_url('login'));
        }
    }


    public function messagerie()
    {
        if (isset(session('users')['id'])) {
            $prosanteModel = new ProsanteModel();
            $prosante = $prosanteModel->where('user_id', session()->get('id'))->first();
            $data['prosante'] = $prosante;
            return view('Dashboard/prosante/messagerie', $data);
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function infoPatient()
    {
        if (isset(session('users')['id'])) {
            $patientModel = new PatientModel();
            $patient = $patientModel->where('user_id', session()->get('id'))->first();
            $data['patient'] = $patient;
            return view('Dashboard/patient', $data);
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function list_rendez_vous()
    {
        if (isset(session('users')['id'])) {
            $rendezvousModel = new  RendezVousModel();
            $prosanteModel = new ProsanteModel();
            $patientModel = new  PatientModel();
            $prosante = $prosanteModel->where('user_id', session()->get('id'))->first();
            
            $rendezvous = $rendezvousModel->findAll();
            $patient = $patientModel->where('user_id', session()->get('id'))->first();
           
            $data['prosante'] = $prosante;
            $data['rendezvous'] = $rendezvous;
            $data['patient'] = $patient;
            return view('Dashboard/adminhopital/rendez_vous_list', $data);
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function createAlerte()
    {
        if (isset(session('users')['id'])) {
            $prosanteModel = new ProsanteModel();
            $prosante = $prosanteModel->where('user_id', session()->get('id'))->first();
            $data['prosante'] = $prosante;
            return view('Dashboard/prosante/alertep', $data);
        } else {
            return redirect()->to(base_url('login'));
        }
    }
    public function rpdA()
    {
        return view('Dashboard/patient/auth-500');
    }
}
