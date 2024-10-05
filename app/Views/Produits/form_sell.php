
<?= $this->include('layouts/header.php');?>
<div class="main-container">
    <div class="pd-20 card-box mb-30">
    <div class="pd-20 d-flex justify-content-between">
        <h2 class="card-title text-blue my-1" style="font-size: 25px;"><?= lang("Text.Sell")?>
        </h2>
    </div>
        <form action="<?= site_url('insert_mouvement')?>" method="post">
            <input value="use" type="hidden" checked name="type_mouvement" id="use"/>
            <div>
                <div class="row">
                    <input type="hidden" name="statut_produit" value="Sale">
                    <input
                        name="nom_mouvement"
                        id="type"
                        type="hidden"
                        value="Product"
                        id="type"
                        class="form-control form-control-lg rounded-0"
                        placeholder="Label"
                    />
                    <div class="input-group custom col-md-5" >
                        <div class="form-floating">
                            <input
                                name="type_produit"
                                id="label"
                                type="text"
                                class="form-control form-control-lg rounded-0"
                                placeholder="Label"
                            />
                            <label for="label"><?= lang("Text.Label")?>
                            *</label>
                        </div>
                    </div>
                    
                    <div class="input-group custom col-md-3" >
                        <div class="form-floating">
                            <input
                                name="unite_mouvement"
                                id="unit"
                                type="text"
                                min="0"
                                class="form-control form-control-lg rounded-0"
                                placeholder="Unit"
                            />
                            <label for="unit"><?= lang("Text.Units")?>
                            *</label>
                        </div>
                    </div>
                    <div class="input-group custom col-md-4" >
                        <div class="form-floating">
                            <input
                                name="prix_unitaire"
                                id="prix"
                                type="prix"
                                class="form-control form-control-lg rounded-0"
                                placeholder="prix"
                            />
                            <label for="prix"><?= lang("Text.Unit Price")?>
                            *</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group row mb-0">  
                    <div class="input-group custom col-md-4 d-flex flex-column" >
                        <div class="form-floating w-100">
                            <input
                                name="qte_mouvement"
                                id="qte_mouvement"
                                type="number"
                                min="0"
                                class="form-control form-control-lg rounded-0"
                                placeholder="Quantity"
                            />
                            <label for="quantite"><?= lang("Text.Quantity")?>
                            *</label>
                        </div>
                        <small id="Warning" style="color: red; display: none;"><?= lang("Text.Stock insuffisant")?>
                        !</small>
                    </div>

                    <div class="input-group custom col-md-3" >
                        <div class="form-floating">
                            <input
                                id="max"
                                type="text"
                                class="form-control form-control-lg rounded-0"
                                placeholder="In Stock"
                            />
                            <label for="max"><?= lang("Text.In Stock")?>
                            </label>
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
                            <label for="cost"><?= lang("Text.Total Price")?>
                            *</label>
                        </div>
                    </div>
                </div>    
            </div>    
            <div class="form-group row mb-0">
                <div class="input-group custom " >
                    <div class="form-floating">
                        <input
                            name="nom_client"
                            id="client"
                            type="text"
                            class="form-control form-control-lg rounded-0"
                            placeholder="Client"
                        />
                        <label for="client"><?= lang("Text.Client Name")?>
                        *</label>
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
                    <button class="btn border-light text-danger" type="reset"><?= lang("Text.Cancel")?>
                    </button>
                </div>
                <div class="col-md-auto col-sm-2 w-50">
                    <button id="subbut" class="btn border-success bg-light text-success px-4" type="submit"><?= lang("Text.Sell")?>
                    </button>
                </div>
            </div>
        </form> 
    </div>
</div>

<script>
    $(function(){
        // $('#subbut').hide();
        
        $('#label').autocomplete({
            source: function(request, response){
                $.ajax({
                    url: "<?= site_url('/labelComplete')?>",
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
                $('#label').val(ui.item.label);
                $('#max').val(ui.item.value+' '+ui.item.unit2);
                $('#max').attr('readonly', true);

                maxQuantity = ui.item.value; // Stocker la quantité maximale
                $('#qte_mouvement').val(''); // Réinitialiser le champ de quantité
                $('#Warning').hide();
            return false;
        }
    });
        
    $('#unit').autocomplete({
        source: function(request, response){
            $.ajax({
                url: "<?= site_url('/uniteComplete')?>",
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
            $('#unit').val(ui.item.label);
            unitest = ui.item.label;
            $('#prix').val(ui.item.value);
            $('#prix').attr('readonly', true);

            pu = ui.item.value;
            return false;
        }
    });

    // Écouteur d'événement sur le champ de quantité
    $('#qte_mouvement').on('input', function() {

        var quantityValue = parseInt($(this).val(), 10);
        var quaValue = parseInt($(this).val(), 10);
        if(unitest == 'carton'){
            quantityValue = quantityValue * 12;
        }

        if (quantityValue > maxQuantity) {
            $(this).css('border', '1px solid red'); // Mettre la bordure en rouge
            $(this).css('box-shadow', '0 0 10px rgba(255, 0, 0, 0.5)'); // Mettre la bordure en rouge
            $('#Warning').show(); // Afficher le message d'avertissement
            $('#subbut').prop('disabled', true); // Afficher le message d'avertissement
        } else {
            $(this).css('border', ''); // Réinitialiser la bordure
            $('#Warning').hide(); // Cacher le message d'avertissement
            $('#subbut').prop('disabled', false);
            
        }
        var pti = pu * quaValue ;

        $('#cost').val(pti);
        $('#cost').attr('readonly', true);
    });

})
</script>

<script>
$(function(){
    
    $('#client').autocomplete({
        source: function(request, response){
            $.ajax({
                url: "<?= site_url('/CliName')?>",
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
            $('#client').val(ui.item.label);
            // $('#prix').val(ui.item.value);
            return false;
        }
    });

    })
</script>

<?= $this->include('layouts/footer.php');?> 