<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProduitModel;
use App\Models\ElevageModel;

class AutocompleteController extends BaseController
{
    public function index()
    {
        //
    }
    public function autocomplete(){
        $prod = new ElevageModel();

        if (isset($_GET['keyword'])){
            $cle = $_GET['keyword'];
            $result = $prod->like('nom_elevage', $cle) -> findAll();
            $suggestion = [];

            foreach($result as $key){
                
                $suggestion[] = [
                    'label' => $key['nom_elevage'],
                    'id' => $key['id_elevage']
                ];
            }
            
            return $this->response->setJSON($suggestion);
        }
    }

    public function setName(){
        $prod = new ElevageModel();

        $data = $this->request->getPost();
        
        // dd($data);
        
        $prod -> save($data);
        return redirect()->back();
    }
}
