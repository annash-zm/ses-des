<!--begin::Post-->
<div class="post d-flex flex-column-fluid pt-10" id="kt_post">
	<!--begin::Container-->
	<div id="kt_content_container" class="container-xxl">
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
						<div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover">
							<ul class="nav">
								<li class="nav-item">
									<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1 active" data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">Perhitungan Alpha</a>
								</li>
								<li class="nav-item">
									<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">Nilai Mape Per-Kategori</a>
								</li>
							</ul>
						</div>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body py-3">
						<div class="tab-content">
							<!--begin::Tap pane-->
							<div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
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

							<div class="tab-pane fade" id="kt_table_widget_5_tab_2">
								<div class="row mb-5">
									<div class="col-lg-12">
										<div class="float-start">
											<span class="svg-icon svg-icon-3 position-absolute py-2 ms-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
													<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<input type="text" id="search-kategori" class="form form-control form-control-sm border-gray-400 border w-300px ps-10" placeholder="Search Kategori" />
										</div>
									</div>
								</div>

								<div class="table-responsive alpa-kategori"></div>
							</div>
						</div>

					</div>
					<!--begin::Body-->
				</div>
				<!--end::Tables Widget 9-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-xl-12">
				<!--begin::Tables Widget 9-->
				<div class="card card-xl-stretch mb-5 mb-xl-8">
					<!--begin::Header-->
					<div class="card-header border-0 pt-5">
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bolder fs-3 mb-1">Perhitungan SES-DES (Nilai Alpha = 0.9)</span>
							<span class="text-muted mt-1 fw-bold fs-7 kategori"></span>
						</h3>
						<div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover">
							<h6>Pilih Kategori</h6>
							<select onchange="toTableSESDES()" id="select_category" class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Pilih Kategori Perhitungan" data-allow-clear="true">
								<option></option>

							</select>
						</div>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body py-3">
						<!--begin::Table container-->
						<div class="table-responsive ses-des"></div>
						<!--end::Table container-->
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