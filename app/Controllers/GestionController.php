<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\ElevageModel;
use App\Models\TypeModel;
use App\Models\GestionModel;
use App\Models\ProduitModel;
use App\Models\MouvementModel;
use App\Models\PersonnelModel;
use App\Models\RessourceModel;


class GestionController extends BaseController
{

    protected $typeModel;
    protected $gestionModel;
    protected $mouvementModel;
    protected $elevageModel;
    protected $produitModel;    
    protected $personnelModel;    
    protected $ressourceModel;


    public function __construct(){
        $this->elevageModel = new ElevageModel();
        $this->typeModel = new TypeModel();
        $this->gestionModel = new GestionModel();
        $this->mouvementModel = new MouvementModel();
        $this->personnelModel = new PersonnelModel();
        $this->ressourceModel = new RessourceModel();
        $this->produitModel = new ProduitModel();
    }

    public function index()
    {
        //
    }

    public function createReports(){
        $data2 = $this->request->getPost(); 
        // dd($data2);
        $date1 = new \DateTime($data2['start']);
        $date2 = new \DateTime($data2['end']);

        if($date2 > $date1){

            extract($data2);
            $j=0;
            $cont = false ;
            foreach($report as $y){
                if($y=="Band"){
                    
                    $ref[$j] = $y;
                    $cont[$j] = true;
                    $j++;
                    
                }
                if($y=="Deaths"){
                    
                    $ref[$j] = $y;
                    $cont[$j] = true;
                    $j++;
                    
                }
                if($y=="Food"){
                    
                    $ref[$j] = $y;
                    $cont[$j] = true;
                    $j++;
                    
                }
                if($y=="Treat"){
                    
                    $ref[$j] = $y;
                    $cont[$j] = true;
                    $j++;
                    
                }
                if($y=="Yields"){
                    
                    $ref[$j] = $y;
                    $cont[$j] = true;
                    $j++;
                }
                if($y=="Sales"){
                    $ref[$j] = $y;
                    $cont[$j] = true;
                    $j++;
                    
                }
                $loic['ref'] = $ref;

        
    }
        
        }else{
        // return view ('Gestions/report_band');
        return redirect()->back();

        }

        $loic['band'] = $this->elevageModel->Band($start, $end);
        $loic['death'] = $this->produitModel->Death($start, $end);
        $loic['sale'] = $this->produitModel->Sale($start, $end);
        $loic['yield'] = $this->produitModel->Yeild($start, $end);
        $loic['food'] = $this->ressourceModel->Food($start, $end);
        $loic['treat'] = $this->ressourceModel->Treat($start, $end);
        // d($start);
        // d($end);
        // dd($loic);

        session()->set('loic' ,$loic);
        // dd(session()->set('loic' ,$loic['treat']));
        
        return view ('Gestions/report_band',$loic);
    }


    public function generatePdf()
    {   
        $loic = session()->get('loic');
        // dd($loic);
        $options = new Options();
        $options -> set('idRemoteEnable',true);

        $dompdf = new Dompdf($options);
        // dd($loic);

        $html = view ('Gestions/rapportpdf',$loic);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $filename = 'rapport_'.date('Y-m-d H i s');
        $dompdf->stream($filename,['Attachment' => true]);
    }
}
