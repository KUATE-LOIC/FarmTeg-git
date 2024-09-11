<?= $this->include('layouts/header.php');?>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="card-box mb-30">

                <!-- start modal -->
                
                <div class="py-3 pr-5 pl-4 d-flex justify-content-between">
                    <div class="col-md-2 col-sm-12">
                        <div class="ml-5">
                            <div
                                class="modal fade"
                                id="login-modal"
                                tabindex="-1"
                                role="dialog"
                                aria-labelledby="myLargeModalLabel"
                                aria-hidden="true"
                            >
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="login-box bg-white box-shadow border-radius-10 pt-4">
                                            <form action="<?= site_url('choose_report')?>" method="post">
                                                <div class="row">
                                                    <div class="col-md-12 d-flex justify-content-start mb-3 h3 text-success" style="font-size: 25px;">Choose</div>
                                                </div>

                                                <label class="weight-600">LiveStock</label>

                                                <div class="input-group custom mb-1" >
                                                    <div class=" custom-control custom-checkbox mb-5">
                                                        <input
                                                            name="report[]"
                                                            type="checkbox"
                                                            value="Band"
                                                            class="custom-control-input"
                                                            id="Check1"
                                                        />
                                                        <label class="custom-control-label" for="Check1"
                                                            >Band</label
                                                        >
                                                    </div>
                                                </div>

                                                <div class="input-group custom" >
                                                    <div class=" custom-control custom-checkbox mb-5">
                                                        <input
                                                            name="report[]"
                                                            value="Deaths"
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="Check2"
                                                        />
                                                        <label class="custom-control-label" for="Check2"
                                                            >Deaths</label
                                                        >
                                                    </div>
                                                </div>

                                                <label class="weight-600">Resources</label>


                                                <div class="input-group custom mb-1" >
                                                    <div class=" custom-control custom-checkbox mb-5">
                                                        <input
                                                            name="report[]"
                                                            value="Food"
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="Check3"
                                                        />
                                                        <label class="custom-control-label" for="Check3"
                                                            >Food</label
                                                        >
                                                    </div>
                                                </div>

                                                <div class="input-group custom" >
                                                    <div class=" custom-control custom-checkbox mb-5">
                                                        <input
                                                            name="report[]"
                                                            value="Treat"
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="Check4"
                                                        />
                                                        <label class="custom-control-label" for="Check4"
                                                            >Treat</label
                                                        >
                                                    </div>
                                                </div>

                                                <label class="weight-600">Products</label>

                                                <div class="input-group custom mb-2" >
                                                    <div class=" custom-control custom-checkbox mb-5">
                                                        <input
                                                            name="report[]"
                                                            value="Yields"
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="Check5"
                                                        />
                                                        <label class="custom-control-label" for="Check5"
                                                            >Yields</label
                                                        >
                                                    </div>
                                                </div>

                                                <div class="input-group custom" >
                                                    <div class=" custom-control custom-checkbox mb-5">
                                                        <input
                                                            name="report[]"
                                                            value="Sales"
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="Check6"
                                                        />
                                                        <label class="custom-control-label" for="Check6"
                                                            >Sales</label
                                                        >
                                                    </div>
                                                </div>

                                                

                                                    
                                                <div class="row d-flex justify-content-end">
                                                    <div class="col-md-1 col-sm-2 offset-sm-3 offset-md-5 w-25 ">
                                                        <button class="btn close " style="color: red; background-color: pink; padding: 12px 20px 12px 20px;"  data-dismiss="modal" aria-hidden="true" type="reset">Cancel</button>
                                                    </div>
                                                    <div class="col-md-auto col-sm-2 w-50">
                                                        <button class="btn border-success bg-light text-success px-4" type="submit">Save</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end modal -->

                <?php
                    if(isset($i)){
                    if($i==true){ ?>
                    <script>
                        $(function(){
                            $('#reportModal').modal('show');
                            
                        })
                    </script>
                <?php }} ?>

                <!-- start modal 2 -->

                <div class="modal fade" id="reportModal" tabindex="-1"  role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="login-box bg-white box-shadow border-radius-10 pt-4">
                                <form action="<?= site_url('choose_reports')?>" method="post" id="ChooseDate">
                                    <div class="row">
                                        <div class="col-md-12 d-flex justify-content-start mb-3 h3 text-success" style="font-size: 25px;">Choose Date Range</div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <strong class="weight-600">Choosed For Report</strong>
                                        <div class="input-group custom mb-0">
                                            <?php
                                                if(isset($report)){
                                                foreach($report as $reports){
                                            ?>
                                            <div class="form-floating col-md-4 px-1">
                                                <input
                                                type="text"
                                                name="report[]"
                                                readonly 
                                                class="form-control-plaintext pt-1 px-0"
                                                value="<?= $reports?>"
                                                />
                                            </div>
                                            <?php }} ?>
                                        </div>
                                    </div>
                                        
                                    <div class="form-group row mt-2">
                                        <div class="input-group custom col-md-6" >
                                            <div class="form-floating">
                                                <input
                                                    name="start"
                                                    id="start"
                                                    type="date"
                                                    class="form-control form-control-lg rounded-0"
                                                    placeholder="start"
                                                />
                                                <label for="start">Start</label>
                                            </div>
                                        </div>
                                        <div class="input-group custom col-md-6" >
                                            <div class="form-floating">
                                                <input
                                                    name="end"
                                                    id="end"
                                                    type="date"
                                                    class="form-control form-control-lg rounded-0"
                                                    placeholder="end"
                                                />
                                                <label for="end">End</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row d-flex justify-content-end">
                                        <div class="col-md-1 col-sm-2 offset-sm-3 offset-md-5 w-25 ">
                                            <button class="btn  close" style="color: red; background-color: pink; padding: 12px 20px 12px 20px;" type="button" data-dismiss="modal" aria-hidden="true" type="reset">Cancel</button>
                                        </div>
                                        <div class="col-md-auto col-sm-2 w-50">
                                            <button class="btn border-success bg-light text-success px-4" id="save" type="submit">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end modal 2 -->

                <!-- start modal 3 -->

                <div class="modal fade" id="reportModals" tabindex="-1"  role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="login-box bg-white box-shadow border-radius-10 pt-4">
                                <form action="<?= site_url('choose_reports')?>" method="post" id="ChooseDate">
                                    <div class="row">
                                        <div class="col-md-12 d-flex justify-content-start mb-3 h3 text-success" style="font-size: 25px;">Choose Date Range</div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <strong class="weight-600">Choosed For Report</strong>
                                        <div class="input-group custom mb-0">
                                            <div class="form-floating col-md-4 px-1">
                                                <input
                                                type="text"
                                                name="report[]"
                                                readonly 
                                                id="value"
                                                class="form-control-plaintext pt-1 px-0"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class="form-group row mt-2">
                                        <div class="input-group custom col-md-6" >
                                            <div class="form-floating">
                                                <input
                                                    name="start"
                                                    id="start"
                                                    type="date"
                                                    class="form-control form-control-lg rounded-0"
                                                    placeholder="start"
                                                />
                                                <label for="start">Start</label>
                                            </div>
                                        </div>
                                        <div class="input-group custom col-md-6" >
                                            <div class="form-floating">
                                                <input
                                                    name="end"
                                                    id="end"
                                                    type="date"
                                                    class="form-control form-control-lg rounded-0"
                                                    placeholder="end"
                                                />
                                                <label for="end">End</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row d-flex justify-content-end">
                                        <div class="col-md-1 col-sm-2 offset-sm-3 offset-md-5 w-25 ">
                                            <button class="btn  close" style="color: red; background-color: pink; padding: 12px 20px 12px 20px;" type="button" data-dismiss="modal" aria-hidden="true" type="reset">Cancel</button>
                                        </div>
                                        <div class="col-md-auto col-sm-2 w-50">
                                            <button class="btn border-success bg-light text-success px-4" id="save" type="submit">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- end modal 3 -->



                <div class="xs-pd-20-10 pd-ltr-20">
                    <div class="title pb-20">
                        <h1 class="h1 mb-0">Reports</h1>
                    </div>

                    <div class="row pb-10">
                        <div class="col-xl-4 col-lg-4 col-md-12 mb-20">
                            <div class="card-box min-height-200px pd-20  pb-0" data-bgcolor="none">
                                <div class="d-flex justify-content-between pb-20 text-white">
                                    <div class="icon h2 text-center w-100" style="color:#03AC13;">
                                        <i class="">Livestock</i>
                                    </div>
                                </div>
                                <div class="sidebar-menu">
                                    <ul id="accordion-menu">
                                        <li class=" p-0 rounded-3 mb-2 kua" data-value="Band" style="background-color: rgba(100,250,20,0.2);">
                                            <a href="#" class="dropdown-toggle no-arrow d-flex justify-content-between">
                                                <span class="micon icon-copy dw dw-fish"></span>
                                                <span class="mtext">Band</span>
                                                <i class="fa fa-mail-forward align-self-center pt-1"></i>
                                            </a>
                                        </li>
                                        <li class=" px-0 rounded-3 kua" data-value="Deaths" style="background-color: rgba(100,250,20,0.2);">
                                            <a href="#" class="dropdown-toggle no-arrow d-flex justify-content-between">
                                                <span class="micon icon-copy fi-skull"></span>
                                                <span class="mtext">Deaths</span>
                                                <i class="fa fa-mail-forward align-self-center pt-1"></i>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-12 mb-20">
                            <div class="card-box min-height-200px pd-20 pb-0" data-bgcolor="none">
                                <div class="d-flex justify-content-between pb-20 text-white">
                                    <div class="icon h2 text-center w-100" style="color:#03AC13;">
                                        <i class="">Ressources</i>
                                    </div>
                                </div>
                                <div class="sidebar-menu">
                                    <ul id="accordion-menu">
                                        <li class=" p-0 rounded-3 mb-2 kua" data-value="Food" style="background-color: rgba(100,250,20,0.2);">
                                            <a href="#" class="dropdown-toggle no-arrow d-flex justify-content-between">
                                                <span class="micon icon-copy dw dw-fried-egg"></span
                                                ><span class="mtext">Food</span>
                                                <i class="fa fa-mail-forward align-self-center pt-1"></i>
                                            </a>
                                        </li>
                                        <li class=" px-0 rounded-3 kua" data-value="Treat" style="background-color: rgba(100,250,20,0.2);">
                                            <a href="#" class="dropdown-toggle no-arrow d-flex justify-content-between">
                                                <span class="micon bi bi-eyedropper"></span
                                                ><span class="mtext">Treat</span>
                                                <i class="fa fa-mail-forward align-self-center pt-1"></i>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-lg-4 col-md-12 mb-20">
                            <div class="card-box min-height-200px pd-20 pb-0" data-bgcolor="none">
                                <div class="d-flex justify-content-between pb-20 text-white">
                                    <div class="icon h2 text-center w-100" style="color:#03AC13;">
                                        <i class="">Products</i>
                                    </div>
                                </div>
                                <div class="sidebar-menu">
                                    <ul id="accordion-menu">
                                        <li class=" px-0 rounded-3 mb-2 kua" data-value="Yields" style="background-color: rgba(100,250,20,0.2);">
                                            <a href="#" class="dropdown-toggle no-arrow d-flex justify-content-between">
                                                <span class="micon icon-copy dw dw-eggplant"></span
                                                ><span class="mtext">Yields</span>
                                                <i class="fa fa-mail-forward align-self-center pt-1"></i>
                                            </a>
                                        </li>
                                        <li class=" px-0 rounded-3 kua" data-value="Sales" style="background-color: rgba(100,250,20,0.2);">
                                            <a href="#" class="dropdown-toggle no-arrow d-flex justify-content-between">
                                                <span class="micon icon-copy dw dw-food-cart"></span
                                                ><span class="mtext">Sales</span>
                                                <i class="fa fa-mail-forward align-self-center pt-1"></i>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row pb-10">
                        <div class="col-xl-4 col-lg-4 offset-md-4 col-md-12 mb-20">
                            <div class="card-box pb-0 pd-20" data-bgcolor="none">
                                <div class="sidebar-menu pb-5">
                                    <ul id="accordion-menu">
                                        <li class=" p-0 rounded-3" style="background-color: rgba(100,250,20,0.2);">
                                        <a href="#" class="dropdown-toggle no-arrow d-flex justify-content-between" data-backdrop="static" data-toggle="modal" data-target="#login-modal" type="button">
                                            <span class="micon icon-copy bi bi-ui-checks"></span>
                                            <strong class="mtext">Custom Report</strong>
                                            <i class="fa fa-mail-forward align-self-center pt-1"></i>
                                        </a>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
        $(".kua").click(function(){
            var y = $(this).data('value');
            $("#value").val(y);
            $("#reportModals").modal("show");
        })
    })
</script>
<!-- <script>
    function Validation(i){
        var result = confirm('Voulez vous supprimer');

        if(result == true){
            document.querySelector('#id').value = i;
            document.querySelector('#valider').submit();
        }
    }
</script> -->

<?= $this->include('layouts/footer.php');?>