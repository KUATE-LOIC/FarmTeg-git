
<?= $this->include('layouts/header.php');?>

<div class="main-container ">
    <div class="pd-20 card-box mb-30">
        <form action="<?= site_url('insert_produit')?>" method="post">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-start mb-3 h3 text-success text-nowrap" style="font-size: 25px;"><?= lang("Text.New Yield")?>
                </div>
            </div>
            <div class="form-group row mt-2 mb-0">
                <div class="input-group custom col-md-6" id="col-4">
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
                        <label for="animal"><?= lang("Text.Animal Yield")?>
                        *</label>
                    </div>
                </div>

                <div class="input-group custom col-md-6" id="col-2">
                    <div class="form-floating">
                        <select class="form-select rounded-0" id="type" name="type_produit" aria-label="State">
                            <option selected hidden disabled></option>
                            <option id="self" value="Self"><?= lang("Text.Self")?>
                            </option>
                            <option  value="Other"><?= lang("Text.Other")?>
                            </option>
                        </select>
                        <label for="type"><?= lang("Text.Yield Type")?>
                        *</label>
                    </div>
                </div>

                <div class="input-group custom col-md-6" id="col-6">
                    <div class="form-floating">
                        <input type="hidden" name="statut_produit" value="Harvest">
                        <input
                            name="libelle_produit"
                            id="label1"
                            type="text"
                            class="form-control form-control-lg rounded-0"
                            placeholder="Label"
                        />
                        <label for="labal1"><?= lang("Text.Label")?>
                        *</label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">  
                <div class="input-group custom col-md-6" >
                    <div class="form-floating">
                        <input
                            name="date_produit"
                            id="date"
                            type="date"
                            value="<?= date('Y-m-d')?>"
                            readonly
                            class="form-control form-control-lg rounded-0"
                            placeholder=""
                        />
                        <label for="date"><?= lang("Text.Date")?>
                        *</label>
                    </div>
                </div>

                <div class="input-group custom col-md-6" >
                    <div class="form-floating">
                        <input
                            name="quantite_produit"
                            id="quantite"
                            type="number"
                            class="form-control form-control-lg rounded-0"
                            placeholder="Quantity"
                        />
                        <label for="quantite"><?= lang("Text.Quantity")?>
                        *</label>
                    </div>
                </div>
                
                    <input
                            name="nom_client"
                            id="client"
                            type="hidden"
                            class="form-control form-control-lg rounded-0"
                            placeholder="Client"
                            value="/"
                        />
                        <input
                            name="nom_mouvement"
                            id="cost"
                            value="Product"
                            type="hidden"
                            class="form-control form-control-lg rounded-0"
                            placeholder="Cost"
                        />
            </div>

            <div class="form-group row">
                <div class="input-group custom mb-0" >
                    <div class="form-floating">
                        <input
                            name="description_produit"
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
                    <button class="btn border-light text-danger" type="reset"><?= lang("Text.Cancel")?>
                    </button>
                </div>
                <div class="col-md-auto col-sm-2 w-50">
                    <button class="btn border-success bg-light text-success px-4" type="submit"><?= lang("Text.Save")?>
                    </button>
                </div>
            </div>
        </form> 
    </div>
</div>
<script>
    $(function(){
        $("#col-6").hide()
        $("#type").change(function(){

            if($(this).val() == "Other"){

                var col = document.querySelector("#col-4").className;
                var col2 = document.querySelector("#col-2").className;
                if(col="input-group custom col-md-6"){

                    var colN = document.querySelector("#col-4");
                    var colN2 = document.querySelector("#col-2");
                    colN.classList.remove("col-md-6");
                    colN.classList.add("col-md-3");

                    colN2.classList.remove("col-md-6");
                    colN2.classList.add("col-md-3");

                    $("#col-6").show(100);
                }
            }
            else{
                var col = document.querySelector("#col-4").className;
                var col2 = document.querySelector("#col-2").className;
                if(col="input-group custom col-md-4"){

                    var colN = document.querySelector("#col-4");
                    var colN2 = document.querySelector("#col-2");
                    colN.classList.remove("col-md-3");
                    colN.classList.add("col-md-6");

                    colN2.classList.remove("col-md-3");
                    colN2.classList.add("col-md-6");

                    $("#col-6").hide(100);
                }
            }
        })
    })
</script>

<script>
    $(function(){
        
        $('#label1').autocomplete({
            source: function(request, response){
                $.ajax({
                    url: "<?= site_url('/labRec')?>",
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
                $('#label1').val(ui.item.label);
                // $('#prix').val(ui.item.value);
                return false;
            }
        });

    })
</script>
<?= $this->include('layouts/footer.php');?>