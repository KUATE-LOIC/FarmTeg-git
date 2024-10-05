<!DOCTYPE html>
<html>
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
		<link href="<?= base_url('assets/niceadmin/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

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
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/styles/core.css')?>" />
		<link
			rel="stylesheet"
			type="text/css"
			href="<?= base_url('assets/vendors/styles/icon-font.min.css')?>"
		/>
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/styles/style.css')?>" />
		<style>
			.alert-highlight {
				box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
				border-color: #ff0000;
			}
		</style>

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
		<!-- <div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">
					<a href="login.html">
						<img src="<?= base_url('assets/vendors/images/deskapp-logo.svg')?>" alt="" />
					</a>
				</div>
				<div class="login-menu">
					<ul>
						<li><a href="register.html">Register</a></li>
					</ul>
				</div>
			</div>
		</div> -->
		<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-3 col-lg-3">
						<!-- <img src="<?= base_url('assets/vendors/images/login-page-img.png')?>" alt="" /> -->
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title">
								<img
									src="<?= base_url('assets/vendors/images/12.png')?>"
									alt=""
									class="col-md-8 offset-md-2 light-logo w-75 d-flex justify-content-center"
								/>
								<h2 class="text-center text-success">LOGIN</h2>
							</div>
							<form id="formlogin" action="<?= site_url('authentif')?>" method="post"  name="formlog">
								<div class="input-group custom " >
									<div class="form-floating">
										<input
											name="email_personnel"
											id="email"
											type="email"
											class="form-control form-control-lg rounded-0"
											placeholder="Email"
										/>
										<label for="email">Email</label>
									</div>
									<div class="input-group-append custom">
										<span class="input-group-text" 
											><i class="icon-copy dw dw-user1"></i
										></span>
									</div>
								</div>
								<div class="input-group custom " >
									<div class="form-floating">
										<input
											name="mot_de_passe"
											id="password"
											type="password"
											class="form-control form-control-lg rounded-0"
											placeholder="Password"
										/>
										<label for="password">Password</label>
									</div>
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="dw dw-"></i
										></span>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group mb-0">

										<?php if (isset($error)) : ?>
											<div class="alert alert-danger text-center w-100 alert-highlight"><?= $error ?></div>
										<?php endif; ?>

											<button
												class="btn btn-success btn-lg btn-block"
												id="con"
												type="button"
												>Sign In</button>
										</div>
										<div
											class="font-16 weight-600 pt-10 pb-10 text-center"
											data-color="green"
										>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- welcome modal start -->
		
		<!-- welcome modal end -->
		<!-- js -->
		<script src="<?= base_url('assets/vendors/scripts/core.js')?>"></script>
		<script src="<?= base_url('assets/vendors/scripts/script.min.js')?>"></script>
		<script src="<?= base_url('assets/vendors/scripts/process.js')?>"></script>
		<script src="<?= base_url('assets/vendors/scripts/layout-settings.js')?>"></script>
		<script>
        $(document).ready(function() {
            $("#con").click(function() {
			$(".alert.alert-danger.text-center.w-100.alert-highlight").remove();
            var login = formlog.email.value;
            var password = formlog.password.value;
        
            if (login.trim() === "" || password.trim() === "") {
				// Ajouter l'élément en-dessus du bouton si elle n'existe pas
				if (!$('.alert.alert-danger.w-100.text-center').length) {
					$('#con').before('<div class="alert alert-danger w-100 text-center">Veillez remplir tous les champs</div>');
				}
				// Ajouter l'effet de surbrillance
				$('.alert.alert-danger.w-100.text-center').addClass('alert-highlight');
				setTimeout(function() {
					$('.alert.alert-danger.w-100.text-center').removeClass('alert-highlight');
				}, 1500);
				return;
            }
            
            $("#formlogin").submit();
            });
        });
    	</script>
		<!-- Google Tag Manager (noscript) -->
		<!-- <noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript> -->
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
