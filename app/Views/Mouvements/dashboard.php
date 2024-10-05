<?= $this->include('layouts/header.php');?>

<div class="main-container bg-light">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
            <h2 class="h3 mb-0"><?= lang("Text.Market Place")?>
            </h2>
        </div>

        <div class="row pb-10">
            <div class="col-xl-4 col-lg-4 col-md-12 mb-20">
                <div class="card-box min-height-200px pd-20 shadow" data-bgcolor="rgba(127, 229, 238)">
                    <div class="d-flex justify-content-between pb-20 text-white">
                        <div class="icon h1 text-white">
                            <i class="fa fa-money" aria-hidden="true"></i>
                        </div>
                        
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="text-white">
                            <div class="font-20 h3 text-white"><?= lang("Text.Total Income")?>
                            </div>
                            <div class="font-24 weight-500"><?= $sumMont['sum']?></div>
                        </div>
                        <div class="max-width-150  d-flex justify-content-end">
                            <img class="w-50" src="<?= base_url('assets/icons/income.svg')?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-12 mb-20">
                <div class="card-box min-height-200px pd-20 shadow" data-bgcolor="#03AC52">
                    <div class="d-flex justify-content-between pb-20 text-white">
                        <div class="icon h1 text-white">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        </div>
                        
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="text-white">
                            <div class="font-20 h3 text-white"><?= lang("Text.Sales")?>
                            </div>
                            <div class="font-24 weight-500"><?= $nbrSale['sales']?></div>
                        </div>
                        <div class="max-width-150  d-flex justify-content-end">
                            <img class="w-50" src="<?= base_url('assets/icons/sales.svg')?>">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-4 col-md-12 mb-20">
                <div class="card-box min-height-200px pd-20 shadow" data-bgcolor="#FF69FF">
                    <div class="d-flex justify-content-between pb-20 text-white">
                        <div class="icon h1 text-white">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="text-white">
                            <div class="font-20 h3 text-white"><?= lang("Text.Total Clients")?>
                            </div>
                            <div class="font-24 weight-500"><?= $nbrCli['nbr']?></div>
                        </div>
                        <div class="max-width-150  d-flex justify-content-end">
                            <img class="w-75" src="<?= base_url('assets/icons/clients.svg')?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pb-10">
            <div class="col-md-4 mb-20">
                <div
                    class="card-box min-height-200px pd-20 mb-20 shadow"
                    data-bgcolor="#455a64"
                >
                    <div class="d-flex justify-content-between pb-20 text-white">
                        <div class="icon h1 text-white">
                            <i class="icon-copy bi bi-clipboard2-data-fill" aria-hidden="true"></i>
                            <!-- <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i> -->
                        </div>
                        <div class="font-14 text-right">
                            <div class="h3 text-white"><i class="icon-copy ion-arrow-up-c "></i><?= lang("Text.Top Product")?>
                            </div>
                            <!-- <div class="font-12">Since last month</div> -->
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="text-white">
                            <div class="font-20 h3 text-white"><?= $best['libelle_produit']?></div>
                            <div class="font-24 weight-500"><?= $best['nbr']?></div>
                        </div>
                        <div class="max-width-150  d-flex justify-content-end">
                            <img class="w-50" src="<?= base_url('assets/icons/pdt.svg')?>">
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-12 px-0">
                        <div class="card border-0 shadow" style="border-radius: 12px;">
                            <div class="card-body">
                            <h5 class="card-title"><?= lang("Text.Products Sold")?>
                            </h5>

                            <!-- Donut Chart -->
                            <div id="donutChart" style="min-height: 350px;" class="echart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                    echarts.init(document.querySelector("#donutChart")).setOption({
                                        tooltip: {
                                        trigger: 'item'
                                        },
                                        legend: {
                                        top: '5%',
                                        left: 'center'
                                        },
                                        series: [{
                                        name: 'Access From',
                                        type: 'pie',
                                        radius: ['40%', '70%'],
                                        avoidLabelOverlap: false,
                                        label: {
                                            show: false,
                                            position: 'center'
                                        },
                                        emphasis: {
                                            label: {
                                            show: true,
                                            fontSize: '18',
                                            fontWeight: 'bold'
                                            }
                                        },
                                        labelLine: {
                                            show: false
                                        },
                                        data: [

                                            <?php
                                            $i = 0;
                                                foreach($total as $key => $val3){
                                                    // d($val3);
                                                    $tot[$i] = $val3;
                                                    $i++;
                                                    
                                                        ?>
                                                        {
                                                            value: <?php $i=0; echo json_encode($tot[$i]);?>,
                                                            
                                                        },
                                                        <?php
                                                    
                                                    
                                                }
                                                // dd($total);
                                            ?>
                                        ]
                                        }]
                                    });
                                    });
                                </script>
                            <!-- End Donut Chart -->

                            </div>
                        </div>
                    </div>

            </div>
            <!-- <div class="col-md-8 mb-20">
                <div class="card-box height-100-p pd-20">
                    <div class="d-flex flex-wrap justify-content-between align-items-center pb-0 pb-md-3">
                        <div class="h5 mb-md-0">Sales per time</div>
                        <div class="form-group mb-md-0">
                            <select class="form-control form-control-sm selectpicker">
                                <option value="">Last Week</option>
                                <option value="">Last Month</option>
                                <option value="">Last 6 Month</option>
                                <option value="">Last 1 year</option>
                            </select>
                        </div>
                    </div>
                    <div id="activities-chart"></div>
                </div>
            </div> -->
            <div class="col-md-8 mb-20">
                <div class="card-box height-100-p pd-20">
                    <div class="d-flex flex-wrap justify-content-between align-items-center pb-0 pb-md-3">
                        <div class="h5 mb-md-0"><?= lang("Text.Sales per time")?>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- <select class="form-control form-control-sm selectpicker">
                                <option value="">Last Week</option>
                                <option value="">Last Month</option>
                                <option value="">Last 6 Month</option>
                                <option value="">Last 1 year</option>
                            </select> -->
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Bar Chart -->
                        <div id="barChart" style="min-height: 400px;" class="echart"></div>
                        <?php
                            $i = 0;
                            foreach($qte as $key => $val1){
                                $quan[$i] = $val1;
                                $i++;
                            }
                            // print_r($quan);
                            // dd($quan);

                            foreach($date as $key => $val2){
                                $datess[$i] = $val2;
                                $i++;
                            }
                            // print_r($datess);
                            // dd($datess);
                        ?>

                        <script>
                            const num2 = <?php echo json_encode($quan); ?>;
                            const num1 = <?php echo json_encode($datess); ?>;
                            document.addEventListener("DOMContentLoaded", () => {
                            echarts.init(document.querySelector("#barChart")).setOption({
                                xAxis: {
                                type: 'category',
                                data: num1
                                },
                                yAxis: {
                                type: 'value'
                                },
                                series: [{
                                data: num2,
                                type: 'bar'
                                }]
                            });
                            });
                        </script>
                        <!-- End Bar Chart -->

                    </div>

                </div>
            </div>
            
        </div>
        
    </div>
</div>

<?= $this->include('layouts/footer.php');?>