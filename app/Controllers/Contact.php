<?php

namespace App\Controllers;

use App\Models\ContactModel;
use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index()
    {
        //
    }

    public function saveContact()
    {
        $rules = [
            'nom' => 'required|min_length[3]|max_length[100]',
            'email' => 'required|min_length[6]|max_length[100]|valid_email|is_unique[contact.email]',
            'message' => 'required',
        ];

        $messages = [
            'nom' => [
                'required' => 'Le champ nom est obligatoire.',
                'min_length' => 'Le nom doit avoir au moins 3 caractères.',
                'max_length' => 'Le nom ne peut pas dépasser 100 caractères.'
            ],

            'email' => [
                'required' => 'Le champ email est obligatoire.',
                'valid_email' => 'l\'email doit être valide.'
            ],

            'message' => [
                'required' => 'Le champ de message est obligatoire.',
            ],
        ];

        if (!$this->validate($rules, $messages)) {

            return view('Frontend/Accueil/contact', ['validation' => $this->validator]);
        }else{
            $contact = new ContactModel();

            $nom = $this->request->getVar('nom');
            $email = $this->request->getVar('email');
            $message = $this->request->getVar('message');
            $data = [
                "nom" => $nom,
                "email" => $email,
                "message" => $message
            ];
        }
        $query = $contact->insert($data);

        if (!$query) {
            return redirect()->back('/contact')->with("fail", "Une erreur est survenue lors de l'envoi du mail");
        }else{
            session()->setFlashData("success", "Votre message a bien été envoyé.");
            return redirect()->to(base_url('/contact'));
        }

    }
}
