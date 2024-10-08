<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="<?= base_url('assets/vendors/images/apple-touch-icon.png')?>"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="<?= base_url('assets/vendors/images/favicon-32x32.png')?>"
		/>
		<link href="<?= base_url('assets/niceadmin/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

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
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/styles/core.css')?>" />
		<link
			rel="stylesheet"
			type="text/css"
			href="<?= base_url('assets/vendors/styles/icon-font.min.css')?>"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="<?= base_url('assets/src/plugins/jquery-steps/jquery.steps.css')?>"
		/>
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
	</head>

	<body class="login-page">
		
		<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-3 col-lg-3">
						<!-- <img src="<?= base_url('assets/vendors/images/register-page-img.png')?>" alt="" /> -->
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="register-box bg-white box-shadow border-radius-10">
							<div class="wizard-content">
								<form class="tab-wizard2 wizard-circle wizard" id="register" action="<?= site_url('insert_personnel')?>" method="post">

                                <!-- Step 1 -->
                                <h5>Personal Information</h5>
									<section>
										<div class="form-wrap max-width-600 mx-auto">
                                            <div class="input-group custom " >
                                                <div class="form-floating">
                                                    <input
                                                        name="nom_personnel"
                                                        id="name"
                                                        type="text"
                                                        class="form-control form-control-lg rounded-0"
                                                        placeholder="Full Name"
                                                    />
                                                    <label for="name">Full Name*</label>
                                                </div>
                                            </div>
                                            <div class="input-group custom " >
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

                                            <div class="input-group custom " >
                                                <div class="form-floating">
                                                    <input
                                                        name="cni_personnel"
                                                        id="cni"
                                                        type="number"
                                                        class="form-control form-control-lg rounded-0"
                                                        placeholder="ID Number*"
                                                    />
                                                    <label for="cni">ID Number*</label>
                                                </div>
                                            </div>
											<div class="form-group row align-items-center">

												<label class="col-sm-4 col-form-label">Gender*</label>
												<div class="col-sm-8">
													<div class="custom-control custom-radio custom-control-inline pb-0">
														<input type="radio" id="male" value="male" name="sexe_personnel" class="custom-control-input"/>
														<label class="custom-control-label" for="male">Male</label>
													</div>

													<div class="custom-control custom-radio custom-control-inline pb-0">
														<input type="radio" id="female" value="female" name="sexe_personnel" class="custom-control-input"/>
														<label class="custom-control-label" for="female">Female</label>
													</div>
												</div>
											</div>
											
										</div>
									</section>

                                    <!-- Step 2 -->
									<h5>Basic Account Credentials</h5>
									<section>
										<div class="form-wrap max-width-600 mx-auto">
                                            <div class="input-group custom " >
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
                                            <div class="input-group custom " >
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

											<div class="input-group custom " >
                                                <div class="form-floating">
                                                    <input
                                                        name="mot_de_passe"
                                                        id="password"
                                                        type="password"
                                                        class="form-control form-control-lg rounded-0"
                                                        placeholder="Password*"
                                                    />
                                                    <label for="password">Password*</label>
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
                                                    <label for="password">Confirm Password*</label>
                                                </div>
                                            </div>
											
										</div>
									</section>

									<!-- Step 3 -->
                                    <h5>Overview Information</h5>
									<section>
										<div class="form-wrap max-width-600 mx-auto">
											<ul class="register-info">
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600">Email Address</div>
														<div class="col-sm-8">example@abc.com</div>
													</div>
												</li>
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600">Username</div>
														<div class="col-sm-8">Example</div>
													</div>
												</li>
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600">Password</div>
														<div class="col-sm-8">.....000</div>
													</div>
												</li>
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600">Full Name</div>
														<div class="col-sm-8">john smith</div>
													</div>
												</li>
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600">Location</div>
														<div class="col-sm-8">123 Example</div>
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
													>I have read and agreed to the terms of services and
													privacy policy</label
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
						You are about to create a new account
					</div>
					<div class="modal-footer justify-content-center">
						<button class="btn btn-primary" id="yes">Yes</button>
					</div>
				</div>
			</div>
		</div>
		<!-- success Popup html End -->
		<!-- welcome modal start -->
		<div class="welcome-modal">
			<button class="welcome-modal-close">
				<i class="bi bi-x-lg"></i>
			</button>
			<iframe
				class="w-100 border-0"
				src="https://embed.lottiefiles.com/animation/31548"
			></iframe>
			<div class="text-center">
				<h3 class="h5 weight-500 text-center mb-2">
					Open source
					<span role="img" aria-label="gratitude">❤️</span>
				</h3>
				<div class="pb-2">
					<a
						class="github-button"
						href="https://github.com/dropways/deskapp"
						data-color-scheme="no-preference: dark; light: light; dark: light;"
						data-icon="octicon-star"
						data-size="large"
						data-show-count="true"
						aria-label="Star dropways/deskapp dashboard on GitHub"
						>Star</a
					>
					<a
						class="github-button"
						href="https://github.com/dropways/deskapp/fork"
						data-color-scheme="no-preference: dark; light: light; dark: light;"
						data-icon="octicon-repo-forked"
						data-size="large"
						data-show-count="true"
						aria-label="Fork dropways/deskapp dashboard on GitHub"
						>Fork</a
					>
				</div>
			</div>
			<div class="text-center mb-1">
				<div>
					<a
						href="https://github.com/dropways/deskapp"
						target="_blank"
						class="btn btn-light btn-block btn-sm"
					>
						<span class="text-danger weight-600">STAR US</span>
						<span class="weight-600">ON GITHUB</span>
						<i class="fa fa-github"></i>
					</a>
				</div>
				<script
					async
					defer="defer"
					src="https://buttons.github.io/buttons.js"
				></script>
			</div>
			<a
				href="https://github.com/dropways/deskapp"
				target="_blank"
				class="btn btn-success btn-sm mb-0 mb-md-3 w-100"
			>
				DOWNLOAD
				<i class="fa fa-download"></i>
			</a>
			<p class="font-14 text-center mb-1 d-none d-md-block">
				Available in the following technologies:
			</p>
			<div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
				<i class="fa fa-html5"></i>
			</div>
		</div>
		<button class="welcome-modal-btn">
			<i class="fa fa-download"></i> Download
		</button>
		<!-- welcome modal end -->
		<!-- js -->
		<script src="<?= base_url('assets/vendors/scripts/core.js')?>"></script>
		<script src="<?= base_url('assets/vendors/scripts/script.min.js')?>"></script>
		<script src="<?= base_url('assets/vendors/scripts/process.js')?>"></script>
		<script src="<?= base_url('assets/vendors/scripts/layout-settings.js')?>"></script>
		<script src="<?= base_url('assets/src/plugins/jquery-steps/jquery.steps.js')?>"></script>
		<script src="<?= base_url('assets/vendors/scripts/steps-setting.js')?>"></script>
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
	</body>
</html>
