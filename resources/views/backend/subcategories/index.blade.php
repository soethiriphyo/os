@extends('backendtemplate')
@section('content')

<div class="container-fluid">
		<h2 class="d-inline-block">Subcategory List (Table)</h2>
		<a href="{{route('subcategories.create')}}" class="btn btn-success float-right">+ Add Category</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>NO</th>
					
					<th>Name</th>
					<th>Category</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
				<!-- 	<td>0001
						<a href="{{route('items.show',1)}}">
						<span class="badge badge-primary badge-pill"> Detail</span>
							
						</a>
					</td> -->
					<td>Item One</td>
					<td>Item</td>

					<td>
						<a href="{{route('categories.edit',1)}}" class="btn btn-warning">Edit</a>
						<a href="#" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			</tbody>
		</table>

	</div>

@endsection