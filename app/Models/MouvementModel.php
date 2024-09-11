<?php

namespace App\Models;

use CodeIgniter\Model;

class MouvementModel extends Model
{
    protected $table            = 'mouvements';
    protected $primaryKey       = 'id_mouvement';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['type_mouvement', 'nom_mouvement', 'type_produit', 'qte_mouvement', 'description_mouvement', 'date_mouvement', 'created_by', 'updated_by', 'deleted_by'];

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

    public function findType($type_mouvement){
        return $this-> select('*')
                    -> from('mouvements')
                    -> where('type_mouvement', $type_mouvement)
                    -> find($type_mouvement);
    }
    
}
