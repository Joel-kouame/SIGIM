<?php

namespace App\Models;

use CodeIgniter\Model;

class ProsanteModel extends Model
{
    protected $table            = 'prosantes';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;

    protected $allowedFields    = [
        'user_id',
        'reference',
        'id_hopital',
        'nom',
        'prenom',
        'contact',
        'service',
        'profession',
        'domicile',
        'type_de_piece',
        'photo',
        'status',
        'lien',
        'created_at',
        'updated_at'
    ];



    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
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


    const STATUS_ACTIF = 0;
    const STATUS_SUSPENDU = 1;

    # Fonctions pour suspendre un prosanté ------------------------------------------

    public function suspendreProsante($id)
    {
        // Récupérer le rendez-vous
        $prosantes = $this->find($id);

        if (!$prosantes) {
            // Gérer le cas où le rendez-vous n'est pas trouvé
            return false;
        }

        // Mettre à jour le statut
        $prosantes['status'] = 1;

        // Sauvegarder
        return $this->update([
            ['id' => $prosantes['id']],
            'status' => $prosantes['status'], // Utiliser la clé 'status' du tableau
        ]); // Utiliser la clé 'id' du tableau
    }

    # Fonction pour  rétablir un hôpital après une suspension ------------------------

    public function activerProsante($id)
    {
        // Récupérer le rendez-vous
        $prosantes = $this->find($id);

        if (!$prosantes) {
            // Gérer le cas où le rendez-vous n'est pas trouvé
            return false;
        }

        // Mettre à jour le statut
        $prosantes['status'] = 0;

        // Sauvegarder
        return $this->update([
            ['id' => $prosantes['id']],
            'status' => $prosantes['status'], // Utiliser la clé 'status' du tableau
        ]); // Utiliser la clé 'id' du tableau
    }

}
