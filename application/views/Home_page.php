				<!--begin::Toolbar-->
				<div class="toolbar" id="kt_toolbar">
					<!--begin::Container-->
					<div id="kt_toolbar_container" class="container-xl d-flex flex-stack">
						<!--begin::Page title-->
						<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
							<!--begin::Title-->
							<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Nilai Alpha</h1>
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
								<li class="breadcrumb-item text-muted">Nilai Alpha</li>
								<!--end::Item-->
							</ul>
							<!--end::Breadcrumb-->
						</div>
						<!--end::Page title-->

					</div>
					<!--end::Container-->
				</div>
				<!--end::Toolbar-->
<!--begin::Post-->
<div class="post d-flex flex-column-fluid pt-10" id="kt_post">
	<!--begin::Container-->
	<div id="kt_content_container" class="container-xl">
		<!--begin::Row-->
		<div class="row gy-5 g-xl-8">
			<!--begin::Col-->
			<div class="col-xl-12">
				<!--begin::Tables Widget 9-->
				<div class="card card-xl-stretch mb-5 mb-xl-8">
					<!--begin::Header-->
					<div class="card-header border-0 pt-5">
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bolder fs-3 mb-1">Menentukan Nilai Alpha</span>
							<span class="text-muted mt-1 fw-bold fs-7 ">Perhitungan Manual Menentukan nilai Alpha</span>
						</h3>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body py-3">
						<!--begin::Tap pane-->
						<div class="row">
							<div class="col-md-4">
								Menghitung Single Exponential Smoothing (SES) <br> <br>
								$S_{t} = aX_t + (1-a)X_{t-1}$
								<br>
								&nbsp&nbsp&nbsp&nbsp&nbsp $=0.9(11) + (1-0.9)4$ <br>
								&nbsp&nbsp&nbsp&nbsp&nbsp $=10.3$ <br><br>
								Menghitung Double Exponential Smoothing (DES) <br> <br>
								$S^{"}_{t} = aS_t + (1-a)S^{"}_{t-1}$
								<br>
								&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $=0.9(10.3) + (1-0.9)4$ <br>
								&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $=9.67$ <br><br>
								Menghitung $A_t$ dan $B_t$ <br><br>
								$A_t = 2S_t - S^{"}_t$ <br>
								&nbsp&nbsp&nbsp&nbsp&nbsp $ = 2(10.3) - 9.67$ <br>
								&nbsp&nbsp&nbsp&nbsp&nbsp $ = 10.93$ <br><br>

								$B_t = \frac{a}{1-a}(S_t - S^{"}_t$) <br>
								&nbsp&nbsp&nbsp&nbsp&nbsp $ = \frac{0.9}{1-0.9}(10.3 - 9.67)$ <br>
								&nbsp&nbsp&nbsp&nbsp&nbsp $ = 0.33$ <br><br>

								$S_{t+m} = a + b(m) <br>
								&nbsp&nbsp&nbsp&nbsp&nbsp $ = 10.93 + 0.33 <br>
								&nbsp&nbsp&nbsp&nbsp&nbsp $ = 11,26$ <br><br>
							</div>
							<div class="col-md-8">
								Dengan cara yang sama, dilakukan percobaan untuk nilai $0\lt a \lt 1 $. Maka didapatkan Hasil perhitungan untuk masing-masing nilai $a$ dimana nilai $a$ terbaik adalah $a = 0.9$

								<!--begin::Table container-->
								<div class="table-responsive alpha"></div>
								<!--end::Table container-->
							</div>
						</div>

					</div>
					<!--begin::Body-->
				</div>
				<!--end::Tables Widget 9-->
			</div>
			<!--end::Col-->

		</div>
		<!--end::Row-->
	</div>
	<!--end::Container-->
</div>
<!--end::Post-->

<!--begin::Javascript-->
<script>
	var hostUrl = "<?= base_url() ?>dist/assets/";
</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="<?= base_url() ?>dist/assets/plugins/global/plugins.bundle.js"></script>
<script src="<?= base_url() ?>dist/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="<?= base_url() ?>dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="<?= base_url() ?>dist/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="<?= base_url() ?>dist/assets/js/widgets.bundle.js"></script>
<script src="<?= base_url() ?>dist/assets/js/custom/widgets.js"></script>
<script src="<?= base_url() ?>js/function.js"></script>
<!--end::Page Custom Javascript-->