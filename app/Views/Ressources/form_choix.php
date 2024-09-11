
<?= $this->include('layouts/header.php');?>

<div class="main-container ">
            <div class="pd-20 card-box mb-30">
                <form action="<?= site_url('create_form_ressource')?>" method="post">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-start mb-3 h3 text-success" style="font-size: 25px;">Choose the Inventory Type</div>
                    </div>
                <div class="form-group row mt-2">
                    <div class="input-group custom " >
                        <div class="form-floating">
                        <select class="form-select rounded-0" id="unit" name="type_ressource" aria-label="State">
                            <option selected hidden disabled></option>
                            <option value="Treatment">Treatment</option>
                            <option value="Feeding">Feeding</option>
                        </select>
                            <label for="name">Type*</label>
                        </div>
                    </div>
                    
                    <div class="row d-flex justify-content-end">
                        <div class="col-md-1 col-sm-2 offset-sm-3 offset-md-5 w-25">
                            <a class="btn border-light text-danger px-4" href="<?= site_url('list_ressource')?>" type="reset">Back</a>
                        </div>
                        <div class="col-md-auto col-sm-2 w-50">
                            <button class="btn border-success bg-light text-success px-4" type="submit">Next</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
<?= $this->include('layouts/footer.php');?>