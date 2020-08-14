@extends('frontendtemplate')

@section('content')
<div class="col-lg-9">
	<h2>Item Detail</h2>

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6 my-3">
				<div class="card">
									
					<div class="card_img">
						<img src="{{asset('frontend/images/cheese.jpg')}}" class="card-img-top border-bottom image">
										
					</div>
					<div class="card-body text-center">
										
						<p>Corona Jam Filled</p>
						<hr class="item-divider">
						<p>1500 MMK</p>
										
					</div>
					<div class="card-footer">
						<a href="#" class="btn btn-info btn-sm ml-auto">Add To Cart</a>
						<a href="#" class="btn btn-primary btn-sm ml-5">Detail</a>

					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>

@endsection