
<?= $this->include('layouts/header.php');?>

<div class="main-container ">
    <div class="pd-20 card-box mb-30">
        <form action="<?= site_url('insert_mouvement')?>" method="post">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-start mb-3 h3 text-success text-nowrap" style="font-size: 25px;"><?= lang("Text.Losses")?>
                </div>
            </div>
            <div class="row">
                <input type="hidden" name="type_mouvement" value="use">
            </div>
            <div class="row">
                <input class="form-select rounded-0" id="stk" type="hidden" name="nom_mouvement">
                <div class="input-group custom col-md-6" >
                    <div class="form-floating">
                        <input
                            name="type_produit"
                            id="label2"
                            type="text"
                            class="form-control form-control-lg rounded-0"
                            placeholder="Label"
                        />
                        <label for="labal"><?= lang("Text.Label")?>
                        *</label>
                    </div>
                </div>

                <div class="input-group custom col-md-6 d-flex flex-column" >
                    <div class="form-floating w-100">
                        <input
                            name="qte_mouvement"
                            id="qte_mouvement"
                            type="number"
                            class="form-control form-control-lg rounded-0"
                            placeholder="Quantity"
                        />
                        <label for="quantite"><?= lang("Text.Quantity")?>
                        *</label>
                    </div>
                    <small id="Warning" style="color: red; display: none;"><?= lang("Text.Stock insuffisant")?>
                    !</small>
                </div>
            </div>
            
            <div class="form-group row mb-0">  
                <!-- <div class="input-group custom col-md-6" >
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
                </div> -->
                <div class="input-group custom col-md-6" >
                    <div class="form-floating">
                        <input
                            id="max"
                            type="number"
                            class="form-control form-control-lg rounded-0"
                            placeholder="In Stock"
                        />
                        <label for="max"><?= lang("Text.In Stock")?>
                        </label>
                    </div>
                </div>

                <div class="input-group custom col-md-6">
                    <div class="form-floating">
                        <input
                            id="unit"
                            type="text"
                            class="form-control form-control-lg rounded-0"
                            placeholder="In Stock"
                        />
                        <label for="unit"><?= lang("Text.Units")?>
                        </label>
                    </div>
                </div>
                <!-- <div class="input-group custom col-md-4" >
                    <div class="form-floating">
                        <input class="form-select rounded-0" id="unit" name="unite_mouvement" type="text" readonly >
                    </div>
                </div> -->
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
                    <button id="subbut" class="btn border-success bg-light text-success px-4" type="submit"><?= lang("Text.Save")?>
                    </button>
                </div>
            </div>
        </form> 
    </div>
    
</div>
<script>
    $(function(){
        $('#subbut').hide();
        
        $('#label2').autocomplete({
            source: function(request, response){
                $.ajax({
                    url: "<?= site_url('/labRec2')?>",
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
                $('#label2').val(ui.item.label);
                $('#stk').val(ui.item.stk);
                $('#max').val(ui.item.value);
                $('#max').attr('readonly', true);
                $('#unit').val(ui.item.unit);
                $('#unit').attr('readonly', true);
                maxQuantity = ui.item.value; // Stocker la quantité maximale
                $('#qte_mouvement').val(''); // Réinitialiser le champ de quantité
                $('#Warning').hide();
            return false;
        }
    });

    // Écouteur d'événement sur le champ de quantité
    $('#qte_mouvement').on('input', function() {
        const quantityValue = parseInt($(this).val(), 10);

        if (quantityValue > maxQuantity) {
            $(this).css('border', '1px solid red'); // Mettre la bordure en rouge
            $('#Warning').show(); // Afficher le message d'avertissement
            $('#subbut').hide(); // Afficher le message d'avertissement
        } else {
            $(this).css('border', ''); // Réinitialiser la bordure
            $('#Warning').hide(); // Cacher le message d'avertissement
            $('#subbut').show(); // Afficher le message d'avertissement

        }
    });

    })
</script>


<?= $this->include('layouts/footer.php');?>