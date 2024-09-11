<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonnelModel extends Model
{
    protected $table            = 'personnels';
    protected $primaryKey       = 'id_personnel';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['nom_personnel', 'telephone_personnel', 'sexe_personnel', 'cni_personnel', 'email_personnel', 'mot_de_passe', 'role_personnel', 'created_by', 'updated_by', 'deleted_by'];

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
        'nom_personnel'      => 'required|string|max_length[100]',
        'email_personnel'      => 'required|string|max_length[100]'
    ];
    protected $validationMessages   = [
        'nom_personnel' => [
            'required' => 'Le nom est obligatoire.',
        ]
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

    public function findByAdmin(){
        
    }
}
