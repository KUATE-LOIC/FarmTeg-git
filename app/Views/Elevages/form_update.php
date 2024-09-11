
<?= $this->include('layouts/header.php');?>

<div class="main-container ">
            <div class="pd-20 card-box mb-30">
                <form action="<?= site_url('edit_elevage')?>" method="put">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-start mb-3 h3 text-success" style="font-size: 25px;">New Animal Band</div>
                    </div>

                    <div class="form-group row mt-2 mb-0">
                        <div class="input-group custom " >
                            <div class="form-floating">
                                <select class="form-select rounded-0" id="type" aria-label="State" name="type">
                                    <option value="<?=$data3['id_type']?>" selected hidden><?= $data3['nom_type']?></option>
                                    <?php 
                                        $i=1;
                                        foreach($data2 as $keys => $type){
                                    ?>
                                    
                                    <option value="<?= $type['id_type']; ?>" ><?= $type['nom_type']?></option>
                                        <?php
                                            }
                                        ?>
                                </select>
                                <label for="type">Specie*</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group row mb-0">
                        <div class="input-group custom " >
                            <div class="form-floating">
                            <input
                                    name="id_elevage"
                                    id="name"
                                    type="hidden"
                                    class="form-control form-control-lg rounded-0"
                                    value="<?= $data1['id_elevage']?>"
                                />
                                <input
                                    name="nom_elevage"
                                    id="name"
                                    type="text"
                                    class="form-control form-control-lg rounded-0"
                                    placeholder="Name*"
                                    value="<?= $data1['nom_elevage']?>"
                                />
                                <label for="name">Name*</label>
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
                                    value="<?= $data1['date_obtention']?>"
                                />
                                <label for="date">Date*</label>
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
                                    value="<?= $data1['qte_initial']?>"
                                />
                                <label for="qty">Quantity*</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="input-group custom " >
                        <div class="form-floating">
                            <input
                                name="description_elevage"
                                id="description"
                                class="form-control form-control-lg rounded-0"
                                placeholder="Description*"
                                style="height: 100px;"
                                value="<?= $data1['description_elevage']?>"
                            >
                            <label for="description">Description*</label>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
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