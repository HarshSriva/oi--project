@extends('frontend.layouts.master-layout')

@section('content')

<!-- section -->
<section class="position-relative p-4">
	
	<div class="container">

		<div class="row">
			<div class="col-md-6">
				<div class="img-box position-relative p-4" style="border: 1px solid black;">
					<img src="{{url('/')}}/assets/imgs/blog/1.png" class="w-100" data-box-shadow="0px 8px 6px -6px #d3cdcd">
					<div class="d-flex justify-content-center">
						<input type="number" min="0" class="m-4 text-center" style="width:75px" name="">
					</div>

					<div class="d-flex justify-content-between p-4">
						<img src="{{url('/')}}/assets/imgs/blog/1.png" class="m-1 p-1" style="width: 100px; height: 100px; border: 1px solid black;" class="w-100" data-box-shadow="0px 8px 6px -6px #d3cdcd">

						<img src="{{url('/')}}/assets/imgs/blog/1.png" class="m-1 p-1" style="width: 100px; height: 100px; border: 1px solid black;" class="w-100" data-box-shadow="0px 8px 6px -6px #d3cdcd">

						<img src="{{url('/')}}/assets/imgs/blog/1.png" class="m-1 p-1" style="width: 100px; height: 100px; border: 1px solid black;" class="w-100" data-box-shadow="0px 8px 6px -6px #d3cdcd">

						<img src="{{url('/')}}/assets/imgs/blog/1.png" class="m-1 p-1" style="width: 100px; height: 100px; border: 1px solid black;" class="w-100" data-box-shadow="0px 8px 6px -6px #d3cdcd">

					</div>
					<div class="d-flex justify-content-between p-4">
						<a href="" class=" btn-success text-uppercase btn  mr-auto ml-auto  d-table">
			Add To Cart
		</a>

		<a href="" class="text-uppercase btn btn-1 mr-auto ml-auto d-table">
			Buy Now
		</a>

					</div>

				</div>
			</div>
			<div class="col-md-6 p-4">
				<div class="row">
					
					<div class="col-md-12">
						<h1 class="p-2 font-weight-bold">Amla</h1>
					</div>

					<div class="col-md-12">
						<h2 class="p-2 font-weight-bold">Price: <span class="px-2">	&#8377</span><span class="px-1">1142</span></h2>
					</div>

					<div class="col-md-4">
						<h3 class="py-2 pl-2 font-weight-bold">Pincode:</h3>
						
					</div>

					<div class="col-md-4">
						<input type="number" min="0" class="text-center m-2" style="width:75px" name="">
					</div>

					<div class="col-md-4">
						<h2 class="p-2 font-weight-bold">Price: <span class="px-2">	&#8377</span><span class="px-1">1142</span></h2>
					</div>

					<!-- <div class="col-md-12 mb-4">
						<div class="img-box position-relative">
							<div class="row">
								<div class="col-md-6">
									<img src="{{url('/')}}/assets/imgs/blog/1.png" class="w-100" data-box-shadow="0px 8px 6px -6px #d3cdcd">
								</div>
								<div class="col-md-6">
									<p class="text-uppercase text-dark-green text-left mt-3">May 17,2021</p>

									<h5 class="text-uppercase f-Whitney-Medium">Tulsi Teas & Infusions</h5>
									<p data-opacity="0.7">Lorem ipsum lorem lore lorem lorem Lorem ipsum lorem lore lorem lorem Lorem ipsum lorem lore lorem lorem</p>
								</div>
							</div>
							
							
						</div>
					</div> -->

				</div>
			</div>
			
		</div>

		<!-- button -->
		<a href="" class="text-uppercase btn btn-1 mr-auto ml-auto mt-4 mb-4 d-table">
			View All
		</a>

		<div class="background-ornaments-9 background-ornaments t--15 l--10"></div>

		<div class="background-ornaments-10 background-ornaments b--15 r--10"></div>

	</div>
</section>

@endsection