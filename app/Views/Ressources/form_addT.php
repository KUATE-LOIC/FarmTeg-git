
<?= $this->include('layouts/header.php');?>

<div class="main-container ">
    <div class="pd-20 card-box mb-30">
        <form action="<?= site_url('insert_ressource')?>" method="POST" id="addFood">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-start mb-3 h3 text-success text-nowrap" style="font-size: 25px;"><?= lang("Text.feedings")?></div>
                <a class="col-md-2 offset-4 d-flex justify-content-end mb-3 text-info d-flex align-items-center" id="add"><i class="fa fa-plus d-flex align-items-center"></i>&nbsp<?= lang("Text.plus")?></a>
            </div>

            <div class="addMore">
                <div class="form-group row mt-2 mb-0">
                    <div class="input-group custom col-md-6 mb-0" >
                        <div class="form-floating">
                            <input
                                name="libelle_ressource[]"
                                id="label"
                                type="text"
                                class="form-control form-control-lg rounded-0"
                                placeholder="Label"
                            />
                            <label for="label"><?= lang("Text.Label")?>*</label>
                        </div>
                    </div>

                    
                    <div class="input-group custom col-md-6 mb-0" >
                        <div class="form-floating">
                            <input
                                name="quantite_ressources[]"
                                id="quantite"
                                type="number"
                                class="form-control form-control-lg rounded-0"
                                placeholder="Quantity"
                            />
                            <label for="quantite"><?= lang("Text.Quantity")?>*</label>
                        </div>
                    </div>

                    <div class="input-group custom col-md-6" >
                        <div class="form-floating">
                            <input
                                name="type_ressource[]"
                                id="type"
                                type="hidden"
                                class="form-control form-control-lg rounded-0"
                                placeholder="Label"
                                value="Treatment" readonly
                            />
                            
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">

                    <div class="input-group custom col-md-6 mb-0" >
                        <div class="form-floating">
                            <select class="form-select rounded-0" id="unit" name="unite_ressource[]" aria-label="State">
                                <option selected hidden disabled></option>
                                <option value="Litre">Litre</option>
                            </select>
                            
                            <label for="unit"><?= lang("Text.Units")?>*</label>
                        </div>
                    </div>
                    
                    <div class="input-group custom col-md-6 mb-0" >
                        <div class="form-floating">
                            <input
                                name="cout_ressource[]"
                                id="cost"
                                type="number"
                                class="form-control form-control-lg rounded-0"
                                placeholder="Cost"
                            />
                            <label for="cost"><?= lang("Text.Cost")?>*</label>
                        </div>
                    </div>

                    <div class="input-group custom col-md-4" >
                        <div class="form-floating">
                            <input
                                name="date_obtention[]"
                                id="date"
                                type="hidden"
                                value="<?= date('Y-m-d')?>"
                                class="form-control form-control-lg rounded-0"
                                placeholder=""
                            />
                            
                        </div>
                    </div>
                </div>

                

                <div class="form-group row">
                    <div class="input-group custom " >
                        <div class="form-floating">
                            <input
                                name="description_ressource[]"
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
            </div>
            
                    
            <div class="row d-flex justify-content-end">
                <div class="col-md-1 col-sm-2 offset-sm-3 offset-md-5 w-25">
                    <button class="btn border-light text-danger" style=" background-color: pink;" type="reset"><?= lang("Text.Cancel")?></button>
                </div>
                <div class="col-md-auto col-sm-2 w-50">
                    <input class="btn border-success bg-light text-success px-4" id="submit" value="Save" type="submit">
                </div>
            </div>
        </form> 
    </div>
</div>

<script>
    $(function(){
        $("#add").click(function(e){
            e.preventDefault();
            $(".addMore").prepend(`
                <div class="col-md-12 px-0"">
                    <div class="row">
                        <a class="col-md-2 offset-10 d-flex justify-content-end mb-3 text-danger d-flex align-items-center remove"><i class="fa fa-minus d-flex align-items-center"> </i>&nbsp <?= lang("Text.moins")?></a>
                    </div>
                    <div class="form-group row mt-2 mb-0">
                        <div class="input-group custom col-md-6 mb-0" >
                            <div class="form-floating">
                                <input
                                    name="libelle_ressource[]"
                                    id="label"
                                    type="text"
                                    class="form-control form-control-lg rounded-0"
                                    placeholder="Label"
                                />
                                <label for="label"><?= lang("Text.Label")?>*</label>
                            </div>
                        </div>

                        
                        <div class="input-group custom col-md-6 mb-0" >
                            <div class="form-floating">
                                <input
                                    name="quantite_ressources[]"
                                    id="quantite"
                                    type="number"
                                    class="form-control form-control-lg rounded-0"
                                    placeholder="<?= lang("Text.Quantity")?>"
                                />
                                <label for="quantite">Quantity*</label>
                            </div>
                        </div>

                        <div class="input-group custom col-md-6" >
                            <div class="form-floating">
                                <input
                                    name="type_ressource[]"
                                    id="type"
                                    type="hidden"
                                    class="form-control form-control-lg rounded-0"
                                    placeholder="Label"
                                    value="Treatment" readonly
                                />
                                
                            </div>
                        </div>
                        </div>

                        <div class="form-group row mb-0">

                            <div class="input-group custom col-md-6 mb-0" >
                                <div class="form-floating">
                                    <select class="form-select rounded-0" id="unit" name="unite_ressource[]" aria-label="State">
                                        <option selected hidden disabled></option>
                                        <option value="Litres">Litres</option>
                                    </select>
                                    
                                    <label for="<?= lang("Text.Units")?>">Unit*</label>
                                </div>
                            </div>
                            
                            <div class="input-group custom col-md-6 mb-0" >
                                <div class="form-floating">
                                    <input
                                        name="cout_ressource[]"
                                        id="cost"
                                        type="number"
                                        class="form-control form-control-lg rounded-0"
                                        placeholder="Cost"
                                    />
                                    <label for="cost"><?= lang("Text.Cost")?>*</label>
                                </div>
                            </div>

                            <div class="input-group custom col-md-4" >
                                <div class="form-floating">
                                    <input
                                        name="date_obtention[]"
                                        id="date"
                                        type="hidden"
                                        value="<?= date('Y-m-d')?>"
                                        class="form-control form-control-lg rounded-0"
                                        placeholder=""
                                    />
                                    
                                </div>
                            </div>
                        </div>

                        

                        <div class="form-group row">
                        <div class="input-group custom " >
                            <div class="form-floating">
                                <input
                                    name="description_ressource[]"
                                    id="description"
                                    type="text"
                                    class="form-control form-control-lg rounded-0"
                                    style="height: 100px;"
                                    placeholder="description"
                                />
                                <label for="description">Description*</label>
                            </div>
                            
                        </div>
                        <div class="row d-flex justify-content-center">
                            <hr class="bg-success h-25 w-75" >
                        </div>
                    </div>
                </div>
            `)
        });

        $(document).on('click', '.remove', function(e){
            e.preventDefault();
            let row_item = $(this).parent().parent();
            $(row_item).remove();
        });

        // requete ajax pour inserer tout les donnees du formulaire 
        // $("#addFood").submit(function(e){
        //     e.preventDefault();
        //     $("#submit").val('Saving...');
        //     $.ajax({
        //         url: "<?= site_url('insert_ressource')?>",
        //         methode: 'POST',
        //         data: $(this).serialize(),
        //         success: function(response){
        //             consol.log(response);
        //         }
        //     });
        // });
    })
</script>

<?= $this->include('layouts/footer.php');?>