	<?= $this->include('layouts/header.php');?>

		<div class="main-container">
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="title pb-20">
					<h2 class="h3 mb-0"><?= lang("Text.Farm Look")?>
					</h2>
				</div>

				<div class="row pb-10">
					<div class="col-xl-4 col-lg-4 col-md-12 mb-20">
						<div class="card-box min-height-200px pd-20" data-bgcolor="#265ed7">
							<div class="d-flex justify-content-between pb-20 text-white">
								<div class="icon h1 text-white">
									<i class="micon icon-copy dw dw-fish" aria-hidden="true"></i>
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-end">
								<div class="text-white">
									<div class="font-20 h3 text-white"><?= lang("Text.Band Number")?>
									</div>
									<div class="font-24 weight-500"><?= $numBan['nbr']?></div>
								</div>
								<div class="max-width-150">
									<div id="surgery-chart"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-12 mb-20">
						<div class="card-box min-height-200px pd-20 shadow" data-bgcolor="#03AC13">
							<div class="d-flex justify-content-between pb-20 text-white">
								<div class="icon h1 text-white">
									<i class="fa fa-cart-plus" aria-hidden="true"></i>
								</div>
								
							</div>
							<div class="d-flex justify-content-between align-items-end">
								<div class="text-white">
									<div class="font-20 h3 text-white"><?= lang("Text.Sales")?></div>
									<div class="font-24 weight-500"><?= $nbrSale['sales']?></div>
								</div>
								<div class="max-width-150  d-flex justify-content-end">
									<img class="w-50" src="<?= base_url('assets/icons/sales.svg')?>">
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="col-xl-4 col-lg-4 col-md-12 mb-20">
						<div class="card-box min-height-200px pd-20" data-bgcolor="red">
							<div class="d-flex justify-content-between pb-20 text-white">
								<div class="icon h1 text-white">
									<i class="micon icon-copy fi-skull" aria-hidden="true"></i>
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-end">
								<div class="text-white">
									<div class="font-20 h3 text-white"><?= lang("Text.Deaths")?></div>
									<div class="font-24 weight-500"><?= $morts['mort']?></div>
								</div>
									<div class="max-width-150  d-flex justify-content-end">
										<img class="w-75" src="<?= base_url('assets/icons/clients.svg')?>">
									</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row pb-10">
					<div class="col-md-8 mb-20">
						
							<div class="card">
								<div class="card-body">
								<h5 class="card-title"><?= lang("Text.Bands Production")?>
								</h5>

								<!-- Bar Chart -->
								<canvas id="barChart" style="max-height: 400px;"></canvas>
								<script>
									document.addEventListener("DOMContentLoaded", () => {
									new Chart(document.querySelector('#barChart'), {
										type: 'bar',
										data: {
										labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
										datasets: [{
											label: 'Bar Chart',
											data: [65, 59, 80, 81, 56, 55, 40],
											backgroundColor: [
											'rgba(255, 99, 132, 0.2)',
											'rgba(255, 159, 64, 0.2)',
											'rgba(255, 205, 86, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(54, 162, 235, 0.2)',
											'rgba(153, 102, 255, 0.2)',
											'rgba(201, 203, 207, 0.2)'
											],
											borderColor: [
											'rgb(255, 99, 132)',
											'rgb(255, 159, 64)',
											'rgb(255, 205, 86)',
											'rgb(75, 192, 192)',
											'rgb(54, 162, 235)',
											'rgb(153, 102, 255)',
											'rgb(201, 203, 207)'
											],
											borderWidth: 1
										}]
										},
										options: {
										scales: {
											y: {
											beginAtZero: true
											}
										}
										}
									});
									});
								</script>
								<!-- End Bar CHart -->

								</div>
							</div>
						
					</div>
					
					<div class="col-xl-4 col-lg-4 col-md-12 mb-20">
						<div class="card-box min-height-200px pd-20 shadow" data-bgcolor="#455a64">
							<div class="d-flex justify-content-between pb-20 text-white">
								<div class="icon h1 text-white">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								
							</div>
							<div class="d-flex justify-content-between align-items-end">
								<div class="text-white">
									<div class="font-20 h3 text-white"><?= lang("Text.Employees")?>
									</div>
									<div class="font-24 weight-500"><?= $pers['pers']?></div>
								</div>
								<div class="max-width-150  d-flex justify-content-end">
									<img class="w-75" src="<?= base_url('assets/icons/clients.svg')?>">
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>

	<?= $this->include('layouts/footer.php');?>