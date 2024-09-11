
<?= $this->include('layouts/header.php');?>
<div class="main-container">
    <div class="pd-20 card-box mb-30">
    <div class="pd-20 d-flex justify-content-between">
        <h2 class="card-title text-blue my-1" style="font-size: 25px;">Sell</h2>
    </div>
        <form action="<?= site_url('insert_mouvement')?>" method="post">
            <input value="use" type="hidden" checked name="type_mouvement" id="use"/>
            <div class="row">
                <div class="input-group custom col-md-6" >
                    <div class="form-floating">
                        <input
                            name="nom_mouvement"
                            id="label"
                            type="text"
                            value="Product"
                            readonly
                            id="type"
                            class="form-control form-control-lg rounded-0"
                            placeholder="Label"
                        />
                        <label for="type">Stock Of*</label>
                    </div>
                </div>
                <div class="input-group custom col-md-6" >
                    <div class="form-floating">
                        <input
                            name="type_produit"
                            id="label"
                            type="text"
                            class="form-control form-control-lg rounded-0"
                            placeholder="Label"
                        />
                        <label for="labal">Label*</label>
                    </div>
                </div>
            </div>
            
            <div class="form-group row mb-0">  
                <div class="input-group custom col-md-6" >
                    <div class="form-floating">
                        <input
                            name="date_mouvement"
                            id="date"
                            type="date"
                            class="form-control form-control-lg rounded-0"
                            placeholder=""
                        />
                        <label for="date">Date*</label>
                    </div>
                </div>

                <div class="input-group custom col-md-4" >
                    <div class="form-floating">
                        <input
                            name="qte_mouvement"
                            id="qte_mouvement"
                            type="number"
                            class="form-control form-control-lg rounded-0"
                            placeholder="Quantity"
                        />
                        <label for="quantite">Quantity*</label>
                    </div>
                </div>
                <div class="input-group custom col-md-2" >
                    <div class="form-floating">
                        <select class="form-select rounded-0" id="unit" name="unite_mouvement" aria-label="State">
                            <option selected hidden disabled></option>
                            <option value="Bags">Bags</option>
                        </select>
                        
                        <label for="unit">Unit*</label>
                    </div>
                </div>
            </div>    
                

            <div class="form-group row">
                <div class="input-group custom mb-0" >
                    <div class="form-floating">
                        <input
                            name="description_mouvement"
                            id="description"
                            type="text"
                            class="form-control form-control-lg rounded-0"
                            style="height: 100px;"
                            placeholder="description"
                        />
                        <label for="description">Description*</label>
                    </div>
                </div>
            </div>
                    
            <div class="row d-flex justify-content-end">
                <div class="col-md-1 col-sm-2 offset-sm-3 offset-md-5 w-25">
                    <button class="btn border-light text-danger" type="reset">Cancel</button>
                </div>
                <div class="col-md-auto col-sm-2 w-50">
                    <button class="btn border-success bg-light text-success px-4" type="submit">Sell</button>
                </div>
            </div>
        </form> 
    </div>
</div>
<?= $this->include('layouts/footer.php');?> 