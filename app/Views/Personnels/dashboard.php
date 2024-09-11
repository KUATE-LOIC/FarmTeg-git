	<?= $this->include('layouts/header.php');?>

		<div class="main-container">
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="title pb-20">
					<h2 class="h3 mb-0">Hospital Overview</h2>
				</div>

				<div class="row pb-10">
					<div class="col-xl-4 col-lg-4 col-md-12 mb-20">
						<div class="card-box min-height-200px pd-20" data-bgcolor="#265ed7">
							<div class="d-flex justify-content-between pb-20 text-white">
								<div class="icon h1 text-white">
									<i class="fa fa-stethoscope" aria-hidden="true"></i>
								</div>
								<div class="font-14 text-right">
									<div class="font-12">Since last month</div>
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-end">
								<div class="text-white">
									<div class="font-20 h3 text-white">Band Number</div>
									<div class="font-24 weight-500">250</div>
								</div>
								<div class="max-width-150">
									<div id="surgery-chart"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-12 mb-20">
						<div class="card-box min-height-200px pd-20" data-bgcolor="#03AC13">
							<div class="d-flex justify-content-between pb-20 text-white">
								<div class="icon h1 text-white">
									<i class="fa fa-stethoscope" aria-hidden="true"></i>
								</div>
								<div class="font-14 text-right">
									<div class="font-12">Since last month</div>
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-end">
								<div class="text-white">
									<div class="font-20 h3 text-white">Surgery</div>
									<div class="font-24 weight-500">250</div>
								</div>
								<div class="max-width-150">
									<div id="appointment-chart"></div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-xl-4 col-lg-4 col-md-12 mb-20">
						<div class="card-box min-height-200px pd-20" data-bgcolor="red">
							<div class="d-flex justify-content-between pb-20 text-white">
								<div class="icon h1 text-white">
									<i class="fa fa-trash" aria-hidden="true"></i>
								</div>
								<div class="font-14 text-right">
									<div><i class="icon-copy ion-arrow-down-c"></i> 3.69%</div>
									<div class="font-12">Since last month</div>
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-end">
								<div class="text-white">
									<div class="font-20 h3 text-white">Death</div>
									<div class="font-24 weight-500">250</div>
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
						<div class="card-box height-100-p pd-20">
							<div
								class="d-flex flex-wrap justify-content-between align-items-center pb-0 pb-md-3"
							>
								<div class="h5 mb-md-0">Hospital Activities</div>
								<div class="form-group mb-md-0">
									<select class="form-control form-control-sm selectpicker">
										<option value="">Last Week</option>
										<option value="">Last Month</option>
										<option value="">Last 6 Month</option>
										<option value="">Last 1 year</option>
									</select>
								</div>
							</div>
							<div id="activities-chart"></div>
						</div>
					</div>
					<!-- <div class="col-md-4 mb-20">
						<div class="card-box min-height-200px pd-20 mb-20" data-bgcolor="#455a64">
							<div class="d-flex justify-content-between pb-20 text-white">
								<div class="icon h1 text-white">
									<i class="fa fa-calendar" aria-hidden="true"></i>
								</div>
								<div class="font-14 text-right">
									<div><i class="icon-copy ion-arrow-up-c"></i> 2.69%</div>
									<div class="font-12">Since last month</div>
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-end">
								<div class="text-white">
									<div class="font-14">Employees</div>
									<div class="font-24 weight-500">1865</div>
								</div>
								<div class="max-width-150">
									<div id="appointment-chart"></div>
								</div>
							</div>
						</div>
					</div> -->
					<div class="col-xl-4 col-lg-4 col-md-12 mb-20">
						<div class="card-box min-height-200px pd-20 shadow" data-bgcolor="#455a64">
							<div class="d-flex justify-content-between pb-20 text-white">
								<div class="icon h1 text-white">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								
							</div>
							<div class="d-flex justify-content-between align-items-end">
								<div class="text-white">
									<div class="font-20 h3 text-white">Employees</div>
									<div class="font-24 weight-500">5</div>
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