<?= $this->include('layouts/header.php');?>

<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
                <div class="card-box mb-30">
    <div class="pd-20 d-flex justify-content-between">
        <h2 class="card-title text-blue my-1" style="font-size: 25px;"><?= lang("Text.Sales List")?>
        </h2>
        <a href="<?= site_url('create_form_sell')?>" class="btn btn-success "><span class="mtext text-nowrap"><?= lang("Text.New Sale")?>
        </span></a>
    </div>
        
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                <th class="table-plus">#</th>
                    <th class="datatable-nosort"><?= lang("Text.Label")?>
                    </th>
                    <th class="datatable-nosort"><?= lang("Text.Quantity")?>
                    </th>
                    <th class="datatable-nosort"><?= lang("Text.Date")?>
                    </th>
                    <th class="datatable-nosort"><?= lang("Text.Total Price")?>
                    </th>
                    <th class="datatable-nosort"><?= lang("Text.Client Name")?>
                    </th>
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
                <td><?= $produit['libelle_produit']?></td>
                <td><?= $produit['quantite_produit']." ".$produit['unite_mouvement']?></td>
                <td><?= $produit['date_produit']?></td>
                <td><?= $produit['montant']?></td>
                <td><?= $produit['nom_client']?></td>
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