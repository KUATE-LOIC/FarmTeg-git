<?= $this->include('layouts/header.php');?>

<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
                <div class="card-box mb-30">
    <div class="pd-20 d-flex justify-content-between">
        <h2 class="card-title text-blue my-1" style="font-size: 25px;">Stock</h2>

        <a href="<?= site_url('create_form_mouvement')?>" class="btn btn-success "><span class="mtext text-nowrap">Change</span></a>
    </div>
        
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                <th class="table-plus">#</th>
                    <th class="datatable-nosort">Label</th>
                    <th class="datatable-nosort">Product Type</th>
                    <th class="datatable-nosort">Quantity</th>
                    <th class="datatable-nosort">Add Date</th>
                    <th class="datatable-nosort">Action</th>
                    <!-- <th class="datatable-nosort">Action</th>/ -->
                </tr>
            </thead>
            <tbody>
            <?php 
                $i=1;
                foreach($mouvements as $keys => $mouvement){
            ?>
            <tr>
                <td class="table-plus"><?= $i++;?></td>
                <td><?= $mouvement['nom_mouvement']?></td>
                <td><?= $mouvement['type_produit']?></td>
                <td><?= $mouvement['qte_mouvement']?></td>
                <td><?= $mouvement['date_mouvement']?></td>
                <td class="d-flex">
                    <a href="<?= site_url('update_form_mouvement/').$mouvement['id_mouvement']?>"><i class="dw dw-edit mx-2 text-success"></i> | </a>

                    <a onclick="Validation(<?= $mouvement['id_mouvement']?>)" href="<?= site_url('delete_mouvement/').$mouvement['id_mouvement']?>"><i class="dw dw-delete-3 ml-2 text-danger"></i></a>
                    
                </td>
                
                    <form action="<?= site_url('delete_mouvement')?>"  id="valider" method="put">
                            <div class="col-md-12">
                                <input class="form-control" type="hidden" name="id_mouvement" id="id" value="<?= $mouvement['id_mouvement']?>">
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