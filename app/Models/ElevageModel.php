<?php

namespace App\Models;

use CodeIgniter\Model;

class ElevageModel extends Model
{
    protected $table            = 'elevages';
    protected $primaryKey       = 'id_elevage';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['nom_elevage', 'date_obtention', 'quantite', 'description_elevage', 'type', 'created_by', 'updated_by', 'deleted_by'];

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
    protected $validationRules      = [
        'nom_elevage'      => 'required|string|max_length[100]',
        'description_elevage'      => 'required|string|max_length[255]',
    ];
    protected $validationMessages   = [
        'nom_elevage' => [
            'required' => 'Le nom est obligatoire.',
        ],
        'description_elevage' => [
            'required' => 'La description est obligatoire.',
        ],
    ];
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

    public function Band($start, $end){
        return $this->select('*')
                    ->where("date_obtention BETWEEN '$start' AND '$end'")
                    ->orderBy('date_obtention', 'ASC')
                    ->findAll();
    }
}
