<?php

namespace App\Models;

use CodeIgniter\Model;

class RendezvousModel extends Model
{

    protected $table            = 'rendez_vous';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'patient_id',
        'id_hopital',
        'nom',
        'prenom',
        'reference',
        'contact',
        'service',
        'hopital',
        'date',
        'motif',
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


    const STATUS_EN_ATTENTE = 0;
    const STATUS_VALIDE = 1;
    const STATUS_ANNULE = 2;

    public function annulerRendezVous($id)
    {
        // Récupérer le rendez-vous
        $rendezVous = $this->find($id);

        if (!$rendezVous) {
            // Gérer le cas où le rendez-vous n'est pas trouvé
            return false;
        }

        // Mettre à jour le statut
        $rendezVous['status'] = 2;

        // Sauvegarder
        return $this->update([
            ['id' => $rendezVous['id']],
            'status' => $rendezVous['status'], // Utiliser la clé 'status' du tableau
        ]); // Utiliser la clé 'id' du tableau
    }


    public function validerRendezVous($id)
    {
        // Récupérer le rendez-vous
        $rendezVous = $this->find($id);

        if (!$rendezVous) {
            // Gérer le cas où le rendez-vous n'est pas trouvé
            return false;
        }

        // Mettre à jour le statut
        $rendezVous['status'] = 1;

        // Sauvegarder
        return $this->update([
            ['id' => $rendezVous['id']],
            'status' => $rendezVous['status'], // Utiliser la clé 'status' du tableau
        ]); // Utiliser la clé 'id' du tableau
    }

    // Fonction pour compter le nombre de rendez-vous validés----------------------------

    public function getNbRdvValides() {

        $builder = $this->db->table('rendez_vous');
        $result = $builder->where('status', 1)->countAllResults();
      
        return $result;
      
      }

      // Fonction pour compter le nombre de rendez-vous annulés----------------------------
    
    public function getNbRdvAnnuler() {

        $builder = $this->db->table('rendez_vous');
        $result = $builder->where('status', 2)->countAllResults();
      
        return $result;
      
      }

      // Fonction pour compter le nombre de rendez-vous en attente----------------------------
    
    public function getNbRdvAttente() {

        $builder = $this->db->table('rendez_vous');
        $result = $builder->where('status', 0)->countAllResults();
      
        return $result;
      
      }
}
