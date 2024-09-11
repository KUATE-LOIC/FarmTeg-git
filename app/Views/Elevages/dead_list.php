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
                                    <div class="form-group row mt-2">
                                        <div class="input-group custom mb-0" >
                                            <div class="form-floating">
                                                <select class="w-100 selectpicker" style="border-radius: 40px;" id="animal" name="animal" aria-label="State">
                                                    <option selected hidden disabled>Animal</option>
                                                    
                                                        <?php 
                                                            $i=1;
                                                            foreach($elevages as $keys => $elevage){
                                                        ?>
                                                            <option value="<?= $elevage['nom_elevage']; ?>" ><?= $elevage['nom_elevage']?></option>
                                                        <?php
                                                            }
                                                        ?>
                                                </select>
                                                <!-- <label for="animal">Animal</label> -->
                                            </div>
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
                                        
                                    <div class="row d-flex justify-content-end">
                                        <div class="col-md-1 col-sm-2 offset-sm-3 offset-md-5 w-25 ">
                                            <button class="btn close " style="color: red; background-color: pink; padding: 12px 20px 12px 20px;"  data-dismiss="modal" aria-hidden="true" type="reset">Cancel</button>
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
    </div>
        
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus">#</th>
                    <th class="datatable-nosort">Animal</th>
                    <th class="datatable-nosort">Quantity</th>
                    <th class="datatable-nosort">Date</th>
                    <!-- <th class="datatable-nosort">Action</th> -->
                </tr>
            </thead>
            <tbody>
            <?php 
                $i=1;
                foreach($produits as $keys => $produit){
            ?>
            <tr>
                <td class="table-plus"><?= $i++;?></td>
                <td><?= $produit['animal']?></td>
                <td><?= $produit['quantite_produit']?></td>
                <td><?= $produit['date_produit']?></td>
                
                    
            </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
    
</div>
</div>
</div>
</div>
<!-- <script>
    function Validation(i){
        var result = confirm('Voulez vous supprimer');

        if(result == true){
            document.querySelector('#id').value = i;
            document.querySelector('#valider').submit();
        }
    }
</script> -->

<?= $this->include('layouts/footer.php');?>