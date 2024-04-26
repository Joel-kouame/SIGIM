<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\MedicamentModel;
use App\Models\ProsanteModel;
use App\Models\PatientModel;

class MedicamentController extends BaseController
{
    public function index()
    {
        $medicamentModel = new MedicamentModel();
        $data['medicament'] = $medicamentModel->findAll();

        return view('Dashboard/prosante/ajout_information', $data); // Appelle la vue et passe les données récupérées
    }

    public function saveMedocs()
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
            'nom_medicament' => 'required',
            'posologie' =>  'required',
        ];
    
        $messages = [
            'nom_medicament' => [
                'required' => "Le nom du médicament est obligatoire.",
            ],
            'posologie' => [
                'required' => "La posologie du médicament est obligatoire."
            ],
        ];
    
        if (!$this->validate($rules, $messages)) {
            return view('Dashboard/prosante/ajout_information/' . $patient['user_id'], ['validation' => $this->validator, 'patient' => $data['patient']]);
        } else {
            $dataMedoc = [
                'nom_medicament' => $this->request->getVar('nom_medicament'),
                'posologie'  => $this->request->getVar('posologie'),
                'id_prosante' => session()->get('id'),
                'id_patient' => $this->request->getVar('id_patient'),    
            ];
            $medicamentModel = new MedicamentModel();
    
            $medicamentModel->insert($dataMedoc); // Utilisation de la méthode insert() pour ajouter une nouvelle entrée
            return redirect()->to('prosante/ajout_information/' . $patient['user_id'])->with('success', 'Medicament enregistré avec succès.');
        }
    }
}