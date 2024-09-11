<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\PersonnelModel;

class PersonnelController extends BaseController
{
    protected $personnelModel;
    public function __construct(){
        $this->personnelModel = new PersonnelModel();
    }

    public function index()
    {
        //
    }

    public function getPersonnels(){
        return $this->personnelModel->findAll();

    }

    public function createFormPersonnel()
    {
        return view('Personnels/form_add');
    }

    public function createPersonnel()
    {
        $data = $this->request->getPost();
        $data['mot_de_passe'] = password_hash($data['mot_de_passe'], PASSWORD_DEFAULT);
        if(!$this->personnelModel->save($data)){
            $data['erreurs'] = $this->personnelModel->errors();
        }
        $data['personnels'] = $this->getPersonnels();
        return view('login', $data);
        // return view('Personnels/list_personnel', $data);
    }

    public function personnelList()
    {
        $data['personnels'] = $this->personnelModel->findAll();
        return view('Personnels/list_personnel', $data);
    }

    public function updateFormPersonnel($id_personnel)
    {
        $personnels = $this->personnelModel->find($id_personnel);
        $data['personnels'] = $personnels;
        return view('Personnels/form_update',$data);
    }

    public function updatePersonnel()
    {
        $id_personnel = $this->request->getVar('id_personnel');
        // $data = $this->request->getVar();
        $data = [
            'nom_personnel'=>$this->request->getVar('nom_personnel'),
            'telephone_personnel'=>$this->request->getVar('telephone_personnel'),
            'sexe_personnel'=>$this->request->getVar('sexe_personnel'),
            'cni_personnel'=>$this->request->getVar('cni_personnel'),
            'email_personnel'=>$this->request->getVar('email_personnel'),
            // 'mot_de_passe'=>$this->request->getVar('mot_de_passe'),
            'role_personnel'=>$this->request->getVar('role_personnel')
        ];
        // $data['mot_de_passe'] = password_hash($data['mot_de_passe'], PASSWORD_DEFAULT);
        
        if(!$this->personnelModel->update($id_personnel,$data)){
            $data['erreurs'] = $this->personnelModel->errors();
        }
        $data['personnels'] = $this->personnelModel->findAll();
        return view('Personnels/list_personnel', $data);
    }

    public function deletePersonnel($id_personnel)
    {
        $personnels = $this->personnelModel->delete($id_personnel);
        // return redirect()->to('list_personnel');
        $data['personnels'] = $this->personnelModel->findAll();
        return view('Personnels/list_personnel', $data);
    }

    public function authentification()
    {
        $data = $this->request->getPost();
        
        $verify = $this->personnelModel->getWhere([
            'email_personnel' => $data['email_personnel']
        ])->getRowArray();

        if($verify && password_verify($data['mot_de_passe'], $verify['mot_de_passe'])){
        
            return view('Personnels/dashboard');
        }
        else{
        return redirect()->to('login');
        }
    }

    public function dashboard()
    {
            return view('Personnels/dashboard');
    }
}
