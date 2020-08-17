@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
		<h2>Category Create (Form)</h2>

		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif


		<div class="row">
			<div class="offset-md-2 col-md-8">
				<form method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label>Photo</label>
						<input type="file" name="photo" class="form-control-file">
					</div>






					<input type="submit" value="+ Add" class="btn btn-primary">

				</form>			
			</div>

		</div>


	</div>

@endsection