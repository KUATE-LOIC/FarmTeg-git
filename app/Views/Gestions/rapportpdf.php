<!DOCTYPE html>
<html lang="en">
<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>FARMTEG</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="<?= base_url('assets/vendors/images/apple-touch-icon.png')?>"
		/>
		<link href="<?= base_url('assets/niceadmin/vendor/remixicon/remixicon.css" rel="stylesheet')?>">

		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="<?= base_url('assets/vendors/images/favicon-32x32.png')?>"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="<?= base_url('assets/vendors/images/favicon-16x16.png')?>"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>

		<link href="<?= base_url('assets/niceadmin/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/styles/core.css')?>" />
		<link rel="stylesheet" href="<?= base_url('assets/vendor/fonts/css/all.min.css')?>">

		<link
			rel="stylesheet"
			type="text/css"
			href="<?= base_url('assets/vendors/styles/icon-font.min.css')?>"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="<?= base_url('assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css')?>"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="<?= base_url('assets/src/plugins/datatables/css/responsive.bootstrap4.min.css')?>"
		/>
		<script src="<?= base_url('assets/vendor/js/jquery.min.js')?>"></script>
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/styles/style.css')?>" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
        <style>
            table{
                border-collapse: collapse;
                width: 100%;
            }
            td, th{
                border: 1px solid black;
                padding: 8px;
            }
            th{
                background-color: lightgray;
            }
        </style>
	</head>
<body>
    <div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
                <div class="card-box mb-30 px-3">
                    <div class="py-3 d-flex justify-content-between align-items-center">
                        <h2 class="card-title text-blue my-1 mr-5" style="font-size: 25px;">New Report</h2>
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
                    <!-- <script>
                        $(function(){
                            $("#Band").remove();
                        })
                    </script> -->

                    <!-- band table start -->
                    <?php 
                        foreach($ref as $key => $refs){
                    
                        if ($refs=='Band'){ 
                        
                    ?>
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
                    <?php }}?>
                    <!-- band table end -->
    
                    <!-- death table start -->
                    <?php 
                        foreach($ref as $key => $refs){
                    
                        if ($refs=='Deaths'){ 
                        
                    ?>
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
                    <?php }}?>
                    <!-- death table end -->

                    <!-- food table start -->
                    <?php 
                        foreach($ref as $key => $refs){
                    
                        if ($refs=='Food'){ 
                        
                    ?>
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
                    <?php }}?>
                    <!-- food table end -->

                    <!-- treat table start -->
                    <?php 
                        foreach($ref as $key => $refs){
                    
                        if ($refs=='Treat'){ 
                        
                    ?>
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
                    <?php }}?>
                    <!-- treat table end -->

                    <!-- yeild table start -->
                    <?php 
                        foreach($ref as $key => $refs){
                    
                        if ($refs=='Yields'){ 
                        
                    ?>
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
                    <?php }}?>
                    <!-- yeild table end -->

                    <!-- sale table start -->
                    <?php 
                        foreach($ref as $key => $refs){
                    
                        if ($refs=='Sales'){ 
                        
                    ?>
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
                    <?php }}?>
                    <!-- sale table end -->
                    
                </div>
            </div>
        </div>
    </div>

</body>
</html>