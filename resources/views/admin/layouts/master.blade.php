<!DOCTYPE html>
<html lang="en">
    <head>
    @include('admin.layouts.style')
    @yield('css')
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            @include('admin.layouts.menu')
			<!-- /Header -->
			
			<!-- Sidebar -->
            @include('admin.layouts.sidebar')
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					@yield('content')
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		@include('admin.layouts.script')
        @yield('js')
		
    </body>
</html>