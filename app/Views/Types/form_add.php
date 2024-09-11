<!-- 
<?= $this->include('layouts/header.php');?>

    <div class="main-container ">
        <div class="pd-20 card-box mb-30">
            <form action="<?= site_url('insert_type')?>" method="post">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-start mb-3 h3 text-success" style="font-size: 25px;">New Specie</div>
                </div>
                <div class="form-group row mt-2">
                    <div class="input-group custom " >
                        <div class="form-floating">
                            <input
                                name="nom_type"
                                id="name"
                                type="text"
                                class="form-control form-control-lg rounded-0"
                                placeholder="Name"
                            />
                            <label for="name">Name*</label>
                        </div>
                    </div>
                </div>
                    
                <div class="form-group row mt-2">
                    <div class="input-group custom " >
                        <div class="form-floating">
                            <textarea
                                name="description_type"
                                id="description"
                                class="form-control form-control-lg rounded-0"
                                placeholder="Description*"
                                style="height: 100px;"
                            ></textarea>
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
<?= $this->include('layouts/footer.php');?> -->