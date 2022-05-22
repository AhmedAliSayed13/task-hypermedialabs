<!DOCTYPE html>
<html lang="en">
    <head>
    @include('user.layouts.style')
    @yield('css')
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            @include('user.layouts.menu')
			<!-- /Header -->
			
			<!-- Sidebar -->
            @include('user.layouts.sidebar')
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
		
		@include('user.layouts.script')
        @yield('js')
		
    </body>
</html>