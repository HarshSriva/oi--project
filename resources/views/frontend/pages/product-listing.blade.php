@extends('frontend.layouts.master-layout')

@section('content')

<!-- page banner -->
<div class="container-fluid p-0 vh-40 bg-cover bg-center position-relative" data-bg-img="{{url('/')}}/assets/imgs/banner.jpg">
	<h1 class="text-white position-absolute abs-center-x-y w-100 m-0 text-center">Products</h1>
</div>
<!-- page banner -->


<!-- container -->
<section class="position-relative">
	<div class="background-ornaments-9 l--10 t-50 background-ornaments"></div>
	<div class="container mt-5 mb-5 pt-3 pb-3">
		<div class="row">
			<div class="col-md-4 sidebar">

				<div id="accordion">

					<div class="card br-0">
						<div class="card-header br-0" data-bg-color="#0ba245">
							<a class="card-link text-white text-uppercase" href="javascript:void(0)">
								Filter By
							</a>
						</div>
					</div>

					<div class="card br-0">
						<div class="card-header br-0 position-relative">
							<a class="card-link text-black opacity-0-9" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								Category
							</a>

							<div class="icon-down position-absolute abs-center-y r-2 more-less">
								<i class="las la-angle-down"></i>
							</div>

						</div>
						<div id="collapseOne" class="collapse" data-parent="#accordion">
							<div class="card-body">
								<ul class="opacity-0-9">
									<li class="">First item</li>
									<li class="">Second item</li>
									<li class="">Third item</li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="col-md-8 sidebar-content">
				<!-- row -->
				<div class="row">
					<div class="col-md-7">
						<p class="opacity-0-9 pull-left position-absolute abs-center-y">All Products</p>
					</div>

					<div class="col-md-5">
						<div class="row">
							<div class="col-md-6">
								<p class="text-uppercase position-absolute abs-center-y r-0">Sort By</p>
							</div>

							<div class="col-md-6">
								<button class="btn btn-default opacity-0-6 br-0 btn-block" data-border="solid 1px #b7afaf">
									<span >
										Popularty
									</span>
									<span>
										<i class="la la-angle-down"></i>
									</span>
								</button>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->

				<!-- border bottom -->
				<div class="w-90 mr-auto mt-2 mb-2" data-border-bt="solid 1px #b39659">
				</div>


				<!-- row -->
				<div class="row">
					<div class="col-md-3">
						<div class="img-box position-relative">
							<p class="text-uppercase ls-4 text-dark-green text-center mt-3 mb-3 f-0-7">Tulsi - Holy Basil</p>

							<img src="{{url('/')}}/assets/imgs/product-imgs/2.jpg" class="w-100" data-box-shadow="0px 8px 6px -6px #d3cdcd">

						</div>
					</div>

				</div>
				<!-- row -->

				<!-- border bottom -->
				<div class="w-90 mr-auto mt-4 mb-2" data-border-bt="solid 1px #b39659">
				</div>

				<!-- pagination -->
				<div class="ml-auto mr-auto d-block w-fit-content">


					<ul class="pagination">
						<li class="page-item disabled page-nav"><a class="page-link border-none" href="#"><i class="la la-angle-left"></i></a></li>
						<li class="page-item active"><a class="page-link border-none" href="#">1</a></li>
						<li class="page-item"><a class="page-link border-none" href="#">2</a></li>
						<li class="page-item"><a class="page-link border-none" href="#">3</a></li>
						<li class="page-item"><a class="page-link border-none page-nav" href="#"><i class="la la-angle-right"></i></a></li>
					</ul>
				</div>
				<!-- pagination -->
			</div>
		</div>
	</div>
</section>
<!-- container -->

@endsection