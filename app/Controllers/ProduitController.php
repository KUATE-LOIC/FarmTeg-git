<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ElevageModel;
use App\Models\ProduitModel;
use App\Models\MouvementModel;


class ProduitController extends BaseController
{
    protected $elevageModel;
    protected $produitModel;
    protected $mouvementModel;

    public function __construct(){
        $this->elevageModel = new ElevageModel();
        $this->produitModel = new ProduitModel();
        $this->mouvementModel = new MouvementModel();

    }

    public function index()
    {
        //
    }

    public function getProduits(){
        return $this->produitModel->findAll();
    }

    public function createFormProduit()
    {
        $data['elevages'] = $this->elevageModel->findAll();
        
        return view('Produits/form_add', $data);
    }
    public function createFormSell()
    {
        return view('Produits/form_sell');
    }
    
    public function showFormsale()
    
    {
        $data['elevages'] = $this->elevageModel->findAll();
        return view('Produits/form_sold', $data);
    }

    public function createProduit()
    {
        $data = $this->request->getPost();

        if(!$this->produitModel->save($data)){
            $data['erreurs'] = $this->produitModel->errors();
        }
        // dd($data);
        if($data['statut_produit']  == "Sale"){
            $data['produits'] = $this->getProduits();
            return redirect()->to('list_produit');
            // return view('Produits/list_produit', $data);
        }
        else{
            $data['produits'] = $this->getProduits();
            return redirect()->to('list_produit2');
            // return view('Produits/list_produit2', $data);

        }
    }

    public function createDead()
    {
        $data = $this->request->getPost();
        $mort = $data['quantite_produit'];
        $animal = $data['animal'];

        $data10['elevages'] = $this->elevageModel->findAll();
        $id;
        foreach( $data10['elevages'] as $elevages){
            // dd($elevages);
            if($elevages['nom_elevage'] == $animal){
                $id = $elevages['id_elevage'];
            }
        }
        $eleve = $this->elevageModel->find($id);
        $eleve['quantite'] = $eleve['quantite'] - $mort;
        if(!$this->elevageModel->update($id,$eleve)){
            $eleve['erreurs'] = $this->produitModel->errors();
        }
        if(!$this->produitModel->save($data)){
            $data['erreurs'] = $this->produitModel->errors();
        }
        return redirect()->to('list_dead');
        
    }

    public function produitList()
    {
        $data['produits'] = $this->produitModel->findAll();
        $i=0;
        $data1;
        foreach($data['produits'] as $result){
            if($result['statut_produit']  == "Harvest"){
                $data1[$i] = $result;
                $i++;                
            }
        }
        $data2['produits'] = $data1;
        return view('Produits/list_produit2', $data2);
    }

    public function DeadList()
    {
        $data['produits'] = $this->produitModel->findAll();
        $i=0;
        $data1;
        foreach($data['produits'] as $result){
            if($result['statut_produit']  == "Death"){
                $data1[$i] = $result;
                $i++;                
            }
        }
        $data2['produits'] = $data1;
        $data12['elevages'] = $this->elevageModel->findAll();
        // d($data2['produits']);
        // dd([
        //     'produits'=> $data2['produits'],
        //     'elevages'=>$data12['elevages']
        // ]);
        return view('Elevages/dead_list', [
            'produits'=> $data2['produits'],
            'elevages'=>$data12['elevages']
        ]);

    }

    public function DeadList2()
    {
        $data['produits'] = $this->produitModel->findAll();
        $i=0;
        $data1;
        $verif=false;
        foreach($data['produits'] as $result){
            if($result['statut_produit'] == "Death"){
                $verif=true;
                // $id = $result;
                // $ligne =$result;
                $data1 = $result;
                $i++;  
                
            }
        }
        $data11['produits'] = $data1;
        // dd($data11);
        
        // dd($data11);

            if($verif==true && $data11['produits']['statut_produit']=="Death"){
                $data['elevages'] = $this->elevageModel->findAll();
                // dd($data11['produits']);
                return view('Elevages/dead_list',$data);
            }
        // }
        // $data2['produits'] = $data1;
        // return view('Elevages/dead_list', $data2);
    }

    public function SaleList()
    {
        $data['produits'] = $this->produitModel->findAll();
        $i=0;
        $data1;
        foreach($data['produits'] as $result){
            if($result['statut_produit']  == "Sale"){
                $data1[$i] = $result;
                $i++;                
            }
        }
        $data2['produits'] = $data1;
        return view('Produits/list_produit', $data2);
    }

    public function updateFormProduit($id_produit)
    {
        $produits = $this->produitModel->find($id_produit);
        $data['produits'] = $produits;
        return view('Produits/form_update',$data);
    }

    public function updateProduit()
    {
        $id_produit = $this->request->getVar('id_produit');
        $data = $this->request->getPost();
        if(!$this->produitModel->update($id_produit,$data)){
            $data['erreurs'] = $this->produitModel->errors();
        }
        $data['produits'] = $this->produitModel->findAll();
        return view('Produits/list_produit', $data);
    }

    public function deleteProduit($id_produit)
    {
        $produits = $this->produitModel->delete($id_produit);
        // return redirect()->to('list_produit');
        $data['produits'] = $this->produitModel->findAll();
        return view('Produits/list_produit', $data);
    }
}