<?php

namespace App\Models;

use CodeIgniter\Model;

class PatientModel extends Model
{
    protected $table            = 'patient';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        "user_id",
        "identifiant",
        "id_hopital",
        "nom",
        "prenom",
        "date_de_naissance",
        "sexe",
        "telephone",
        "profession",
        "lieu_habitation",
        'type_piece',
        'fichier',
        'nom_urgence',
        'contact_urgent',
        'parent',
        "groupe_sanguin",
        "maladie_particuliere",
        "taille",
        "poids",
        "allergie",
        "note",
        "photo",
        "lien",
        "status",
        "qr_image"
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';


    public function getPatientInfo($patientId)
    {
        return $this->where('id', $patientId)->first();
    }

}
