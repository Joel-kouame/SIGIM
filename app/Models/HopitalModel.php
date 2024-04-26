<?php

namespace App\Models;

use CodeIgniter\Model;

class HopitalModel extends Model
{

    protected $table            = 'hopital';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;

    protected $allowedFields    = [
        'num_ident_hopt',
        'contact_hopt',
        'code_postal',
        'local_hopt',
        'nom_hopt',
        'photo_hopt',
        'email_hopt',
        'type_etablissement_hopt',
        'nom_dr',
        'contact_dr',
        'type_de_piece_dr',
        'prenom_dr',
        'email_dr',
        'fichier_piece_dr',
        'password_hopt',
        'lien',
        'status',
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

    // const STATUS_NON_ACTIF = 0;
    const STATUS_ACTIF = 1;
    const STATUS_SUSPENDU = 0;

    public function suspendreHopital($id)
    {
        // Récupérer le rendez-vous
        $hopitaux = $this->find($id);

        if (!$hopitaux) {
            // Gérer le cas où le rendez-vous n'est pas trouvé
            return false;
        }

        // Mettre à jour le statut
        $hopitaux['status'] = 0;

        // Sauvegarder
        return $this->update([
            ['id' => $hopitaux['id']],
            'status' => $hopitaux['status'], // Utiliser la clé 'status' du tableau
        ]); // Utiliser la clé 'id' du tableau
    }


    public function activerHopital($id)
    {
        // Récupérer le rendez-vous
        $hopitaux = $this->find($id);

        if (!$hopitaux) {
            // Gérer le cas où le rendez-vous n'est pas trouvé
            return false;
        }

        // Mettre à jour le statut
        $hopitaux['status'] = 1;

        // Sauvegarder
        return $this->update([
            ['id' => $hopitaux['id']],
            'status' => $hopitaux['status'], // Utiliser la clé 'status' du tableau
        ]); // Utiliser la clé 'id' du tableau
    }

    # Fonction pour compter le nombre d'hôpital enregistré---------------
    public function getNbHopital()
    {
        // Compter le nombre d'enregistrements dans la table "hopital"
        return $this->countAll();
    }

}
