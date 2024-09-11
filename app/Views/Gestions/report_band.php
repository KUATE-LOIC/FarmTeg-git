<?= $this->include('layouts/header.php');?>

    <div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
                <div class="card-box mb-30 px-3">
                    <div class="py-3 d-flex justify-content-between align-items-center">
                        <h2 class="card-title text-blue my-1 mr-5" style="font-size: 25px;">New Report</h2>
                        <span>
                            <!-- <a href="" class="btn-info rounded-2 py-2 px-2"><i class="icon-copy fa fa-pencil-square-o mr-2" aria-hidden="true"></i>Edit</a> -->
                            <a href="reportsPdf" class="btn-success rounded-2 py-2 px-2"><i class="icon-copy fa fa-download mr-2" aria-hidden="true"> </i>Download</a>
                        </span>
                    </div>

                    <script>
                        $(function(){
                            $(".table-responsive").hide();
                        })
                    </script>

                    <?php
                    // Convertir le tableau PHP en JSON pour l'utiliser en JavaScript
                    $jsonRef = json_encode($ref);
                    ?>

                    <script>
                        $(function() {
                            // cacher les tableaux
                            $(".table-responsive").hide();
                            // Récupérer les valeurs PHP en JavaScript
                            var reports = <?= $jsonRef; ?>;

                            // Itérer sur les éléments avec un id
                            $("[id]").each(function() {
                                var ids = $(this).attr('id');

                                // Vérifier si l'id est dans le tableau reports
                                if (reports.includes(ids)) {
                                    $("#" + ids).show(); // Afficher le(s) tableau(x)
                                }
                            });
                        });
                    </script>

                    <!-- band table start -->
                    <div class="table-responsive" id="Band">
                        <label for="">Band :</label>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Band Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Initially</th>
                                    <th scope="col">Losses</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; foreach($band as $key => $bands){?>
                                <tr>
                                    <th scope="row"><?= $i++;?></th>
                                    <td><?= $bands['nom_elevage']?></td>
                                    <td><?= $bands['date_obtention']?></td>
                                    <td><?= $bands['qte_initial']?></td>
                                    <td><?= $bands['qte_initial'] - $bands['quantite']?></td>
                                    <td><?= $bands['quantite']?></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <!-- band table end -->
    
                    <!-- death table start -->
                    <div class="table-responsive" id="Deaths">
                        <label for="">Deaths :</label>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Animal Band</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; foreach($death as $key => $deaths){?>
                                <tr>
                                    <th scope="row"><?= $i++;?></th>
                                    <td><?= $deaths['animal']?></td>
                                    <td><?= $deaths['quantite_produit']?></td>
                                    <td><?= $deaths['date_produit']?></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <!-- death table end -->

                    <!-- food table start -->
                    <div class="table-responsive" id="Food">
                        <label for="">Food :</label>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Label</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Cost</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; foreach($food as $key => $foods){?>
                                    <tr>
                                        <th scope="row"><?= $i++;?></th>
                                        <td><?= $foods['libelle_ressource']?></td>
                                        <td><?= $foods['quantite_ressources']." ".$foods['unite_ressource']?></td>
                                        <td><?= $foods['cout_ressource']?></td>
                                        <td><?= $foods['date_obtention']?></td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <!-- food table end -->

                    <!-- treat table start -->
                    <div class="table-responsive" id="Treat">
                        <label for="">Treat :</label>
                        <table class="table table-striped table-bordered">
                        <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Label</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Cost</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; foreach($treat as $key => $treats){?>
                                    <tr>
                                        <th scope="row"><?= $i++;?></th>
                                        <td><?= $treats['libelle_ressource']?></td>
                                        <td><?= $treats['quantite_ressources']." ".$treats['unite_ressource']?></td>
                                        <td><?= $treats['cout_ressource']?></td>
                                        <td><?= $treats['date_obtention']?></td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <!-- treat table end -->

                    <!-- yeild table start -->
                    <div class="table-responsive" id="Yields">
                        <label for=""> Yields:</label>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Animal Band</th>
                                    <th scope="col">label</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; foreach($yield as $key => $yields){?>
                                    <tr>
                                        <th scope="row"><?= $i++;?></th>
                                        <td><?= $yields['animal']?></td>
                                        <td><?= $yields['libelle_produit']?></td>
                                        <td><?= $yields['quantite_produit']?></td>
                                        <td><?= $yields['date_produit']?></td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <!-- yeild table end -->

                    <!-- sale table start -->
                    <div class="table-responsive" id="Sales">
                        <label for="">Sales :</label>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Label</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Client Name</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; foreach($sale as $key => $sales){?>
                                    <tr>
                                        <th scope="row"><?= $i++;?></th>
                                        <td><?= $sales['libelle_produit']?></td>
                                        <td><?= $sales['quantite_produit']?></td>
                                        <td><?= $sales['montant']?></td>
                                        <td><?= $sales['nom_client']?></td>
                                        <td><?= $sales['date_produit']?></td>
                                        </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <!-- sale table end -->
                    
                </div>
            </div>
        </div>
    </div>

    

    

<?= $this->include('layouts/footer.php');?>