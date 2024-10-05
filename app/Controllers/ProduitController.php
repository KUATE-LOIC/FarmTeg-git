<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\ElevageModel;
use App\Models\ProduitModel;
use App\Models\MouvementModel;
use App\Models\UniteModel;


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
    $results = $this->mouvementModel->findAll();
    $data = $this->request->getPost();
    $data2 = $this->request->getPost();

    // Validation des données
    if (empty($data['quantite_produit']) || empty($data['type_produit'])) {
        $data['erreurs'] = 'Quantité et type de produit sont requis.';
        return redirect()->back()->withInput()->with('erreurs', $data['erreurs']);
    }

    // Assignation du libellé produit
    if (isset($data['type_produit']) && $data['type_produit'] == 'Self') {
        $data['libelle_produit'] = $data['animal'];
    }

    // Recherche de mouvement existant
    $verif = false; // Initialisation
    $ligne = null;
    foreach ($results as $result) {
        if ($data['nom_mouvement'] == $result['nom_mouvement'] && $data['libelle_produit'] == $result['type_produit']) {
            $verif = true;
            $id = $result['id_mouvement'];
            $ligne = $result;
            break;
        }
    }

    $data2['date_mouvement'] = date('Y-m-d');
    $data2['qte_mouvement'] = $data['quantite_produit']; // Conversion en entier
    $data2['type_produit'] = $data['libelle_produit'];
    $data2['type_mouvement'] = 'add';

    // Traitement selon la présence de ligne
    if (isset($ligne)) {
        if ($data['libelle_produit'] == $ligne['type_produit']) {
            if ($data['libelle_produit'] == 'eggs' || $data['libelle_produit'] == 'oeufs') {
                $data['qte_mouvement'] = $data['quantite_produit'] / 30; // Conversion en entier
                $data['qte_mouvement'] = $data['qte_mouvement'] + $ligne['qte_mouvement'];
            } else {
                $data['qte_mouvement'] = $data['quantite_produit'] + $ligne['qte_mouvement'];
            }

            if (!$this->mouvementModel->update($id, ['qte_mouvement' => $data['qte_mouvement']])) {
                $data['erreurs'] = $this->mouvementModel->errors();
            }
        }
    } else {
        if (!$this->mouvementModel->save($data2)) {
            $data['erreurs'] = $this->mouvementModel->errors();
        }
    }

    // Enregistrement du produit
    if (!$this->produitModel->save($data)) {
        $data['erreurs'] = $this->produitModel->errors();
    }

    // Vérification du statut du produit
    if ($data['statut_produit'] == "Sale") {
        $data['produits'] = $this->getProduits();

        // Générer le PDF avant la redirection
        $options = new Options();
        $options->set('idRemoteEnable', true);
        $dompdf = new Dompdf($options);
        $data['logo'] = base_url('assets/vendors/images/12.png');

        $html = view('Produits/facturepdf', $data);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        $filename = 'facture_' . date('Y-m-d_H-i-s') . '.pdf';
        $dompdf->stream($filename, ['Attachment' => true]);

        return redirect()->to('list_produit');
    } else {
        $data['produits'] = $this->getProduits();
        return redirect()->to('list_produit2');
    }
}
    
    public function createDead()
    {
        $data = $this->request->getPost();
        $mort = $data['quantite_produit'];
        $animal = $data['animal'];
        $ids = $data['id'];
            // dd($data);


        $data10['elevages'] = $this->elevageModel->findAll();
        $id;
        foreach( $data10['elevages'] as $elevages){
            // dd($elevages);
            if($elevages['nom_elevage'] == $animal && $elevages['id_elevage'] == $ids){
                $id = $elevages['id_elevage'];
            }
        }
        $eleve = $this->elevageModel->find($id);
        $eleve['quantite'] = $eleve['quantite'] - $mort;

        // d($eleve);
        // dd($eleve['quantite']);

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

    public function autocomplete(){
        $prod = new MouvementModel();

        if (isset($_GET['keyword'])){
            $cle = $_GET['keyword'];
            $result = $prod ->like('type_produit', $cle) 
                            ->where('nom_mouvement','Product')
                            -> findAll();
            $suggestion = [];


            foreach($result as $key){
                
                $suggestion[] = [
                    'label' => $key['type_produit'],
                    'unit2' => $key['unite_mouvement'],
                    'value' => intval($key['qte_mouvement'])
                ];
            }
            
            return $this->response->setJSON($suggestion);
        }
    }

    public function uniteComplete(){
        $produ = new UniteModel();

        if (isset($_GET['keyword'])){
            $cle = $_GET['keyword'];
            $result = $produ ->like('libelle_unite', $cle) 
                            -> findAll();
            $suggestion = [];


            foreach($result as $key){
                
                $suggestion[] = [
                    'label' => $key['libelle_unite'],
                    'value' => $key['prix_unitaire']
                ];
            }
            
            return $this->response->setJSON($suggestion);
        }
    }

    public function CliName(){
        $produs = new ProduitModel();

        if (isset($_GET['keyword'])){
            $cle = $_GET['keyword'];
            $result = $produs   ->like('nom_client', $cle) 
                                ->where('statut_produit','Sale')

                            -> findAll();
            $suggestion = [];


            foreach($result as $key){
                
                $suggestion[] = [
                    'label' => $key['nom_client'],
                    // 'value' => $key['prix_unitaire']
                ];
            }
            
            return $this->response->setJSON($suggestion);
        }
    }

    public function labRec(){
        $produs = new ProduitModel();

        if (isset($_GET['keyword'])){
            $cle = $_GET['keyword'];
            $result = $produs   ->like('libelle_produit', $cle) 
                                ->where('statut_produit','Harvest')
                                -> findAll();
            $suggestion = [];


            foreach($result as $key){
                
                $suggestion[] = [
                    'label' => $key['libelle_produit'],
                    // 'value' => $key['prix_unitaire']
                ];
            }
            
            return $this->response->setJSON($suggestion);
        }
    }
}