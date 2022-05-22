@extends('user.layouts.master')



@section('css')
<link rel="stylesheet" href="{{asset('dashboard/css/select2.min.css')}}">
@endsection


@section('content')

<!-- Page Wrapper -->

<div class="content container-fluid">

	<!-- Page Header -->
	<div class="page-header">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<form method="POST" action="">
							@csrf
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" name="name" value="{{(isset($name))?$name:""}}"
									placeholder="Enter Name">
							</div>

							<div class="form-group">
								<label for="name">Name</label>
								<select class="js-example-basic-multiple select2 form-control" name="categories[]"
									multiple="multiple">
									@foreach($categories as $category)
									<option {{(isset($optionCategories) && in_array($category->
										id,$optionCategories))?'selected':''}}
										value="{{$category->id}}">{{$category->name}}</option>
									@endforeach

								</select>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
			@foreach ($products as $product)
			<div class="col-sm-4">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center">{{$product->name}}</h5>
						<p class="card-text"><b>{{$product->price}} $</b></p>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of
							the card's content.</p>
					</div>
				</div>
			</div>
			@endforeach
			<div class="col-sm-12">
				{{ $products->links("pagination::bootstrap-4") }}
			</div>
		</div>
	</div>
	<!-- /Page Header -->




</div>

<!-- /Page Wrapper -->


@endsection




@section('js')
<script src="{{asset('dashboard/js/select2.min.js')}}"></script>
<script>
	$(document).ready(function() {
		$('.js-example-basic-multiple').select2();
	});
</script>

@endsection