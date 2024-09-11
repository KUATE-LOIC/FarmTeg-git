<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\MouvementModel;
use App\Models\ElevageModel;
use App\Models\ProduitModel;


class MouvementController extends BaseController
{
    protected $mouvementModel;
    protected $elevageModel;
    protected $produitModel;
    public function __construct(){
        $this->mouvementModel = new MouvementModel();
        $this->elevageModel = new ElevageModel();
        $this->produitModel = new ProduitModel();
    }

    public function index()
    {
        //
    }

    public function createFormMouvement()
    {
        return view('Mouvements/form_add');
    }

    public function reportBoard()
    {
        return view('Mouvements/board_report');
    }

    public function getElevages(){
        return $this->elevageModel->findAll();
    }
    public function getMouvements(){
        return $this->mouvementModel->findAll();
    }

    public function createMouvement()
    {
        $results = $this->mouvementModel->findAll();
        $data = $this->request->getPost();
        // d($data);
        // d($results);
        $verif=false;
        $id;
        foreach($results as $result){
            
            if($data['nom_mouvement'] == $result['nom_mouvement'] && $data['type_produit'] == $result['type_produit']){
                $verif=true;
                $id = $result['id_mouvement'];
                $ligne =$result;
                break;
            }
        }
        // d($ligne);
        if($data['type_mouvement'] == "add"){
            if($verif==true){
                $data['qte_mouvement'] = $data['qte_mouvement'] + $ligne['qte_mouvement'];
                $this->mouvementModel->update($id, $data);
                $data['mouvements'] = $this->getMouvements();
                return view('Mouvements/list_mouvement', $data);
            }
            else{
                $this->mouvementModel->save($data);
                $data['mouvements'] = $this->getMouvements();
                return view('Mouvements/list_mouvement', $data);
            }
        }

        elseif($data['type_mouvement'] == "use"){
            // d('bonjour');
            if($verif==true){
                if($data['nom_mouvement'] == "Food" || $data['nom_mouvement'] == "Treatment"){
                    $data['qte_mouvement'] =$ligne['qte_mouvement'] - $data['qte_mouvement'];
                    $this->mouvementModel->update($id, $data);
                    $data['mouvements'] = $this->getMouvements();
                    return view('Mouvements/list_mouvement', $data);
                }
                elseif($data['nom_mouvement'] == "Product"){
                    $qte[1] = $data['qte_mouvement'];
                    $data['qte_mouvement'] =$ligne['qte_mouvement'] - $data['qte_mouvement'];
                    $this->mouvementModel->update($id, $data);
                    // d($ligne);
                    // d($qte);
                    // dd($data);
                    $data1['elevages'] = $this->getElevages();
                    // dd($data1);
                    return view('Produits/form_sold',[
                        'data' => $data,
                        'elevages' => $data1['elevages'],
                        'liste' => $ligne,
                        'qte'=> $qte
                    ]);
                }
            }
            
        }
        // elseif($data['type_mouvement'] == "use" && $data['nom_mouvement'] == "Product"){
        //     if($verif==true){
        //         $qte[1] = $data['qte_mouvement'];
        //         $data['qte_mouvement'] =$ligne['qte_mouvement'] - $data['qte_mouvement'];
        //         $this->mouvementModel->update($id, $data);
        //         d($ligne);
        //         d($qte);
        //         dd($data);
        //         $data1['elevages'] = $this->getElevages();
        //         // dd($data1);
        //         return view('Produits/form_sold',[
        //             'data' => $data,
        //             'elevages' => $data1['elevages'],
        //             'liste' => $ligne,
        //             'qte'=> $qte
        //         ]);
        //     }
        // }
    }

    public function mouvementList()
    {
        $data['mouvements'] = $this->mouvementModel->findAll();
        return view('Mouvements/list_mouvement', $data);
    }

    public function updateFormMouvement($id_mouvement)
    {
        $mouvements = $this->mouvementModel->find($id_mouvement);
        $data['mouvements'] = $mouvements;
        return view('Mouvements/form_update',$data);
    }

    public function updateMouvement()
    {
        $id_mouvement = $this->request->getVar('id_mouvement');
        $data = $this->request->getPost();
        if(!$this->mouvementModel->update($id_mouvement,$data)){
            $data['erreurs'] = $this->mouvementModel->errors();
        }
        $data['mouvements'] = $this->mouvementModel->findAll();
        return view('Mouvements/list_mouvement', $data);
    }

    public function deleteMouvement($id_mouvement)
    {
        $data['mouvements'] = $this->mouvementModel->findAll();
        $mouvements = $this->mouvementModel->delete($id_mouvement);
        // return redirect()->to('list_mouvement');
        return view('Mouvements/list_mouvement', $data);
    }
    public function dashboardMarket()
    {
        $data['nbrCli'] = $this->produitModel->countClient();
        $data['sumMont'] = $this->produitModel->sumMontant();
        $data['nbrSale'] = $this->produitModel->countSales();
        $data['best'] = $this->produitModel->countBest();
        $data2 = $this->produitModel->chart();
        
        for($i=0; $i<count($data2); $i++){
            $date['date'][$i] = $data2[$i]['date_produit'];
            $qte['qte'][$i] = $data2[$i]['quantite_produit'];
        }
        $data['qte'] = $qte;
        $data['date'] = $date;
        // $data['bar']=array_merge($qte,$date);
        // $data3['date'] = $this->produitModel->chart2();
        // dd($data);
        // d($data3);
        // d($date);
        // d($qte);
        // d($data3);
        // dd([1,2,3,4,5,6]);
        return view('Mouvements/dashboard', $data);
    }

    public function createReport(){
        $data = $this->request->getPost();
        $i=false;
        if(!empty($data)){
            $i=true;
        }
        $data['i'] = $i;
        return view('Mouvements/board_report',$data);
    }

    
}
