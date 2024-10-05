<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
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
    public function getProduits(){
        return $this->produitModel->findAll();
    }

    public function createMouvement()
    {

        $results = $this->mouvementModel->findAll();
        $data = $this->request->getPost();
        $data['date_mouvement'] = date('Y-m-d');
        $data['montant'] = $data['qte_mouvement'] * $data['prix_unitaire'];
        $data['description_produit'] = $data['description_mouvement'];
        $data['date_produit'] = $data['date_mouvement'];
        $data['libelle_produit'] = $data['type_produit'];
        $data['quantite_produit'] = $data['qte_mouvement'];
        // dd($data);
        // dd($data);
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
                    $data['qte_mouvement'] = $ligne['qte_mouvement'] - $data['qte_mouvement'];
                    if(!$this->mouvementModel->update($id, $data)){
                        $data['erreurs'] = $this->mouvementModel->errors();
                        return redirect()->back();
                    };
                    $data['mouvements'] = $this->getMouvements();
                    return view('Mouvements/list_mouvement', $data);
                }
                elseif($data['nom_mouvement'] == "Product"){
                    $qte[1] = $data['qte_mouvement'];
                    if($data['unite_mouvement'] == 'carton'){
                        $data['qte_mouvement'] = $data['qte_mouvement'] * 12;
                    }
                    $data['qte_mouvement'] = $ligne['qte_mouvement'] - $data['qte_mouvement'];
                    // d($ligne);
                    // d($qte);
                    // $data['unite_mouvement'] = $ligne['unite_mouvement'];
                    // dd($data);

                    if(!$this->mouvementModel->update($id, $data)){
                        $data['erreurs'] = $this->mouvementModel->errors();
                        return redirect()->back();
                    };
                    // d($ligne);
                    // d($qte);
                    // dd($data);
                    $data1['elevages'] = $this->getElevages();
                    // dd($data1);
                    if(!$this->produitModel->save($data)){
                        $data['erreurs'] = $this->produitModel->errors();
                    }
                    if ($data['statut_produit'] == "Sale") {
                        $data['produits'] = $this->getProduits();
                        
                        $options = new Options();
                        $options->set('idRemoteEnable', true);
                        
                        $dompdf = new Dompdf($options);
                        
                        // Chargement du HTML
                        $html = view('Produits/facturepdf', $data);
                        $dompdf->loadHtml($html, 'UTF-8');
                        
                        // Configuration du papier
                        $dompdf->setPaper('A4', 'landscape');
                        
                        // Rendu du PDF
                        $dompdf->render();
                        
                        // Préparation du nom de fichier
                        $filename = 'facture_' . date('Y-m-d_H-i-s') . '.pdf';
                        
                        // Streaming du PDF
                        $dompdf->stream($filename, ['Attachment' => true]);
                        
                        // Redirection après le streaming
                        return redirect()->to('list_produit');
                    }
                    // return view('Produits/form_sold',[
                    //     'data' => $data,
                    //     'elevages' => $data1['elevages'],
                    //     'liste' => $ligne,
                    //     'qte'=> $qte
                    // ]);
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
        $data['nbrCli']['nbr'] = $this->produitModel->countClient();
        $data['sumMont'] = $this->produitModel->sumMontant();
        $data['nbrSale'] = $this->produitModel->countSales();
        $data['best'] = $this->produitModel->countBest();
        // $data[''] = $this->produitModel->countBest();
        $data2['qte'] = $this->produitModel->qteP();
        $data2['date'] = $this->produitModel->dateP();
        $data3['label'] = $this->produitModel->pielib();
        $data3['total'] = $this->produitModel->pietot();
        // d($data3['label']);
        // dd($data3['total']);
        $i = 0;
        foreach($data2['qte'] as $key => $value){
            foreach($value as $key => $val0){
                $data0[$i] = $val0;
                $i++;
            }
            $i++;
        }
        $data['qte'] = $data0;
        // dd($data);

        foreach($data2['date'] as $key => $value){
            foreach($value as $key => $val01){
                $data01[$i] = $val01;
                $i++;
            }
            $i++;
        }
        $data['date'] = $data01;
        // dd($data);

        foreach($data3['label'] as $key => $value){
            foreach($value as $key => $val02){
                $data02[$i] = $val02;
                $i++;
            }
            $i++;
        }
        $data['label'] = $data02;

        foreach($data3['total'] as $key => $value){
            foreach($value as $key => $val03){
                $data03[$i] = $val03;
                $i++;
            }
            $i++;
        }
        $data['total'] = $data03;
        // dd($data);


        return view('Mouvements/dashboard', $data);
    }

    public function createReport(){
        $data = $this->request->getPost();
        // dd($data);
        $i=false;
        if(!empty($data)){
            $i=true;
        }
        $data['i'] = $i;
        return view('Mouvements/board_report',$data);
    }

    public function labRec2(){
        $produs = new MouvementModel();

        if (isset($_GET['keyword'])){
            $cle = $_GET['keyword'];
            $result = $produs   ->like('type_produit', $cle) 
                                -> findAll();
            $suggestion = [];


            foreach($result as $key){
                
                $suggestion[] = [
                    'label' => $key['type_produit'],
                    'stk' => $key['nom_mouvement'],
                    'unit' => $key['unite_mouvement'],
                    'value' => intval($key['qte_mouvement']),
                ];
            }
            
            return $this->response->setJSON($suggestion);
        }
    }
}
