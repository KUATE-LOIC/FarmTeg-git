<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\RessourceModel;
use App\Models\MouvementModel;


class RessourceController extends BaseController
{
    protected $ressourceModel;
    protected $mouvementModel;

    public function __construct(){
        $this->ressourceModel = new RessourceModel();
        $this->mouvementModel = new MouvementModel();
        
    }

    public function index()
    {
        //
    }

    public function showFormRessource()
    {
        return view('Ressources/form_choix');
    }
    public function createFormRessource1()
    {
        return view('Ressources/form_addF');
    }
    public function createFormRessource2()
    {
        return view('Ressources/form_addT');
    }
    public function createFormMove()
    {
        return view('Ressources/form_move');
    }
    public function createFormRemove()
    {
        return view('Ressources/form_remove');
    }

    public function createFormRessource()
    {
        $data = $this->request->getPost();
        // dd($data);
        if($data['type_ressource'] == 'Feeding'){
            return view('Ressources/form_addF');
        }

        if($data['type_ressource'] == 'Treatment'){
            return view('Ressources/form_addT');
        }
    }

    public function getRessources(){
        return $this->ressourceModel->findAll();
    }

    public function createRessource()
    {
        // print_r($_POST);
        $data = $this->request->getPost();
        // dd($data);
        foreach($data['libelle_ressource'] as $key => $value){
            $data_2 = [
                'libelle_ressource'  => $value,  
                'quantite_ressources' => $data['quantite_ressources'][$key],
                'type_ressource' => $data['type_ressource'][$key],
                'unite_ressource' => $data['unite_ressource'][$key],
                'cout_ressource' => $data['cout_ressource'][$key],
                'date_obtention' => $data['date_obtention'][$key],
                'description_ressource' => $data['description_ressource'][$key],
            ];

            if(!$this->ressourceModel->save($data_2)){
                $data['erreurs'] = $this->ressourceModel->errors();
            }
            // dd($data['erreurs']);
        }
        // if(!$this->ressourceModel->save($data)){
        //     $data['erreurs'] = $this->ressourceModel->errors();
        // }
        $data['ressources'] = $this->getRessources();
        // dd($data);
        return view('Ressources/list_ressource', $data);
    }

    public function ressourceList()
    {
        $data['ressources'] = $this->ressourceModel->findAll();
        return view('Ressources/list_ressource', $data);
    }

    public function updateFormRessource($id_ressource)
    {
        $ressources = $this->ressourceModel->find($id_ressource);
        $data['ressources'] = $ressources;
        return view('Ressources/form_update',$data);
    }

    public function updateRessource()
    {
        $id_ressource = $this->request->getVar('id_ressource');
        $data = $this->request->getVar();
        if(!$this->ressourceModel->update($id_ressource,$data)){
            $data['erreurs'] = $this->ressourceModel->errors();
        }
        $data['ressources'] = $this->ressourceModel->findAll();
        return view('Ressources/list_ressource', $data);
    }

    public function deleteRessource($id_ressource)
    {
        $ressources = $this->ressourceModel->delete($id_ressource);
        // return redirect()->to('list_ressource');
        $data['ressources'] = $this->ressourceModel->findAll();
        return view('Ressources/list_ressource', $data);
    }
}
