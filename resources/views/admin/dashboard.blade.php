@extends('admin.layouts.master')



@section('css')

@endsection


@section('content')

<!-- Page Wrapper -->

<div class="content container-fluid">
					
	<!-- Page Header -->
	<div class="page-header">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="page-title">  مرحبأ {{auth()->user()->name}}</h3>
				<ul class="breadcrumb">
					<li class="breadcrumb-item active">الملف الشخصي</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /Page Header -->


	
	
</div>		
			
			<!-- /Page Wrapper -->


@endsection




@section('js')



@endsection
