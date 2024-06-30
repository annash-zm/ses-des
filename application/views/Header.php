<html lang="en">
<!--begin::Head-->

<head>
	<title>SES-DES</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	<!--begin::Fonts-->
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" /> -->
	<!--end::Fonts-->
	<!--begin::Page Vendor Stylesheets(used by this page)-->
	<link href="<?= base_url() ?>dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>dist/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="<?= base_url() ?>dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML">
	</script>

	<script type="text/x-mathjax-config">
		MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
	</script>
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header-->
				<div id="kt_header" class="header align-items-stretch">
					<!--begin::Container-->
					<div class="container-xl d-flex align-items-stretch justify-content-between">
						<!--begin::Aside mobile toggle-->
						<!--end::Aside mobile toggle-->
						<!--begin::Logo-->
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
							<a href="<?= base_url() ?>dist/index.html">
								<div class="d-flex flex-row align-items-center">
									<img alt="Logo" src="https://unmuhjember.ac.id/images/logo/logo_UMJ.png" class="h-40px h-lg-60px" />
									<div class="flex-column mx-3">
										<span class="fw-bolder fs-2 mb-1">Aplikasi Perhitungan SES-DES</span><br>
										<span class="text-muted fw-bold fs-7 ">Jesika Ayu D.V.P - Universitas Muhammadiyah Jember</span>
									</div>
								</div>

							</a>
						</div>
						<!--end::Logo-->

						 <!--begin::Wrapper-->
						 <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1 fs-5">
                            <!--begin::Navbar-->
                            <div class="d-flex align-items-stretch" id="kt_header_nav">
                                <div></div>
                            </div>
                            <!--end::Navbar-->
                            <!--begin::Toolbar wrapper-->
                            <div class="d-flex align-items-stretch flex-shrink-0">
                                <!--begin::Search-->
                                <div class="d-flex align-items-stretch ms-1 ms-lg-3">
                                    <!--begin::Menu-->
                                    <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">

                                        <a class="menu-item" href="<?= base_url() ?>">
                                            <span class="menu-link <?= $menu[0] ?> py-3">
                                                <span class="menu-title">Nilai Alpha</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </span>
                                        </a>

                                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                                            <span class="menu-link py-3 <?= $menu[1] ?>">
                                                <span class="menu-title">Perhitungan SES-DES</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link <?= $submenu[0] ?> py-3" href="<?= site_url() ?>/home/prodi">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Per Prodi</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3 <?= $submenu[1] ?>" href="<?= site_url() ?>/home/jalurMasuk">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Per Jalur Masuk</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <!--end::Menu-->
                                   
                                </div>
                                <!--end::Search-->
                               
                               
                            </div>
                            <!--end::Toolbar wrapper-->
                        </div>
                        <!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->
