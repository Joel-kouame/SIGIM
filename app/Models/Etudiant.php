<?php 

namespace App\Models;
use CodeIgniter\Model;
class Etudiant extends Model
{
    protected $table = 'etudiant';
    protected $primaryKey = ['id'];
    protected $allowedFields = ['nom','prenom','date_naissance','sexe','photo'];

}