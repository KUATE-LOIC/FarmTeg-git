<?= $this->include('layouts/header.php');?>

<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
                <div class="card-box mb-30">
    <div class="pd-20 d-flex justify-content-between">
        <h2 class="card-title text-blue my-1" style="font-size: 25px;"><?= lang("Text.Ressources")?></h2>

        <!-- <a href="<?= site_url('show_form_ressource')?>" class="btn btn-success "><span class="mtext text-nowrap">Add Resource</span></a> -->
    </div>
        
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus">#</th>
                    <th><?= lang("Text.Label")?></th>
                    <th><?= lang("Text.Quantity")?></th>
                    <th class="datatable-nosort"><?= lang("Text.Ressource Type")?></th>
                    <th><?= lang("Text.Date")?></th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $i=1;
                foreach($ressources as $keys => $ressource){
            ?>
            <tr>
                <td class="table-plus"><?= $i++;?></td>
                <td><?= $ressource['libelle_ressource']?></td>
                <td><?= $ressource['quantite_ressources']." ".$ressource['unite_ressource']?></td>
                <td><?= $ressource['type_ressource']?></td>
                <td><?= $ressource['date_obtention']?></td>
                <td class="d-flex">

                            <a href="<?= site_url('update_form_ressource/').$ressource['id_ressource']?>"><i class="dw dw-edit mx-2 text-success"></i> | </a>

                            <a onclick="Validation(<?= $ressource['id_ressource']?>)" href="<?= site_url('delete_ressource/').$ressource['id_ressource']?>"><i class="dw dw-delete-3 ml-2 text-danger"></i></a>
                        <!-- </div> -->
                    <!-- </div> -->
                </td>
                    <form action="<?= site_url('delete_ressource')?>"  id="valider" method="put">
                            <div class="col-md-12">
                                <input class="form-control" type="hidden" name="id_ressource" id="id" value="<?= $ressource['id_ressource']?>">
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