<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\PersonnelModel;
use App\Models\ElevageModel;
use App\Models\ProduitModel;

class PersonnelController extends BaseController
{
    protected $personnelModel;
    protected $elevageModel;
    protected $produitModel;
    public function __construct(){
        $this->personnelModel = new PersonnelModel();
        $this->elevageModel = new ElevageModel();
        $this->produitModel = new ProduitModel();
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
        return view('Personnels/list_personnel', $data);
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
            $session = session();
            $session -> set([
                'id_personnel' => $verify['id_personnel'],
                'email_personnel' => $verify['email_personnel'],
                'nom_personnel' => $verify['nom_personnel'],
                'logged_in' => true
            ]);

            return redirect()->to('dashboard');
        }
        else{
            $data1['error'] = "Identifiants incorrects";
            return view('login',$data1);        }
    }

    public function logout()
    {
        $session = session();
        // dd($session);
        $session->destroy();
        return redirect()->to('/');
    }

    public function dashboard()
    {
            // $data['nbrCli']['nbr'] = $this->produitModel->countClient();

            $data['nbrSale'] = $this->produitModel->countSales();
            $data['morts'] = $this->produitModel->countdeath();
            
            $numBan = $this->elevageModel->BandNum();
            foreach($numBan as $key => $val0){
                $data['numBan'] = $val0;
            }
            $pers = $this->personnelModel->PersNum();
            foreach($pers as $key => $val0){
                $data['pers'] = $val0;
            }
            // dd($data);
            
            // $data2['qte'] = $this->produitModel->qteP();
            // $data2['date'] = $this->produitModel->dateP();
            // $data3['label'] = $this->produitModel->pielib();
            // $data3['total'] = $this->produitModel->pietot();
            // // d($data3['label']);
            // $i = 0;
            // foreach($data2['qte'] as $key => $value){
            //     foreach($value as $key => $val0){
            //         $data0[$i] = $val0;
            //         $i++;
            //     }
            //     $i++;
            // }
            // $data['qte'] = $data0;
            // // dd($data);
    
            // foreach($data2['date'] as $key => $value){
            //     foreach($value as $key => $val01){
            //         $data01[$i] = $val01;
            //         $i++;
            //     }
            //     $i++;
            // }
            // $data['date'] = $data01;
            // // dd($data);
    
            // foreach($data3['label'] as $key => $value){
            //     foreach($value as $key => $val02){
            //         $data02[$i] = $val02;
            //         $i++;
            //     }
            //     $i++;
            // }
            // $data['label'] = $data02;
    
            // foreach($data3['total'] as $key => $value){
            //     foreach($value as $key => $val03){
            //         $data03[$i] = $val03;
            //         $i++;
            //     }
            //     $i++;
            // }
            // $data['total'] = $data03;

            return view('Personnels/dashboard', $data);
    }
}
