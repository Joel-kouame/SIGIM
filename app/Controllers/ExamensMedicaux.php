<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ExamensMedicauxModel;


class ExamensMedicaux extends BaseController
{
    public function index()
    {
        //

       if (isset(session('patient')['id'])) {

        $resultat = new ExamensMedicauxModel();
        $id_exp = session('patient')['id'] ;
        $datas['examen'] = $resultat->where('id_exp',$id_exp)->orderBy('date_examen','DESC')->findAll();

       return view('Frontend/Patient/examen', $datas);

       }else{
        return view('Frontend/Patient/login');
       }

    }

    public function move_file($path, $fichier)
    {
        if($img = $fichier)
        {
            if ($img->isValid() && !$img->hasMoved())
            {
                $newName = $img->getRandomName();
                $img->move($path, $newName);

                return $path.$newName;
            }
        }
    }


    public function save(){

        if (isset(session('patient')['id'])) {

     /*   $rules = [
            'id_dest' => 'required|min_length[3]|max_length[20]',
            'nom_message' => 'required|min_length[3]|max_length[20]',
            'fichier_examen' => 'uploaded[photo]|mime_in[photo,image/jpg,image/jpeg,image/png]|max_size[photo, 1024]',
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
             'nom_fichier' => [
                'required' => 'Le champ photo est requis.',
            ],


        ];
*/
          // $alert_notif = new Alert_notifModel();

       $id_exp = session('patient')['id'] ;

       $examen = new ExamensMedicauxModel();

       $fichier_examen = $this->request->getFile('nom_fichier');

       // Définir le chemin du répertoire de destination pour le fichier téléchargé
       $path = 'uploads/fichier_examen/';

       // Utiliser la fonction move_file() pour déplacer le fichier et obtenir le nouveau nom
       $newName = $this->move_file($path, $fichier_examen);
       $data = [
        'id_exp' => $id_exp,
        'id_dest' => $this->request->getVar('id_dest'),
        'nom_examen' => $this->request->getVar('nom_examen'),
        'fichier_examen' => $newName,

        ];


       // $dataexamen['alert_notif'] = $examen->where('id_dest',$id_dest)->orderBy('vue_notif','ASC')->findAll();



        $query = $examen->insert($data);


        if (!$query) {
            return redirect()->back(base_url('/Patient/examen'))->with("fail", "quelque chose s'est mal pasesée");
            # code...
        } else {

            return redirect()->to(base_url('/Patient/examen'))->with("success", "Votre compte a bien été crée pour l'activer verifier votre boite de messagerie !");
        }


    }else{
        return view('Frontend/Patient/login');
    }
}

}
