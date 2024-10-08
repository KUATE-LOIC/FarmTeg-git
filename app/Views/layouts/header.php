<?php

	$data['id'] = session()->get('id_personnel');
	$data['nom'] = session()->get('nom_personnel');
	$data['email'] = session()->get('email_personnel');
	// dd($data);

?>

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
		<link href="<?= base_url('assets/niceadmin/vendor/remixicon/remixicon.css" rel="stylesheet')?>">

		<link
			rel="stylesheet"
			type="text/css"
			href="<?= base_url('assets/src/plugins/jquery-steps/jquery.steps.css')?>"
		/>

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

		<link rel="stylesheet" href="<?= base_url('assets/vendor/jquery-ui-1.12.1/jquery-ui.css')?>">


		
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
		<style>
			.border-danger {
				border-color: red !important;
			}
			.shadow {
				box-shadow: 0 0 10px rgba(255, 0, 0, 0.5) !important;
			}
		</style>
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
	<body>
		<!-- <div class="pre-loader">
			<div class="pre-loader-box">
				<div class="loader-logo">
					<img src="<?= base_url('assets/vendors/images/farmteg.png')?>" alt="" />
				</div>
				<div class="loader-progress" id="progress_div">
					<div class="bar" id="bar1"></div>
				</div>
				<div class="percent" id="percent1">0%</div>
				<div class="loading-text">Loading...</div>
			</div>
		</div> -->

		<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>
				<div
					class="search-toggle-icon bi bi-search"
					data-toggle="header_search"
				></div>
				<!-- <div class="header-search">
					<form>
						<div class="form-group mb-0">
							
							<div class="dropdown">
								<a
									class="dropdown-toggle no-arrow"
									href="#"
									role="button"
									data-toggle="dropdown"
								>
									<i class="ion-arrow-down-c"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>From</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">To</label>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>Subject</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="text-right">
										<button class="btn btn-primary">Search</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div> -->
			</div>
			<div class="header-right">
				<!-- <div class="dashboard-setting user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="javascript:;"
							data-toggle="right-sidebar"
						>
							<i class="dw dw-settings2"></i>
						</a>
					</div>
				</div> -->
				<!-- <div class="user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<i class="icon-copy dw dw-notification"></i>
							<span class="badge notification-active"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<div class="notification-list mx-h-350 customscroll">
								<ul>
									<li>
										<a href="#">
											<img src="<?= base_url('assets/vendors/images/img.jpg')?>" alt="" />
											<h3>John Doe</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?= base_url('assets/vendors/images/photo1.jpg')?>" alt="" />
											<h3>Lea R. Frith</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?= base_url('assets/vendors/images/photo2.jpg')?>" alt="" />
											<h3>Erik L. Richards</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?= base_url('assets/vendors/images/photo3.jpg')?>" alt="" />
											<h3>John Doe</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?= base_url('assets/vendors/images/photo4.jpg')?>" alt="" />
											<h3>Renee I. Hansen</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?= base_url('assets/vendors/images/img.jpg')?>" alt="" />
											<h3>Vicki M. Coleman</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div> -->
				<div class="user-info-dropdown">
					<div class="dropdown">
						<a
							class="dropdown-toggle"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<span class="user-icon">
								<h1 class="py-1"><i class="icon-copy dw dw-user-12 text-success"></i></h1>
							</span>
							<span class="user-name"><?= $data['nom']?></span>
						</a>
						<div
							class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
						>

							<a class="dropdown-item text-dark" href="<?= site_url('list_personnel')?>"
							><i class="fa fa-users"></i> <?= lang("Text.User")?></a>

							<button	type="button" class="btn dropdown-toggle waves-effect dropdown-item bg-white text-dark py-2" data-toggle="dropdown"	aria-expanded="false">
								<i class="bi bi-globe"></i><?= lang("Text.Language")?><span class="caret"></span>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="<?=site_url('lang/en')?>"><?= lang("Text.English")?></a>
								<a class="dropdown-item" href="<?=site_url('lang/fr')?>"><?= lang("Text.French")?></a>
							</div>
							
								<div class="dropdown ">
									<a
										class="dropdown-toggle no-arrow dropdown-item text-dark py-2"
										href="javascript:;"
										data-toggle="right-sidebar"
									>
										<i class="dw dw-settings2 mr-2"></i><?= lang("Text.Setting")?></a>
								</div>
							<a class="dropdown-item text-dark" href="<?= site_url('logout')?>"
								><i class="dw dw-logout"></i> <?= lang("Text.Log Out")?></a>
						</div>
					</div>
				</div>
				
			</div>
		</div>

		<div class="right-sidebar">
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
					Layout Settings
					<span class="btn-block font-weight-400 font-12"
						>User Interface Settings</span
					>
				</h3>
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</div>
			<div class="right-sidebar-body customscroll">
				<div class="right-sidebar-body-content">
					<h4 class="weight-600 font-18 pb-10">Header Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-white active"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-dark"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-light"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-dark active"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
					<div class="sidebar-radio-group pb-10 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-1"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebaricon-1"
								><i class="fa fa-angle-down"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-2"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-2"
							/>
							<label class="custom-control-label" for="sidebaricon-2"
								><i class="ion-plus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-3"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-3"
							/>
							<label class="custom-control-label" for="sidebaricon-3"
								><i class="fa fa-angle-double-right"></i
							></label>
						</div>
					</div>

					<!-- <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
					<div class="sidebar-radio-group pb-30 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-1"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-1"
								><i class="ion-minus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-2"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-2"
							/>
							<label class="custom-control-label" for="sidebariconlist-2"
								><i class="fa fa-circle-o" aria-hidden="true"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-3"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-3"
							/>
							<label class="custom-control-label" for="sidebariconlist-3"
								><i class="dw dw-check"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-4"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-4"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-4"
								><i class="icon-copy dw dw-next-2"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-5"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-5"
							/>
							<label class="custom-control-label" for="sidebariconlist-5"
								><i class="dw dw-fast-forward-1"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-6"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-6"
							/>
							<label class="custom-control-label" for="sidebariconlist-6"
								><i class="dw dw-next"></i
							></label>
						</div>
					</div> -->

					<div class="reset-options pt-30 text-center">
						<button class="btn btn-danger" id="reset-settings">
							Reset Settings
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="left-side-bar">
			<div class="brand-logo">
				<a href="#">
					<img src="<?= base_url('assets/vendors/images/12.png')?>" alt="" class="dark-logo" />
					<img
						src="<?= base_url('assets/vendors/images/12.png')?>"
						alt=""
						class="light-logo"
					/>
				</a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			<div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">
						<li class="">
							<a href="<?= site_url('dashboard')?>" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-speedometer"></span>
								<span class="mtext"><?= lang("Text.Dashboard")?></span>
							</a>
							
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-plus-square-fill"></span>
								<span class="mtext"><?= lang("Text.Quick Adds")?></span>
							</a>
							<ul class="submenu">
								<li><a href="<?= site_url('create_form_elevage')?>"></span><span class="mtext"><?= lang("Text.Add Band")?></span></a></li>
								<li><a href="<?= site_url('create_form_ressource1')?>"></span><span class="mtext"><?= lang("Text.Add Feading")?></span></a></li>
								<li><a href="<?= site_url('create_form_ressource2')?>"></span><span class="mtext"><?= lang("Text.Treatment")?></span></a></li>
								<li><a href="<?= site_url('create_form_produit')?>"></span><span class="mtext"><?= lang("Text.Animal Yield")?></span></a></li>
							</ul>
						</li>
						<li class="">
							<a href="<?= site_url('list_type')?>" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-bezier"></span
								><span class="mtext"><?= lang("Text.Species")?>
								</span>
							</a>
							
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon icon-copy dw dw-fish"></span
								><span class="mtext"><?= lang("Text.Livestock")?>
								</span>
							</a>
							<ul class="submenu">
								<li><a href="<?= site_url('list_elevage')?>"><?= lang("Text.Animals Band")?>
								</a></li>
								<li><a href="<?= site_url('list_produit2')?>"><?= lang("Text.Animals products")?>
								</a></li>
								<li><a href="<?= site_url('list_dead')?>"><?= lang("Text.Deaths")?>
								</a></li>
							</ul>
						</li>
						
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon fi-mountains"></span
								><span class="mtext"> <?= lang("Text.Ressources")?>
								</span>
							</a>
							<ul class="submenu">
								<li><a href="<?= site_url('list_ressource')?>"><?= lang("Text.Inventory")?>
								</a></li>
								<li><a href="<?= site_url('create_form_ressource1')?>"></span><span class="mtext"><?= lang("Text.Add Feading")?></span></a></li>
								<li><a href="<?= site_url('create_form_ressource2')?>"></span><span class="mtext"><?= lang("Text.Treatment")?></span></a></li>
								<li><a href="<?= site_url('create_form_move')?>"><?= lang("Text.Move To Stock")?>
								</a></li>
								<li><a href="<?= site_url('create_form_remove')?>"><?= lang("Text.Feed/Treat")?>
								</a></li>
								</ul>
						</li>

						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-shop"></span
								><span class="mtext"><?= lang("Text.Market")?>
								</span>
							</a>
							<ul class="submenu">
								<li><a href="<?= site_url('dashboard2')?>"><?= lang("Text.Dashboard")?></a></li>
								<li><a href="<?= site_url('list_produit')?>"><?= lang("Text.Sales")?></a></li>
								<li><a href="<?= site_url('list_unite')?>"><?= lang("Text.Units/Prices")?></a></li>
								</ul>
						</li>
						
						<li class="">
							<a href="<?= site_url('list_mouvement')?>" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-inboxes-fill"></span
								><span class="mtext"><?= lang("Text.Stock")?></span>
							</a>
							
						</li>
						
						<li class="">
							<a href="<?= site_url('report1')?>" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-journals"></span
								><span class="mtext"><?= lang("Text.Repports")?></span>
							</a>
							
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="mobile-menu-overlay"></div>