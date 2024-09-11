<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ElevageModel;
use App\Models\TypeModel;

class ElevageController extends BaseController
{
    protected $elevageModel;
    protected $typeModel;
    public function __construct(){
        $this->elevageModel = new ElevageModel();
        $this->typeModel = new TypeModel();
    }

    
    public function index()
    {
        //
    }

    public function getElevages(){
        return $this->elevageModel->findAll();
    }
    // public function gettype($id_type){
    //     $data['types'] = $this->typeModel->find($id_type);
    // }

    public function createFormElevage()
    {
        $data['types'] = $this->typeModel->findAll();
        return view('Elevages/form_add', $data);
    }

    public function createElevage()
    {
        $data = $this->request->getPost();
        $data['quantite'] = $data['qte_initial'];
        if(!$this->elevageModel->save($data)){
            $data['erreurs'] = $this->elevageModel->errors();
        }
        $elevages = $this->getElevages();

        $i=0;
        foreach($elevages as $keys => $elevage){
            $type = $this->typeModel->find($elevage['type']);
            $elevage['type'] = $type['nom_type'];

            $data1[$i] = $elevage;
            $i++;
        }
        $data2['elevages'] = $data1;  
        // dd($data2);     
        return view('Elevages/list_elevage', $data2);
    }

    public function elevageList()
    {
        $elevages = $this->getElevages();
        $i=0;
        foreach($elevages as $keys => $elevage){
            $type = $this->typeModel->find($elevage['type']);
            $elevage['type'] = $type['nom_type'];

            $data1[$i] = $elevage;
            $i++;
        }
        $data2['elevages'] = $data1;  
        // dd($data2);
        return view('Elevages/list_elevage', $data2);
    }

    public function updateFormElevage($id_elevage)
    {
        $elevages = $this->elevageModel->find($id_elevage);
        $data3 = $this->typeModel->find($elevages['type']);
        $data1 = $elevages;
        $data2 = $this->typeModel->findAll();
        // d($data1);
        // d($data3);
        // dd($data2);
        return view('Elevages/form_update',[
            'data1' => $data1,
            'data3' => $data3,
            'data2' => $data2
        ]);
    }

    public function updateElevage()
    {
        $id_elevage = $this->request->getVar('id_elevage');
        $data = $this->request->getVar();
        $data['quantite'] = $data['qte_initial'];
        dd($data);
        if(!$this->elevageModel->update($id_elevage,$data)){
            $data['erreurs'] = $this->elevageModel->errors();
        }
        $data['elevages'] = $this->elevageModel->findAll();
        return view('Elevages/list_elevage', $data);
    }

    public function deleteElevage($id_elevage)
    {
        $elevages = $this->elevageModel->delete($id_elevage);
        // return redirect()->to('list_elevage');
        $data['elevages'] = $this->elevageModel->findAll();
        return view('Elevages/list_elevage', $data);
    }
}