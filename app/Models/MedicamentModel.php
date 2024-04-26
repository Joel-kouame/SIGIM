<?php

namespace App\Models;

use CodeIgniter\Model;

class MedicamentModel extends Model
{
    protected $table            = 'medicament';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nom_medicament',
        'posologie',
        'id_patient',
        'id_prosante',
        'date'
    ];

    public function getMedicament()
    {
        return $this->findAll(); // Récupère toutes les lignes de la table
    }

    protected bool $allowEmptyInserts = false;

    // Validation
    protected $validationRules      = [
        'nom_medicament' => 'required',
        'posologie'      => 'required'
    ];
     // Dates
     protected $useTimestamps = false;
     protected $dateFormat    = 'datetime';
     protected $createdField  = 'created_at';
     protected $updatedField  = 'updated_at';
     protected $deletedField  = 'deleted_at';
 
     // Validation
     protected $validationMessages   = [];
     protected $skipValidation       = false;
     protected $cleanValidationRules = true;
 
     // Callbacks
     protected $allowCallbacks = true;
     protected $beforeInsert   = [];
     protected $afterInsert    = [];
     protected $beforeUpdate   = [];
     protected $afterUpdate    = [];
     protected $beforeFind     = [];
     protected $afterFind      = [];
     protected $beforeDelete   = [];
     protected $afterDelete    = [];
}