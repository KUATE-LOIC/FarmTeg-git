
<?= $this->include('layouts/header.php');?>
<link href="<?= base_url('assets/vendor/jquery-ui-1.12.1/jquery.ui.min.css')?>">

<div class="main-container ">
    <div class="pd-20 card-box mb-30">
        <form action="<?= site_url('insert_produit')?>" method="post">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-start mb-3 h3 text-success text-nowrap" style="font-size: 25px;">Sales</div>
            </div>
            <div class="form-group row mt-2 mb-0">
                <div class="input-group custom col-md-6" >
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
                        <label for="animal">Animal Yield*</label>
                    </div>
                </div>

                <div class="input-group custom col-md-6" >
                    <div class="form-floating">
                        <input type="hidden" name="statut_produit" value="Sale">
                        <input
                            name="libelle_produit"
                            id="label"
                            type="text"
                            value="<?= $data['type_produit']?>"
                            readonly
                            class="form-control form-control-lg rounded-0"
                            placeholder="Label"
                        />
                        <label for="labal">Label*</label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">  
                <div class="input-group custom col-md-3" >
                    <div class="form-floating">
                        <input
                            name="date_produit"
                            id="date"
                            type="date"
                            value="<?= $data['date_mouvement']?>"
                            readonly
                            class="form-control form-control-lg rounded-0"
                            placeholder=""
                        />
                        <label for="date">Date*</label>
                    </div>
                </div>

                <div class="input-group custom col-md-4" >
                    <div class="form-floating">
                        <input
                            name="quantite_produit"
                            id="quantite"
                            type="number"
                            value="<?= $qte['1']?>"
                            readonly
                            class="form-control form-control-lg rounded-0"
                            placeholder="Quantity"
                        />
                        <label for="quantite">Quantity*</label>
                    </div>
                </div>
                
                <div class="input-group custom col-md-5" >
                    <div class="form-floating">
                        <input
                            name="montant"
                            id="cost"
                            type="number"
                            class="form-control form-control-lg rounded-0"
                            placeholder="Cost"
                        />
                        <label for="cost">Estimated Price*</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="input-group custom mb-0" >
                    <div class="form-floating">
                        <input
                            name="description_produit"
                            id="description"
                            type="text"
                            value="<?= $data['description_mouvement']?>"
                            readonly
                            class="form-control form-control-lg rounded-0"
                            style="height: 100px;"
                            placeholder="description"
                        />
                        <label for="description">Description*</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="input-group custom " >
                    <div class="form-floating">
                        <input
                            name="nom_client"
                            id="client"
                            type="text"
                            class="form-control form-control-lg rounded-0"
                            placeholder="Client"
                        />
                        <label for="client">Client Name*</label>
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

<script>
    $(function(){
        
        $('#client').autocomplete({
            source: function(request, response){
                $.ajax({
                    url: "<?= site_url('autocomplete')?>",
                    methode: "GET",
                    data: {
                        keyword: request.term
                    },
                    success: function(data){
                        response(data);
                        console.log(data);
                    }
                });
            },
            minLength: 1,
            select: function(event, ui){
                $('#client').val(ui.item.client);
                $('#id').val(ui.item.id);
                $('#libelle').val(ui.item.libelle);
                return false;
            }
        });

    })
</script>
<?= $this->include('layouts/footer.php');?>