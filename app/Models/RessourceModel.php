<?php

namespace App\Models;

use CodeIgniter\Model;

class RessourceModel extends Model
{
    protected $table            = 'ressources';
    protected $primaryKey       = 'id_ressource';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['libelle_ressource', 'type_ressource', 'cout_ressource', 'description_ressource', 'quantite_ressources', 'unite_ressource', 'date_obtention', 'created_by', 'updated_by', 'deleted_by'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

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

    public function Food($start, $end){
        return $this->select('*')
                    ->where('type_ressource', 'Feeding')
                    ->where("date_obtention BETWEEN '$start' AND '$end'")
                    ->orderBy('date_obtention', 'ASC')
                    ->findAll();
    }

    public function Treat($start, $end){
        return $this->select('*')
                    ->where('type_ressource', 'Treatment')
                    ->where("date_obtention BETWEEN '$start' AND '$end'")
                    ->orderBy('date_obtention', 'ASC')
                    ->findAll();
    }
}
