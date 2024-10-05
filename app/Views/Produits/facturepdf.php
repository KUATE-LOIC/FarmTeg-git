<!DOCTYPE html>
<html lang="en">
<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>FARMTEG</title>
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

		
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
                padding-left: 100px;
                padding-right: 100px;
            }
            thead {
                background-color: rgba(110, 233, 124, 0.7);
            }

            /* En-tête */
            

            .informations p span{
                display: flex;
                justify-content: start;
            }

            .row, .rows {
                color: rgb(27, 106, 57);
                /* padding-left: 150px;
                padding-right: 150px; */
            }
            .row span{

                /* justify-content: space-between; */
                padding-left: px;
                padding-right: 470px;
                padding-top: 30px;
            }

            /* Tableau */
            table {
                width: 100%;
                border-collapse: collapse;
            }

            th, td {
                border: 1px solid black;
                padding: 10px;
                text-align: center;
            }

            /* Pied de page */
            footer span{

                /* justify-content: space-between; */
                padding-left: 75px;
                padding-right: 75px;
                padding-top: 30px;
                font-weight: bold;
                
            }
            footer{

                /* justify-content: space-between; */
                padding-left: 50px;
                /* padding-right: 75px; */
                padding-top: 30px;
            }
            img {
                width: 15%;
                height: 15%;
            }

        </style>
	</head>
    <body>
        <header>
            <div class="row">
                <span style="font-size: xx-large; font-weight: bold;">FACTURE</span>
                <span style="font-size: xx-large; font-weight: bolder;"><a style="color: rgba(6, 94, 6, 0.884);">FARM</a><a style="color: rgb(38, 183, 77);">TEG</a></span>

            </div>
            <div class="informations">
                <p>
                    <span>FACTURE N° : FR-<?=date('dh-is')?><br></span>
                    <span>DATE : <?=date('Y/m/d')?><br></span>
                    <span>COMMANDE N° : <?=date('ih-dsi')?><br></span>
                </p>
                
            </div>
        </header>

        <table>
            <thead>
                <tr>
                    <th scope="col">QTEs</th>
                    <th scope="col">PRODUITS</th>
                    <th scope="col">UNITE</th>
                    <th scope="col">PRIX U.</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody style="margin-bottom: 10px;">
                <tr>
                    <td><?= $quantite_produit?></td>
                    <td><?= $libelle_produit?></td>
                    <td><?= $unite_mouvement?></td>
                    <td><?= $prix_unitaire?></td>
                    <td><?= $montant?></td>
                </tr>
            </tbody>
            <tfoot style="margin-top: 10px;">
                <tr style="margin-top: 10px;">
                    <td colspan="4" ><h2 style="margin-top: 0px; margin-bottom: 0px;">TOTAL</h2></td>
                    <td><h2 style="margin-top: 0px; margin-bottom: 0px;"><?= $montant?></h2></td>
                </tr>
            </tfoot>
        </table>

        <footer class="rows">
            <span>SIGNATURE DU CLIENT</span>
            <span>SIGNATURE DU RESPONSABLE</span>
        </footer>
    </body>
</html>