<?= $this->include('layouts/header.php');?>

<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
                <div class="card-box mb-30">
    <div class="py-3 pr-5 pl-4 d-flex justify-content-between">
        <h2 class="card-title text-blue my-1 mr-5" style="font-size: 25px;">Death List</h2>



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
                                    <div class="form-group row mt-2 mb-0">
                                        <div class="input-group custom " >
                                            <div class="form-floating">
                                                <select class="form-select rounded-0" id="animal" name="animal" aria-label="State">
                                                    <option selected hidden disabled></option>
                                                    
                                                        <?php 
                                                            $i=1;
                                                            foreach($elevages as $keys => $elevage){
                                                        ?>
                                                            <option value="<?= $elevage['nom_elevage']; ?>" ><?= $elevage['nom_elevage']?></option>
                                                        <?php
                                                            }
                                                        ?>
                                                </select>
                                                <label for="animal">Animal</label>
                                            </div>
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

                                    
                                        
                                    <div class="row d-flex justify-content-end">
                                        <div class="col-md-1 col-sm-2 offset-sm-3 offset-md-5 w-25 py-2">
                                            <button class="btn border-light text-danger close" type="button" data-dismiss="modal" aria-hidden="true" type="reset">Cancel</button>
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
        
    <div class="row my-5 pb-5">
        <div class="col-10 offset-1 d-flex justify-content-center " style=" border: 1px grey dashed;">
            
            <i class="text-secondary display-5" style="">Empty field</i>
            <div class="row my-5 py-5"></div>
        </div>
    </div>

</div>
</div>
</div>
</div>
<script>
    function Validation(i){
        var result = confirm('Voulez vous supprimer');

        if(result == true){
            document.querySelector('#id').value = i;
            document.querySelector('#valider').submit();
        }
    }
</script>

<?= $this->include('layouts/footer.php');?>