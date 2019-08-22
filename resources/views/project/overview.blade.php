@extends('layouts.admin.layoutLight2')
@section('head')
<!-- Chart.js -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css">
<style type="text/css">
	.products-list .product-info {
		margin-left: 0px;
	}
</style>
@endsection
@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Overview
			<small>All of project overview</small>
		</h1>
		<!-- <ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
			<li><a href="#">Examples</a></li>
			<li class="active">Blank page</li>
		</ol> -->
	</section>
	<section class="content">
		<div class="row">
			<div class="col-sm-3">
				<div class="info-box">
					<span class="info-box-icon bg-red"><i class="fa fa-hourglass-half"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Approaching End</span>
						<span class="info-box-number">2<small> Project</small></span>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="info-box">
					<span class="info-box-icon bg-yellow"><i class="fa fa-calendar-times-o"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Due this Mount</span>
						<span class="info-box-number">5<small> Project</small></span>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="info-box">
					<span class="info-box-icon bg-green"><i class="fa fa-clock-o"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Occurring Project</span>
						<span class="info-box-number">5<small> Project</small></span>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="info-box">
					<span class="info-box-icon bg-blue"><i class="fa fa-flag-checkered"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Finish Project</span>
						<span class="info-box-number">2<small> Project</small></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<section class="col-md-6">
				<div class="row">
					<div class="col-md-12">
						<div class="box">
							
							<div class="box">
								<div class="box-header with-border">
									<h3 class="box-title">Lastest Update Project</h3>

									<div class="box-tools pull-right">
										<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
											<i class="fa fa-minus"></i></button>
										<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
											<i class="fa fa-times"></i></button>
									</div>
								</div>
								<div class="box-body" style="">
									<ul class="products-list product-list-in-box">
										<li class="item">
											<div class="product-info">
												<a href="javascript:void(0)" class="product-title">Manage Service Router CC BAF Surabaya
													<span class="label label-info pull-right">Update</span></a>
														<span class="product-description">
															[Rama] Laporan PM telah di Submit ke Pak. Budi
														</span>
											</div>
										</li>
										<!-- /.item -->
										<li class="item">
											<div class="product-info">
												<a href="javascript:void(0)" class="product-title">Pengadaan Perangkat Video Conference Perum Bulog Pusat
													<span class="label label-warning pull-right">Pending</span></a>
														<span class="product-description">
															[Wisnu] PM di tolak karena ada kesalahan di pengtikan
														</span>
											</div>
										</li>
										<!-- /.item -->
										<li class="item">
											<div class="product-info">
												<a href="javascript:void(0)" class="product-title">Pekerjaan Jasa Sewa Mesin CRM Tahun 2018
													<span class="label label-danger pull-right">Open</span></a>
														<span class="product-description">
															[Wisnu] Open Project - Pekerjaan Jasa Sewa Mesin CRM Tahun 2018
														</span>
											</div>
										</li>
										<!-- /.item -->
										<li class="item">
											<div class="product-info">
												<a href="javascript:void(0)" class="product-title">Sewa Router 2901 (86 Unit)
													<span class="label label-success pull-right">Finish</span></a>
														<span class="product-description">
															[Atha] Finish Project - BA telah di submit ke Finance
														</span>
											</div>
										</li>
										<!-- /.item -->
									</ul>
								</div>
								<div class="box-footer" style="">
									Footer
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="col-md-6">
				<div class="row">
					<div class="col-md-12">
						<div class="box">
							<div class="box-header with-border">
								<h3 class="box-title">Status Project Chart</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
										<i class="fa fa-minus"></i></button>
									<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
										<i class="fa fa-times"></i></button>
								</div>
							</div>
							<div class="box-body" style="">
								<canvas id="precentageChart" style="height:250px"></canvas>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Title</h3>

							<div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
									<i class="fa fa-minus"></i></button>
								<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
									<i class="fa fa-times"></i></button>
							</div>
						</div>
						<div class="box-body" style="">
							Start creating your amazing application!
						</div>
						<div class="box-footer" style="">
							Footer
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div id="alertPopUp" class="" style="margin-top: 100px;margin-right: 10px; position:fixed; top:0; right:0; width:300px;display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<h4></h4>
		<p></p>
	</div>
</div>
@endsection 

@section('script')
<!-- moment.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<!-- Chart.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script>
	$(document).ready(function(){
		var sourceData = [20,5,2,1,1];
		var data = {
			datasets: [{
				data: sourceData,
				backgroundColor: [
					"#009432",
					"#A3CB38",
					"#FFC312",
					"#F79F1F",
					"#EA2027",
				],
				borderWidth :[ 0, 0, 0, 0, 0]
			}],

			// These labels appear in the legend and in the tooltips when hovering different arcs
			labels: [
				"Normal",
				"Warning",
				"Minor",
				"Major",
				"Critical",
			]
		};

		var ctx = $("#precentageChart");
		var precentageChart = new Chart(ctx, {
			type: 'doughnut',
			data: data,
			options: {
				animation:{
					animateRotate : false,
				},
				legend: {
					position:'right',
				},
			}
		});
	})

	function alertPopUp(data){
		$("#alertPopUp").removeClass();
		$("#alertPopUp").addClass("alert alert-" + data.alert + " alert-dismissible");
		$("#alertPopUp h4").html('<i class="icon fa ' + data.icon + '"></i>' + data.type);
		$("#alertPopUp p").html(data.note);
		$("#alertPopUp").show().delay(2000).fadeOut();
	}
</script>
@endsection