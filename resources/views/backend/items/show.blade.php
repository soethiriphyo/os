@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
		<h2>Item Detail (Your UI)</h2>


		<div class="row">
			<div class="col-md-4">
				<img src="{{asset($item->photo)}}" class="img-fluid">
			</div>

			<div class="col-md-8 px-5 text-justify">
				<h5 class="text-dark pt-2 mt-3">Product Name:{{$item->name}}<span class="text-muted"> </span></h5>
				<h5 class="text-dark pt-2 ">Product Code:{{$item->codeno}}<span class="text-muted"> </span></h5>

				<h5 class="text-dark pt-2">Product Price:{{$item->price}}<span class="text-muted"> </span></h5>
				<h5 class="text-dark pt-2">Description:{{$item->description}}<span class="text-muted"></span> </h5>



				
				

			
		</div>
	</div>
	</div>

@endsection