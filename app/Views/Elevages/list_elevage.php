<?= $this->include('layouts/header.php');?>

<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
                <div class="card-box mb-30">
    <div class="pd-20 d-flex justify-content-between">
        <h2 class="card-title text-blue my-1 mr-5" style="font-size: 25px;"><?= lang("Text.Breed List")?>
        </h2>

        <a href="<?= site_url('create_form_elevage')?>" class="btn btn-success px-4 "><span class="mtext text-nowrap"><?= lang("Text.New Band")?>
        </span></a>
    </div>
        
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus">#</th>
                    <th><?= lang("Text.Name")?></th>
                    <th>type </th>
                    <th><?= lang("Text.Quantity")?>
                    </th>
                    <!-- <th>Description</th> -->
                    <th>Date</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $i=1;
                foreach($elevages as $keys => $elevage){
                    
            ?>
            <tr>
                <td class="table-plus"><?= $i++;?></td>
                <td><?= $elevage['nom_elevage']?></td>
                <td><?= $elevage['type']?></td>
                <td><?= $elevage['qte_initial']?></td>
                <td><?= $elevage['date_obtention']?></td>
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

                            <a href="<?= site_url('update_form_elevage/').$elevage['id_elevage']?>"><i class="dw dw-edit mx-2 text-success"></i> | </a>

                            <a onclick="Validation(<?= $elevage['id_elevage']?>)" href="<?= site_url('delete_elevage/').$elevage['id_elevage']?>"><i class="dw dw-delete-3 ml-2 text-danger"></i></a>
                        <!-- </div> -->
                    <!-- </div> -->
                </td>
                    <form action="<?= site_url('delete_elevage')?>"  id="valider" method="put">
                            <div class="col-md-12">
                                <input class="form-control" type="hidden" name="id_elevage" id="id" value="<?= $elevage['id_elevage']?>">
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