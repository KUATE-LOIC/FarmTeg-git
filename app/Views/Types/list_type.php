<?= $this->include('layouts/header.php');?>

<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
                <div class="card-box mb-30">
    <div class="py-3 pr-5 pl-4 d-flex justify-content-between">
        <h2 class="card-title text-blue my-1 mr-5" style="font-size: 25px;">Specie List</h2>



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
                    <span class="btn btn-success px-4 "><span class="mtext text-nowrap">New Specie</span></span>
                </a>
                <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="login-box bg-white box-shadow border-radius-10">
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
                                        <div class="col-md-1 col-sm-2 offset-sm-3 offset-md-5 w-25 ">
                                            <button class="btn  close" style="color: red; background-color: pink; padding: 12px 20px 12px 20px;" type="button" data-dismiss="modal" aria-hidden="true" type="reset">Cancel</button>
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
                    <th class="datatable-nosort">Name</th>
                    <th class="datatable-nosort">Description</th>
                    <th>Creation Date</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $i=1;
                foreach($types as $keys => $type){
            ?>
            <tr>
                <td class="table-plus"><?= $i++;?></td>
                <td><?= $type['nom_type']?></td>
                <td><?= $type['description_type']?></td>
                <td><?= $type['created_at']?></td>
                <td class="d-flex">
                    <!-- <div class="dropdown">
                        <a
                            class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                            href="#"
                            role="button"
                            data-toggle="dropdown"
                        >
                            <i class="dw dw-more"></i>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                        > -->
                            <!-- <a href="#"><i class="dw dw-eye mr-1"></i>|</a> -->

                            <a href="<?= site_url('update_form_type/').$type['id_type']?>"><i class="dw dw-edit mx-2 text-success"></i> | </a>

                            <a onclick="Validation(<?= $type['id_type']?>)" href="<?= site_url('delete_type/').$type['id_type']?>"><i class="dw dw-delete-3 ml-2 text-danger"></i></a>
                        <!-- </div> -->
                    <!-- </div> -->
                </td>
                    <form action="<?= site_url('delete_type')?>"  id="valider" method="put">
                            <div class="col-md-12">
                                <input class="form-control" type="hidden" name="id_type" id="id" value="<?= $type['id_type']?>">
                            </div>
                    </form>
            </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
    
</div>
</div>
</div>
</div>
<script>
    function Validation(i){
        var result = confirm('Voulez vous supprimer');

        if(result == true){
            document.querySelector('#id').value = i;
            document.querySelector('#valider').submit();
        }
    }
</script>

<?= $this->include('layouts/footer.php');?>