<?php

namespace App\Models;

use CodeIgniter\Model;

class TypeMOdel extends Model
{
    protected $table            = 'types';
    protected $primaryKey       = 'id_type';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['nom_type', 'description_type', 'created_by', 'updated_by', 'deleted_by'];

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
        'nom_type'      => 'required|string|max_length[100]',
        'description_type'      => 'required|string|max_length[255]'
    ];
    protected $validationMessages   = [
        'nom_type' => [
            'required' => 'Le libelle est obligatoire.',
        ],
        'description_type' => [
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
}
