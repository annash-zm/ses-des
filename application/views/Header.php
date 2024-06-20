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
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->
				<!--begin::Toolbar-->
				<div class="toolbar" id="kt_toolbar">
					<!--begin::Container-->
					<div id="kt_toolbar_container" class="container-xl d-flex flex-stack">
						<!--begin::Page title-->
						<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
							<!--begin::Title-->
							<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Alpha dan SES-DES</h1>
							<!--end::Title-->
							<!--begin::Separator-->
							<span class="h-20px border-gray-300 border-start mx-4"></span>
							<!--end::Separator-->
							<!--begin::Breadcrumb-->
							<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
								<!--begin::Item-->
								<li class="breadcrumb-item text-muted">
									<a href="" class="text-muted text-hover-primary">Home</a>
								</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="breadcrumb-item">
									<span class="bullet bg-gray-300 w-5px h-2px"></span>
								</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="breadcrumb-item text-muted">SES-DES</li>
								<!--end::Item-->
							</ul>
							<!--end::Breadcrumb-->
						</div>
						<!--end::Page title-->

					</div>
					<!--end::Container-->
				</div>
				<!--end::Toolbar-->