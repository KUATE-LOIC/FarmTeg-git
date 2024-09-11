<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TypeModel;

class TypeController extends BaseController
{
    protected $typeModel;
    public function __construct(){
        $this->typeModel = new TypeModel();
    }

    public function index()
    {
        //
    }

    public function getTypes(){
        return $this->typeModel->findAll();
    }

    public function createFormType()
    {
        return view('Types/form_add');
    }

    public function createType()
    {
        $data = $this->request->getPost();
        if(!$this->typeModel->save($data)){
            $data['erreurs'] = $this->typeModel->errors();
        }
        $data['types'] = $this->getTypes();
        return view('Types/list_type', $data);
    }

    public function typeList()
    {
        $data['types'] = $this->typeModel->findAll();
        return view('Types/list_type', $data);
    }

    public function updateFormType($id_type)
    {
        $types = $this->typeModel->find($id_type);
        $data['types'] = $types;
        return view('Types/form_update',$data);
    }

    public function updateType()
    {
        $id_type = $this->request->getVar('id_type');
        $data = $this->request->getVar();
        
        if(!$this->typeModel->update($id_type,$data)){
            $data['erreurs'] = $this->typeModel->errors();
        }
        $data['types'] = $this->typeModel->findAll();
        return view('Types/list_type', $data);
    }

    public function deleteType($id_type)
    {
        $types = $this->typeModel->delete($id_type);
        // return redirect()->to('list_type');
        $data['types'] = $this->typeModel->findAll();
        return view('Types/list_type', $data);
    }
}
