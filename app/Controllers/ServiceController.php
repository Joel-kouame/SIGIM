<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ServiceModel;

class ServiceController extends BaseController
{
    public function index()
    {
        //
    }

    public function saveService()
    {
        $hopitalModel = new HopitalModel();
        $hopital = $hopitalModel->where('id',session('hopital')['id'])->first();
        
        $rules =  [
            'service' => 'required|is_unique[services.nom_service]',
            'nom_responsable' =>  'required',
            'contact_respo' =>  'required|min_length[10]|max_length[15]',
            'nombre' =>   'required|numeric',
            'date' =>      'required',
            'description' => 'required',
        ];

        $messages = [
            'service' => [
                'required' => "Le nom du service est obligatoire.",
                'is_unique' => "Ce nom de service existe déja."
            ],
            'nom_responsable' => [
                'required' => "Le nom du responsable est obligatoire."
            ],
            'contact_respo' => [
                'required' => "Le contact est obligatoire.",
                'min_length' => "Votre numéro de téléphone doit contenir au moins 10 chiffres.",
                'max_length' => "Votre numéro de téléphone ne peut pas dépasser 15 caractères."
            ],
            'nombre' => [
                'required' => "Le nombre d'intervenants est obligatoire.",
                'numeric' => "La quantité doit être un nombre."
            ],
            'date' => [
                'required' => "La date est obligatoire."
            ],
            'description' => [
                'required' => "La description est obligatoire."
            ]
        ];

        if (!$this->validate($rules, $messages)) {
            return view('Dashboard/adminhopital/forms_services', ['validation' => $this->validator]);
        } else {
            $data = [
                // 'id_hopital' => 
                'id_hopital' => session()->get('hopital')['id'],
                'nom_service' => $this->request->getVar('service'),
                'nom_responsable'  => $this->request->getVar('nom_responsable'),
                'contact_responsable'       => $this->request->getVar('contact_respo'),
                'nbre_intervenant'     => $this->request->getVar('nombre'),
                'date_creation' => $this->request->getVar('date'),
                'description'   => $this->request->getVar('description')

            ];
            $ServiceModel = new ServiceModel();

            $ServiceModel->save($data);
            return redirect()->to('/adminhopital/forms_services')->with('success', 'Enregistrement réussi.');
        }
    }
}
