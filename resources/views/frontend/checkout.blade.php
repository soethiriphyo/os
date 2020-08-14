@extends('frontendtemplate')

@section('content')
<div class="col-lg-9">
	


<div id="checkout_body">
	<div class="container my-5 text-center">
		<div class="row">
			<div class="offset-md-2 col-md-8">
				<h2 class="pb-2">Your Cart!</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>No.</th>
								<th>Photo</th>
								<th>Item Name</th>

								<th>Price</th>
								<th>Qty</th>
								<th>Sub Total</th>
							</tr>
						</thead>
						<tbody>	
							
						</tbody>
						
					</table>

					
					
				</div>


			</div>

			<div class="offset-md-2 col-md-8">
				<div class="form-group">
					<textarea class="form-control notes" placeholder="Notes"></textarea>
					<input type="hidden" name="" class="total">
				</div>
			</div>

			<div class="col-md-6 ml-auto">
			<a href="{{route('homepage')}}" class="btn btn-success ml-auto">Continue Shopping</a>
			</div>

			
			@auth
			<div class="col-md-6 mr-auto">
				<a href="#" class="btn btn-info buy_now">Checkout</a>
			</div>
			@else

			<div class="col-md-6 mr-auto">
			<a href="{{route('login')}}" class="btn btn-info float-right">Login To Checkout</a>
			</div>
			@endauth 
			
		</div>
	</div>
</div>
</div>

@endsection

@section('script')
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection