
<?= $this->include('layouts/header.php');?>

<div class="main-container ">
            <div class="pd-20 card-box mb-30">
                <form action="<?= site_url('insert_elevage')?>" id="formlogin" name="formlog" method="post">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-start mb-3 h3 text-success" style="font-size: 25px;"><?= lang("Text.New Animal Band")?>
                        </div>
                    </div>

                    <div class="form-group row mt-2 mb-0">
                        <div class="input-group custom col-md-6" >
                            <div class="form-floating">
                                <select class="form-select rounded-0" id="type" aria-label="State" name="type">
                                    <option value="" selected disabled hidden></option>
                                    <?php 
                                        $i=1;
                                        foreach($types as $keys => $type){
                                    ?>
                                    
                                    <option value="<?= $type['id_type']; ?>" ><?= $type['nom_type']?></option>
                                        <?php
                                            }
                                        ?>
                                </select>
                                <label for="type"><?= lang("Text.Species")?>
                                *</label>
                            </div>
                        </div>

                        <div class="input-group custom col-md-6" >
                            <div class="form-floating">
                                <input
                                    name="nom_elevage"
                                    id="name"
                                    type="text"
                                    class="form-control form-control-lg rounded-0"
                                    placeholder="Name*"
                                />
                                <label for="name"><?= lang("Text.Name")?>
                                *</label>
                            </div>
                        </div>
                    </div>
                    

                    <div class="form-group row mb-0">
                        <div class="input-group custom col-md-6" >
                            <div class="form-floating">
                                <input
                                    name="date_obtention"
                                    id="date"
                                    type="date"
                                    class="form-control rounded-0"
                                    placeholder="Date*"
                                />
                                <label for="date"><?= lang("Text.Date")?>
                                *</label>
                            </div>
                        </div>
                        <div class="input-group custom col-md-6" >
                            <div class="form-floating">
                                <input type="hidden" name="quantite">
                                <input
                                    name="qte_initial"
                                    id="qty"
                                    type="number"
                                    class="form-control form-control-lg rounded-0"
                                    placeholder="Quantity*"
                                />
                                <label for="qty"><?= lang("Text.Quantity")?>
                                *</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="input-group custom " >
                        <div class="form-floating">
                            <textarea
                                name="description_elevage"
                                id="description"
                                class="form-control form-control-lg rounded-0"
                                placeholder="Description*"
                                style="height: 100px;"
                            ></textarea>
                            <label for="description"><?= lang("Text.Description")?>
                            *</label>
                        </div>
                        
                    </div>

                    <div class="row d-flex justify-content-end" id="bef">
                        <div class="col-md-1 col-sm-2 offset-sm-3 offset-md-5 w-25">
                            <button class="btn border-light text-danger" type="reset"><?= lang("Text.Cancel")?>
                            </button>
                        </div>
                        <div class="col-md-auto col-sm-2 w-50">
                            <button class="btn border-success bg-light text-success px-4" id="con" type="button"><?= lang("Text.Save")?>
                            </button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>

        <script>
        $(document).ready(function() {
            $("#con").click(function() {
			$(".alert.alert-danger.text-center.w-100.alert-highlight").remove();
            var type = formlog.type.value;
            var name = formlog.nom_elevage.value;
            var date = formlog.date_obtention.value;
            var description = formlog.description_elevage.value;
        
            if (type== "" || name== "" || date=="" || qty== "" || description== "") {
				// Ajouter l'élément en-dessus du bouton si elle n'existe pas
				if (!$('.alert.alert-danger.w-100.text-center').length) {
					$('#bef').before('<div class="alert alert-danger w-100 text-center">Veillez remplir tous les champs</div>');
				}
				// Ajouter l'effet de surbrillance
				$('.alert.alert-danger.w-100.text-center').addClass('alert-highlight');
				setTimeout(function() {
					$('.alert.alert-danger.w-100.text-center').removeClass('alert-highlight');
				}, 1500);
				return;
            }
            
            $("#formlogin").submit();
            });
        });
    	</script>
        


<!-- <script>
    $(function(){
        
        $('#name').autocomplete({
            source: function(request, response){
                $.ajax({
                    url: "<?= site_url('/autocomplete')?>",
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
                $('#name').val(ui.item.label);
                // $('#qty').val(ui.item.id);
                return false;
            }
        });

    })
</script> -->
<?= $this->include('layouts/footer.php');?>