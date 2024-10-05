
<?= $this->include('layouts/header.php');?>

<div class="main-container ">
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-3 col-lg-3">
					<!-- <img src="<?= base_url('assets/vendors/images/register-page-img.png')?>" alt="" /> -->
				</div>
				<div class="col-md-12 col-lg-12">
					<div class=" bg-white box-shadow border-radius-10">
						<div class="wizard-content">
							<form class="tab-wizard2 wizard-circle wizard" id="register" action="<?= site_url('insert_personnel')?>" method="post">

							<!-- Step 1 -->
							<h5><?= lang("Text.infos")?>
							</h5>
								<section>
									<div class="form-wrap  mx-auto">
										<div class="input-group custom " >
											<div class="form-floating">
												<input
													name="nom_personnel"
													id="name"
													type="text"
													class="form-control form-control-lg rounded-0"
													placeholder="Full Name"
												/>
												<label for="name"><?= lang("Text.full")?>
												*</label>
											</div>
										</div>
										<div class="form-group row align-items-center">

											<label class="col-md-2 col-form-label pl-4"><?= lang("Text.Gender")?>*</label>
											<div class="col-md-4">
												<div class="custom-control custom-radio custom-control-inline pb-0">
													<input type="radio" id="male" value="male" name="sexe_personnel" class="custom-control-input"/>
													<label class="custom-control-label" for="male"><?= lang("Text.male")?>
													</label>
												</div>

												<div class="custom-control custom-radio custom-control-inline pb-0">
													<input type="radio" id="female" value="female" name="sexe_personnel" class="custom-control-input"/>
													<label class="custom-control-label" for="female"><?= lang("Text.fille")?>
													</label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="input-group custom col-md-6" >
												<div class="form-floating">
													<input
														name="telephone_personnel"
														id="tel"
														type="tel"
														class="form-control form-control-lg rounded-0"
														placeholder="Telephone*"
													/>
													<label for="tel">Telephone*</label>
												</div>
											</div>

											<div class="input-group custom col-md-6" >
												<div class="form-floating">
													<input
														name="cni_personnel"
														id="cni"
														type="number"
														class="form-control form-control-lg rounded-0"
														placeholder="ID Number*"
													/>
													<label for="cni"><?= lang("Text.ID Number")?>*</label>
												</div>
											</div>
										</div>
										
										
									</div>
								</section>

								<!-- Step 2 -->
								<h5><?= lang("Text.basic")?>
								</h5>
								<section>
									<div class="form-wrap  mx-auto">
										
										<div class="row">
											<div class="input-group custom col-md-6" >
												<div class="form-floating">
													<input
														name="role_personnel"
														id="function"
														value="Admin"
														type="text"
														class="form-control form-control-lg rounded-0"
														placeholder="Function*"
													/>
													<label for="function">Function*</label>
												</div>
											</div>
											<div class="input-group custom col-md-6" >
												<div class="form-floating">
													<input
														name="email_personnel"
														id="email"
														type="email"
														class="form-control form-control-lg rounded-0"
														placeholder="Email*"
													/>
													<label for="email">Email*</label>
												</div>
											</div>
										</div>

										<div class="input-group custom " >
											<div class="form-floating">
												<input
													name="mot_de_passe"
													id="password"
													type="password"
													class="form-control form-control-lg rounded-0"
													placeholder="Password*"
												/>
												<label for="password"><?= lang("Text.mdp")?>
												*</label>
											</div>
										</div>
										<div class="input-group custom " >
											<div class="form-floating">
												<input
													name="confirm"
													id="confirm"
													type="password"
													class="form-control form-control-lg rounded-0"
													placeholder="Confirm Password*"
												/>
												<label for="password"><?= lang("Text.confirm")?>
												*</label>
											</div>
										</div>
										
									</div>
								</section>

								<!-- Step 3 -->
								<h5><?= lang("Text.overview")?>
								</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<ul class="register-info">
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600"><?= lang("Text.full")?>
													</div>
													<div class="col-sm-8" id="oname"></div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Telephone</div>
													<div class="col-sm-8" id="otel"></div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600"><?= lang("Text.ID Number")?></div>
													<div class="col-sm-8" id="oid"></div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Function</div>
													<div class="col-sm-8" id="ofunc"></div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600"><?= lang("Text.adress")?>
													</div>
													<div class="col-sm-8" id="oemail"></div>
												</div>
											</li>
										</ul>
										<div class="custom-control custom-checkbox mt-4">
											<input
												type="checkbox"
												class="custom-control-input"
												id="customCheck1" 
											/>
											<label class="custom-control-label" for="customCheck1"
												><?= lang("Text.approve")?>
												</label
											>
										</div>
									</div>
								</section>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<!-- success Popup html Start -->
	<button
		type="button"
		id="success-modal-btn"
		hidden
		data-toggle="modal"
		data-target="#success-modal"
		data-backdrop="static"
	>
		Launch modal
	</button>
	<div
		class="modal fade"
		id="success-modal"
		tabindex="-1"
		role="dialog"
		aria-labelledby="exampleModalCenterTitle"
		aria-hidden="true"
	>
		<div
			class="modal-dialog modal-dialog-centered max-width-400"
			role="document"
		>
			<div class="modal-content">
				<div class="modal-body text-center font-18">
					<h3 class="mb-20">Confirmation!</h3>
					<div class="mb-30 text-center">
						<img src="<?= base_url('assets/vendors/images/success.png')?>" />
					</div>
					<?= lang("Text.account")?>

				</div>
				<div class="modal-footer justify-content-center">
					<button class="btn btn-primary" id="yes">Oui</button>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html End -->
	
	<!-- js -->
	<script src="<?= base_url('assets/vendors/scripts/core.js')?>"></script>
	<script src="<?= base_url('assets/vendors/scripts/script.min.js')?>"></script>
	<script src="<?= base_url('assets/vendors/scripts/process.js')?>"></script>
	<script src="<?= base_url('assets/vendors/scripts/layout-settings.js')?>"></script>
	<script src="<?= base_url('assets/src/plugins/jquery-steps/jquery.steps.js')?>"></script>
	<script src="<?= base_url('assets/vendors/scripts/steps-setting.js')?>"></script>
	<script>
		$(document).ready(function() {
			// Fonction pour mettre à jour les informations dans la section d'aperçu
			function updateOverview() {
				$('#oemail').text($('#email').val());
				$('#otel').text($('#tel').val());
				$('#ofunc').text($('#function').val());
				$('#oname').text($('#name').val());
				$('#oid').text($('#cni').val());
				$('#oid').text($('#cni').val());
				$('#oid').text($('#cni').val());
			}

			// Écoutez les changements dans les champs de saisie
			$('#email, #name, #password, #confirm').on('input', updateOverview);
		});
	</script>
	<!-- Google Tag Manager (noscript) -->
	<noscript
		><iframe
			src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
			height="0"
			width="0"
			style="display: none; visibility: hidden"
		></iframe
	></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<script>
		$(function(){
			$("#yes").click(function(){
				document.getElementById("register").submit();
			})
		});
	</script>
</div>



<?= $this->include('layouts/footer.php');?>