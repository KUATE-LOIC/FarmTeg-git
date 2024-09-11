<?= $this->include('layouts/header.php');?>

<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
                <div class="card-box mb-30">
    <div class="pd-20">
        <h2 class="card-title text-blue mb-0" style="font-size: 25px;">Employees List</h2>
    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus">#</th>
                    <th>Name</th>
                    <th>Telephone</th>
                    <th>Gender</th>
                    <th>ID Number</th>
                    <th>Email</th>
                    <th>Function</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $i=1;
                foreach($personnels as $keys => $personnel){
            ?>
            <tr>
                <td class="table-plus"><?= $i++;?></td>
                <td><?= $personnel['nom_personnel']?></td>
                <td><?= $personnel['telephone_personnel']?></td>
                <td><?= $personnel['sexe_personnel']?></td>
                <td><?= $personnel['cni_personnel']?></td>
                <td><?= $personnel['email_personnel']?></td>
                <td><?= $personnel['role_personnel']?></td>
                <td class="d-flex">
                    <a href="<?= site_url('update_form_personnel/').$personnel['id_personnel']?>"><i class="dw dw-edit mx-2 text-success"></i> | </a>

                    <a onclick="Validation(<?= $personnel['id_personnel']?>)" href="<?= site_url('delete_personnel/').$personnel['id_personnel']?>"><i class="dw dw-delete-3 ml-2 text-danger"></i></a>
                    
                </td>
                    <form action="<?= site_url('delete_personnel')?>"  id="valider" method="put">
                            <div class="col-md-12">
                                <input class="form-control" type="hidden" name="id_personnel" id="id" value="<?= $personnel['id_personnel']?>">
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