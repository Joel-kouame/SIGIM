<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RendezVousPtProsModel;


class RendezVousPtPros extends BaseController
{


    public function index()
    {
        //  

       if (isset(session('patient')['id'])) {

        $rdv = new RendezVousPtProsModel();
        $id_exp = session('patient')['id'] ; 
        $datas['rdvs'] = $rdv->where('id_exp',$id_exp)->orderBy('date_rendez_vous','DESC')->findAll();

       return view('Frontend/Patient/calender', $datas);

    

       }
      
    }


    public function save_rdv(){


        $rules = [
            'id_dest' => 'required|min_length[3]|max_length[20]',
            'sujet_rendez_vous' => 'required|min_length[3]|max_length[20]',
            'message_rendez_vous' => 'required|min_length[3]|max_length[20]',
            'date_rendez_vous' => 'required|min_length[6]|max_length[100]|valid_email|is_unique[prosantes.email]',
        ];

        $messages = [
            'id_dest' => [
                'required' => 'Le champ nom est requis.',
                'min_length' => 'Le nom doit avoir au moins 3 caractères.',
                'max_length' => 'Le nom ne peut pas dépasser 20 caractères.'
            ],
            'sujet_rendez_vous' => [
                'required' => 'Le champ prenom est requis.',
                'min_length' => 'Le prenom doit avoir au moins 3 caractères.',
                'max_length' => 'Le prenom ne peut pas dépasser 20 caractères.'
            ],
            'message_rendez_vous' => [
                'required' => 'Le champ prenom est requis.',
                'min_length' => 'Le prenom doit avoir au moins 3 caractères.',
                'max_length' => 'Le prenom ne peut pas dépasser 20 caractères.'
            ],

            'date_rendez_vous' => [
                'required' => 'Veuillez choisir votre date de rendez-vous',
            ],


        ];

          // $alert_notif = new Alert_notifModel();

       $id_exp = session('patient')['id'] ;

       $rdv = new RendezVousPtProsModel();

       $data = [
        'id_exp' => $id_exp,
        'id_dest' => $this->request->getVar('id_dest'),
        'sujet_rendez_vous' => $this->request->getVar('sujet_rendez_vous'),
        'date_rendez_vous' => $this->request->getVar('date_rendez_vous'),
        'message_rendez_vous' => $this->request->getVar('message_rendez_vous'),
        ];
 

       // $datardv['alert_notif'] = $rdv->where('id_dest',$id_dest)->orderBy('vue_notif','ASC')->findAll();


        $query = $rdv->insert($data);

        
        if (!$query) {
            return redirect()->back(base_url('/Patient/calender'))->with("fail", "quelque chose s'est mal pasesée");
            # code...
        } else {

            return redirect()->to(base_url('/Patient/calender'))->with("success", "Votre compte a bien été crée pour l'activer verifier votre boite de messagerie !");
        }
      

    }


}
