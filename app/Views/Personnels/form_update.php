
<?= $this->include('layouts/header.php');?>

<div class="main-container ">
            <div class="pd-20 card-box mb-30">
                <form action="<?= site_url('edit_personnel')?>" method="put">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-start my-3 h3 text-success" style="font-size: 25px;"><?= lang("Text.Update An Employee")?></div>
                    </div>
                <div class="form-group row mt-2">
                    <input
                        class="form-control"
                        type="hidden"
                        name="id_personnel"
                        value="<?= $personnels['id_personnel']?>"
                    />

                    <div class="input-group custom " >
                        <div class="form-floating">
                            <input
                                name="nom_personnel"
                                id="name"
                                type="text"
                                class="form-control form-control-lg rounded-0"
                                placeholder="Full Name"
                                value="<?= $personnels['nom_personnel']?>"
                            />
                            <label for="name"><?= lang("Text.full")?>
                            *</label>
                        </div>
                    </div>
                    <div class="input-group custom " >
                        <div class="form-floating">
                            <input
                                name="telephone_personnel"
                                id="tel"
                                type="tel"
                                class="form-control form-control-lg rounded-0"
                                placeholder="Telephone*"
                                value="<?= $personnels['telephone_personnel']?>"
                            />
                            <label for="tel">Telephone*</label>
                        </div>
                    </div>

                    <div class="input-group custom " >
                        <div class="form-floating">
                            <input
                                name="cni_personnel"
                                id="cni"
                                type="number"
                                class="form-control form-control-lg rounded-0"
                                placeholder="ID Number*"
                                value="<?= $personnels['cni_personnel']?>"
                            />
                            <label for="cni"><?= lang("Text.ID Number")?>*</label>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">

                        <label class="col-sm-4 col-md-1 col-form-label"><?= lang("Text.Gender")?>*</label>
                        <div class="col-sm-8 col-md-3">
                            <div class="custom-control custom-radio custom-control-inline pb-0">
                                <input type="radio" id="male" value="male" name="sexe_personnel" class="custom-control-input"/>
                                <label class="custom-control-label" for="male"><?= lang("Text.male")?>
                                </label>
                            </div>

                            <div class="custom-control custom-radio custom-control-inline pb-0">
                                <input type="radio" id="female" value="female" name="sexe_personnel" class="custom-control-input"/>
                                <label class="custom-control-label" for="female"><?= lang("Text.fille")?>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group custom " >
                        <div class="form-floating">
                            <input
                                name="role_personnel"
                                id="function"
                                value="<?= $personnels['role_personnel']?>"
                                type="text"
                                class="form-control form-control-lg rounded-0"
                                placeholder="Function*"
                            />
                            <label for="function">Function*</label>
                        </div>
                    </div>

                    <div class="input-group custom " >
                        <div class="form-floating">
                            <input
                                name="email_personnel"
                                id="email"
                                type="email"
                                class="form-control form-control-lg rounded-0"
                                placeholder="Email*"
                                value="<?= $personnels['email_personnel']?>"
                            />
                            <label for="email">Email*</label>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-md-1 col-sm-2 offset-sm-3 offset-md-5 w-25">
                            <button class="btn border-danger bg-light text-danger" type="reset"><?= lang("Text.Cancel")?>
                            </button>
                        </div>
                        <div class="col-md-auto col-sm-2 w-50">
                            <button class="btn border-success bg-light text-success" type="submit"><?= lang("Text.Update")?>
                            </button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
<?= $this->include('layouts/footer.php');?>