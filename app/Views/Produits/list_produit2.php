<?= $this->include('layouts/header.php');?>

<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
                <div class="card-box mb-30">
    <div class="pd-20 d-flex justify-content-between">
        <h2 class="card-title text-blue my-1" style="font-size: 25px;">Harvest List</h2>

        <a href="<?= site_url('create_form_produit')?>" class="btn btn-success "><span class="mtext text-nowrap">New Yield</span></a>
    </div>
        
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                <th class="table-plus">#</th>
                    <th class="datatable-nosort">Label</th>
                    <th class="datatable-nosort">Quantity</th>
                    <th class="datatable-nosort">Produced By</th>
                    <th class="datatable-nosort">Harvest Date</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $i=1;
                foreach($produits as $keys => $produit){
            ?>
            <tr>
                <td class="table-plus"><?= $i++;?></td>
                <?php
                    if($produit['type_produit']=="Self"){
                ?>
                <td><?= $produit['type_produit']?></td>

                <?php
                    }
                    else{
                ?>
                <td><?= $produit['libelle_produit']?></td>

                <?php
                    }
                ?>
                <td><?= $produit['quantite_produit']?></td>
                <td><?= $produit['animal']?></td>
                <td><?= $produit['date_produit']?></td>
                <td class="d-flex">

                            <a href="<?= site_url('update_form_produit/').$produit['id_produit']?>"><i class="dw dw-edit mx-2 text-success"></i> | </a>

                            <a onclick="Validation(<?= $produit['id_produit']?>)" href="<?= site_url('delete_produit/').$produit['id_produit']?>"><i class="dw dw-delete-3 ml-2 text-danger"></i></a>
                        <!-- </div> -->
                    <!-- </div> -->
                </td>
                    <form action="<?= site_url('delete_produit')?>"  id="valider" method="put">
                            <div class="col-md-12">
                                <input class="form-control" type="hidden" name="id_produit" id="id" value="<?= $produit['id_produit']?>">
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