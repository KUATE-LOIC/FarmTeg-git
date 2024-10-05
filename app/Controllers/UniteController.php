<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UniteModel;
use App\Models\ProduitModel;

class UniteController extends BaseController
{
    protected $uniteModel;
    protected $produitModel;
    public function __construct(){
        $this->uniteModel = new UniteModel();
        $this->produitModel = new ProduitModel();
    }

    public function index()
    {
        //
    }

    public function getUnite(){
        return $this->uniteModel->findAll();
    }

    public function createFormUnite()
    {
        return view('Unite/form_add');
    }

    public function createUnite()
    {
        $data = $this->request->getPost();
        // dd($data);
        if(!$this->uniteModel->save($data)){
            $data['erreurs'] = $this->uniteModel->errors();
        }
        $data['unites'] = $this->getUnite();
        // dd($data);
        // return view('Unite/list_unite', $data);
        return redirect()->to('list_unite');
    }

    public function uniteList()
    {
        $unites = $this->getUnite();
        if(!empty($unites)){
            // d($unites);
            $i=0;
            $data1;

            foreach($unites as $keys => $unite){
            // dd($unite);

                $produit = $this->produitModel->find($unite['produit']);
                $unite['produit'] = $produit['libelle_produit'];

                $data1[$i] = $unite;
                $i++;
            }
            $produit = $this->produitModel->prod();
            $data2['produit'] = $produit;
            $data2['unites'] = $data1;  
            return view('Unite/list_unite', $data2);
        }
        else{
            $unites['unites'] = $unites;
            $produit = $this->produitModel->prod();
            // dd($produit);
            $unites['produit'] = $produit;
            return view('Unite/list_unite', $unites);
        }
    }

    public function updateFormUnite($id_unite)
    {
        $unites = $this->uniteModel->find($id_unite);
        $data['unites'] = $unites;
        return view('Unite/form_update',$data);
    }

    public function updateUnite()
    {
        $id_unite = $this->request->getVar('id_unite');
        $data = $this->request->getVar();
        
        if(!$this->uniteModel->update($id_unite,$data)){
            $data['erreurs'] = $this->uniteModel->errors();
        }
        $data['unites'] = $this->uniteModel->findAll();
        return view('Unite/list_unite', $data);
    }

    public function deleteUnite($id_unite)
    {
        $unites = $this->uniteModel->delete($id_unite);
        // return redirect()->to('list_unites');
        $data['unites'] = $this->uniteModel->findAll();
        return view('Unite/list_unite', $data);
    }
}
