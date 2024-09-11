
<?= $this->include('layouts/header.php');?>

<div class="main-container ">
    <div class="pd-20 card-box mb-30">
        <form action="<?= site_url('insert_ressource')?>" method="post">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-start mb-3 h3 text-success text-nowrap" style="font-size: 25px;">Update Feeding Inventory</div>
            </div>
            <div class="form-group row mt-2 mb-0">
                <div class="input-group custom col-md-6" >
                    <div class="form-floating">
                        <input
                            class="form-control"
                            type="hidden"
                            name="id_ressource"
                            value="<?= $ressources['id_ressource']?>"
                        />
                        <input
                            name="libelle_ressource"
                            id="label"
                            type="text"
                            class="form-control form-control-lg rounded-0"
                            placeholder="Label"
                            value="<?= $ressources['libelle_ressource']?>"
                        />
                        <label for="label">Label*</label>
                    </div>
                </div>

                <div class="input-group custom col-md-6" >
                    <div class="form-floating">
                        <input
                            name="type_ressource"
                            id="type"
                            type="text"
                            class="form-control form-control-lg rounded-0"
                            placeholder="Label"
                            value="<?= $ressources['type_ressource']?>" 
                            readonly
                        />
                        <label for="type">Ressource Type*</label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="input-group custom col-md-2" >
                    <div class="form-floating">
                        <input
                            name="quantite_ressources"
                            id="quantite"
                            type="number"
                            class="form-control form-control-lg rounded-0"
                            placeholder="Quantity"
                            value="<?= $ressources['quantite_ressources']?>"
                        />
                        <label for="quantite">Quantity*</label>
                    </div>
                </div>

                <div class="input-group custom col-md-2" >
                    <div class="form-floating">
                        <select class="form-select rounded-0" id="unit" name="unite_ressources" aria-label="State">
                            <!-- <option selected hidden disabled></option> -->
                            <option selected hidden value="<?= $ressources['unite_ressource']?>"><?= $ressources['unite_ressource']?></option>
                        </select>
                        
                        <label for="unit">Unit*</label>
                    </div>
                </div>
                
                <div class="input-group custom col-md-4" >
                    <div class="form-floating">
                        <input
                            name="cout_ressource"
                            id="cost"
                            type="number"
                            class="form-control form-control-lg rounded-0"
                            placeholder="Cost"
                            value="<?= $ressources['cout_ressource']?>"
                        />
                        <label for="cost">Cost*</label>
                    </div>
                </div>

                <div class="input-group custom col-md-4" >
                    <div class="form-floating">
                        <input
                            name="date_obtention"
                            id="date"
                            type="date"
                            class="form-control form-control-lg rounded-0"
                            placeholder=""
                            value="<?= $ressources['date_obtention']?>"
                        />
                        <label for="date">Purchase Date*</label>
                    </div>
                </div>
            </div>

            

            <div class="form-group row">
                <div class="input-group custom " >
                    <div class="form-floating">
                        <input
                            name="description_ressources"
                            id="description"
                            type="text"
                            class="form-control form-control-lg rounded-0"
                            style="height: 100px;"
                            placeholder="Description"
                            value="<?= $ressources['quantite_ressources']?>"
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
                    <button class="btn border-success bg-light text-success px-4" type="submit">Save</button>
                </div>
            </div>
        </form> 
    </div>
</div>
<?= $this->include('layouts/footer.php');?>