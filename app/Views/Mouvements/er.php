<?= $this->include('layouts/header.php');?>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="card-box mb-30">
                <div class="py-3 pr-5 pl-4 d-flex justify-content-between">

                    <div class="col-md-2 col-sm-12">
                        <div class="ml-5">
                            <a
                                href="#"
                                class="btn-block"
                                data-backdrop="static"
                                data-toggle="modal"
                                data-target="#login-modal"
                                type="button"
                            >
                                <span class="btn btn-success px-4 "><span class="mtext text-nowrap">Save Deaths</span></span>
                            </a>
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
                                        <div class="login-box bg-white box-shadow border-radius-10">
                                            <form action="<?= site_url('insert_dead')?>" method="post">
                                                <div class="row">
                                                    <div class="col-md-12 d-flex justify-content-start mb-3 h3 text-success" style="font-size: 25px;">New Specie</div>
                                                </div>
                                                <div class="input-group custom" >
                                                    <div class="form-floating">
                                                        <input
                                                            name="date_produit"
                                                            id="date"
                                                            type="date"
                                                            class="form-control form-control-lg rounded-0"
                                                            placeholder=""
                                                        />
                                                        <label for="date">Date*</label>
                                                    </div>
                                                </div>

                                                <div class="input-group custom" >
                                                    <div class="form-floating">
                                                        <input type="hidden" name="statut_produit" value="Death">
                                                        <input
                                                            name="quantite_produit"
                                                            id="quantite"
                                                            type="number"
                                                            class="form-control form-control-lg rounded-0"
                                                            placeholder="Quantity"
                                                        />
                                                        <label for="quantite">Quantity*</label>
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

                    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div
                                    class="login-box bg-white box-shadow border-radius-10"
                                >
                                    <div class="login-title">
                                        <h2 class="text-center text-primary">
                                            Login To DeskApp
                                        </h2>
                                    </div>
                                    <form>
                                        <div class="select-role">
                                            <div
                                                class="btn-group btn-group-toggle"
                                                data-toggle="buttons"
                                            >
                                                <label class="btn active">
                                                    <input type="radio" name="options" id="admin" />
                                                    <div class="icon">
                                                        <img
                                                            src="vendors/images/briefcase.svg"
                                                            class="svg"
                                                            alt=""
                                                        />
                                                    </div>
                                                    <span>I'm</span>
                                                    Manager
                                                </label>
                                                <label class="btn">
                                                    <input type="radio" name="options" id="user" />
                                                    <div class="icon">
                                                        <img
                                                            src="vendors/images/person.svg"
                                                            class="svg"
                                                            alt=""
                                                        />
                                                    </div>
                                                    <span>I'm</span>
                                                    Employee
                                                </label>
                                            </div>
                                        </div>
                                        <div class="input-group custom">
                                            <input
                                                type="text"
                                                class="form-control form-control-lg"
                                                placeholder="Username"
                                            />
                                            <div class="input-group-append custom">
                                                <span class="input-group-text"
                                                    ><i class="icon-copy dw dw-user1"></i
                                                ></span>
                                            </div>
                                        </div>
                                        <div class="input-group custom">
                                            <input
                                                type="password"
                                                class="form-control form-control-lg"
                                                placeholder="**********"
                                            />
                                            <div class="input-group-append custom">
                                                <span class="input-group-text"
                                                    ><i class="dw dw-padlock1"></i
                                                ></span>
                                            </div>
                                        </div>
                                        <div class="row pb-30">
                                            <div class="col-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input
                                                        type="checkbox"
                                                        class="custom-control-input"
                                                        id="customCheck1"
                                                    />
                                                    <label
                                                        class="custom-control-label"
                                                        for="customCheck1"
                                                        >Remember</label
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="forgot-password">
                                                    <a href="forgot-password.html"
                                                        >Forgot Password</a
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="input-group mb-0">
                                                    <a
                                                        class="btn btn-primary btn-lg btn-block"
                                                        href="index.html"
                                                        >Sign In</a
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    
                <div class="xs-pd-20-10 pd-ltr-20">
                    <div class="title pb-20">
                        <h1 class="h1 mb-0">Reports</h1>
                    </div>

                    <div class="row pb-10">
                        <div class="col-xl-4 col-lg-4 col-md-12 mb-20">
                            <div class="card-box min-height-200px pd-20" data-bgcolor="none">
                                <div class="d-flex justify-content-between pb-20 text-white">
                                    <div class="icon h2 text-center w-100" style="color:#03AC13;">
                                        <i class="">Livestock</i>
                                    </div>
                                </div>
                                <div class="sidebar-menu">
                                    <ul id="accordion-menu">
                                        <li class=" p-0 rounded-3 mb-2" style="background-color: rgba(100,250,20,0.2);">
                                            <a href="<?= site_url('dashboard')?>" class="dropdown-toggle no-arrow d-flex justify-content-between">
                                                <span class="micon icon-copy dw dw-fish"></span>
                                                <span class="mtext">Band</span>
                                                <i class="fa fa-mail-forward align-self-center pt-1"></i>
                                            </a>
                                        </li>
                                        <li class=" px-0 rounded-3 " style="background-color: rgba(100,250,20,0.2);">
                                            <a href="<?= site_url('dashboard')?>" class="dropdown-toggle no-arrow d-flex justify-content-between">
                                                <span class="micon icon-copy fi-skull"></span>
                                                <span class="mtext">Deaths</span>
                                                <i class="fa fa-mail-forward align-self-center pt-1"></i>
                                            </a>
                                        </li>
                                        <li class=" px-0 rounded-3 mt-2" style="background-color: rgba(100,250,20,0.2);">
                                            <a href="<?= site_url('dashboard')?>" class="dropdown-toggle no-arrow d-flex justify-content-between">
                                                <span class="micon icon-copy bi bi-bullseye"></span>
                                                <span class="mtext">All</span>
                                                <i class="fa fa-mail-forward align-self-center pt-1"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-12 mb-20">
                            <div class="card-box min-height-200px pd-20" data-bgcolor="none">
                                <div class="d-flex justify-content-between pb-20 text-white">
                                    <div class="icon h2 text-center w-100" style="color:#03AC13;">
                                        <i class="">Ressources</i>
                                    </div>
                                </div>
                                <div class="sidebar-menu">
                                    <ul id="accordion-menu">
                                        <li class=" p-0 rounded-3 mb-2" style="background-color: rgba(100,250,20,0.2);">
                                            <a href="<?= site_url('dashboard')?>" class="dropdown-toggle no-arrow d-flex justify-content-between">
                                                <span class="micon icon-copy dw dw-fried-egg"></span
                                                ><span class="mtext">Food</span>
                                                <i class="fa fa-mail-forward align-self-center pt-1"></i>
                                            </a>
                                        </li>
                                        <li class=" px-0 rounded-3" style="background-color: rgba(100,250,20,0.2);">
                                            <a href="<?= site_url('dashboard')?>" class="dropdown-toggle no-arrow d-flex justify-content-between">
                                                <span class="micon bi bi-eyedropper"></span
                                                ><span class="mtext">Treatment</span>
                                                <i class="fa fa-mail-forward align-self-center pt-1"></i>
                                            </a>
                                        </li>
                                        <li class=" px-0 rounded-3 mt-2" style="background-color: rgba(100,250,20,0.2);">
                                            <a href="<?= site_url('dashboard')?>" class="dropdown-toggle no-arrow d-flex justify-content-between">
                                                <span class="micon icon-copy bi bi-bullseye"></span>
                                                <span class="mtext">All</span>
                                                <i class="fa fa-mail-forward align-self-center pt-1"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-lg-4 col-md-12 mb-20">
                            <div class="card-box min-height-200px pd-20" data-bgcolor="none">
                                <div class="d-flex justify-content-between pb-20 text-white">
                                    <div class="icon h2 text-center w-100" style="color:#03AC13;">
                                        <i class="">Products</i>
                                    </div>
                                </div>
                                <div class="sidebar-menu">
                                    <ul id="accordion-menu">
                                        <li class=" px-0 rounded-3 mb-2" style="background-color: rgba(100,250,20,0.2);">
                                            <a href="<?= site_url('dashboard')?>" class="dropdown-toggle no-arrow d-flex justify-content-between">
                                                <span class="micon icon-copy dw dw-eggplant"></span
                                                ><span class="mtext">Yields</span>
                                                <i class="fa fa-mail-forward align-self-center pt-1"></i>
                                            </a>
                                        </li>
                                        <li class=" px-0 rounded-3" style="background-color: rgba(100,250,20,0.2);">
                                            <a href="<?= site_url('dashboard')?>" class="dropdown-toggle no-arrow d-flex justify-content-between">
                                                <span class="micon icon-copy dw dw-food-cart"></span
                                                ><span class="mtext">Sales</span>
                                                <i class="fa fa-mail-forward align-self-center pt-1"></i>
                                            </a>
                                        </li>
                                        <li class=" px-0 rounded-3 mt-2" style="background-color: rgba(100,250,20,0.2);">
                                            <a href="<?= site_url('dashboard')?>" class="dropdown-toggle no-arrow d-flex justify-content-between">
                                                <span class="micon icon-copy bi bi-bullseye"></span>
                                                <span class="mtext">All</span>
                                                <i class="fa fa-mail-forward align-self-center pt-1"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row pb-10">
                        <div class="col-xl-4 col-lg-4 offset-4 col-md-12 mb-20">
                            <div class="card-box pb-0 pd-20" data-bgcolor="none">
                                <div class="sidebar-menu pb-5">
                                    <ul id="accordion-menu">
                                        <li class=" p-0 rounded-3" style="background-color: rgba(100,250,20,0.2);">
                                            <a href="<?= site_url('dashboard')?>" class="dropdown-toggle no-arrow d-flex justify-content-between">
                                                <span class="micon icon-copy bi bi-ui-checks"></span>
                                                <span class="mtext">Custom Report</span>
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