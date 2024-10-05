<?php

namespace App\Models;

use CodeIgniter\Model;

class ProduitModel extends Model
{
    protected $table            = 'produits';
    protected $primaryKey       = 'id_produit';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['statut_produit', 'animal', 'type_produit', 'date_produit', 'montant', 'libelle_produit', 'description_produit', 'nom_client', 'quantite_produit','unite_mouvement', 'created_by', 'updated_by', 'deleted_by'];
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
    
    public function countClient(){
        return $this->distinct()
                    ->select('nom_client')
                    ->where('statut_produit', 'Sale')
                    ->countAllResults();
        // $dist =$this->distinct()
        //             ->selectCount('nom_client', 'nbr')
        //             ->where('statut_produit', 'Sale')
        //             ->findAll();
        // return count($dist);
    }
    public function sumMontant(){
        return $this->selectSum('montant', 'sum')
                    ->where('statut_produit', 'Sale')
                    ->first();
    }
    public function countSales(){
        return $this->selectCount('id_produit', 'sales')
                    ->where('statut_produit', 'Sale')
                    ->first();
    }
    public function qteP(){
        return $this->select('quantite_produit')
                    ->where('statut_produit', 'Sale')
                    ->findAll();
    }
    public function dateP(){
        return $this->select('date_produit')
                    ->where('statut_produit', 'Sale')
                    ->findAll();
    }

    public function countdeath(){
        return $this->selectCount('id_produit', 'mort')
                    ->where('statut_produit', 'Death')
                    ->first();
    }

    public function countBest(){
        return $this->select('libelle_produit')
                    ->selectCount('libelle_produit',' nbr')
                    ->where('statut_produit', 'Sale')
                    ->groupBy('libelle_produit')
                    ->orderBy('nbr', 'DESC')
                    ->limit(1)
                    ->first();
    }

    public function pielib(){
        return $this->select('libelle_produit')
                    ->where('statut_produit', 'Sale')
                    ->groupBy('libelle_produit')
                    ->findAll();
    }
    public function pietot(){
        return $this->selectSum('quantite_produit',' total')
                    ->where('statut_produit', 'Sale')
                    ->groupBy('libelle_produit')
                    ->findAll();
    }
    
    public function Death($start, $end){
        return $this->select('*')
                    ->where('statut_produit', 'Death')
                    ->where("date_produit BETWEEN '$start' AND '$end'")
                    ->orderBy('date_produit', 'ASC')
                    ->findAll();
    }
    public function Sale($start, $end){
        return $this->select('*')
                    ->where('statut_produit', 'Sale')
                    ->where("date_produit BETWEEN '$start' AND '$end'")
                    ->orderBy('date_produit', 'ASC')
                    ->findAll();
    }
    public function Yeild($start, $end){
        return $this->select('*')
                    ->where('statut_produit', 'Harvest')
                    ->where("date_produit BETWEEN '$start' AND '$end'")
                    ->orderBy('date_produit', 'ASC')
                    ->findAll();
    }
    public function prod(){
        return $this->distinct()
                    ->select('id_produit, libelle_produit')
                    ->where('statut_produit', 'Harvest')
                    ->findAll();
    }
    
}
