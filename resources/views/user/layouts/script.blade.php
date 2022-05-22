<!-- jQuery -->
<script src="{{asset('dashboard/js/jquery-3.2.1.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{asset('dashboard/js/popper.min.js')}}"></script>
        <script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{asset('dashboard/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script  src="{{asset('dashboard/js/script.js')}}"></script>
		
		@include('sweet::alert')










		


<!-- Slimscroll JS -->
<script src="{{asset('dashboard/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('dashboard/js/jquery.fancybox.min.js')}}"></script>
<!-- Custom JS -->
<script  src="{{asset('dashboard/js/script.js')}}"></script>
<script  src="{{asset('dashboard/js/mask.js')}}"></script>
<script  src="{{asset('dashboard/js/jquery.maskedinput.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('dashboard/js/jquery.dataTables.min.js')}}"></script>
<!-- Bootstrap Tagsinput JS -->
<script src="{{asset('dashboard/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js')}}"></script>

@stack('scripts')