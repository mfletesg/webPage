<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Miguel Fletes</title>


	<!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
  <link rel="stylesheet" href="{{URL::asset('plugins/fontawesome-free/css/all.min.css')}}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::asset('dist/css/adminlte.min.css')}}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::asset('css/home3.css')}}">
</head>
<body>

	@yield('content3')



	<!-- jQuery -->
	<script src="{{URL::asset('plugins/jquery/jquery.min.js')}}"></script>
	<!-- Bootstrap 4 -->
	<script src="{{URL::asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<!-- bs-custom-file-input -->
	<script src="{{URL::asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
	<!-- AdminLTE App -->
	<script src="{{URL::asset('dist/js/adminlte.min.js')}}"></script>
	<!-- AdminLTE for demo purposes -->
	{{-- <script src="{{URL::asset('dist/js/demo.js')}}"></script> --}}


	<script src="{{URL::asset('assets/vendor/typed.js/typed.min.js')}}" type="text/javascript"></script>
	<!-- Page specific script -->
	<script>
	$(function () {
	  bsCustomFileInput.init();
	});
	</script>


	<script type="text/javascript">
		window.addEventListener('load', () => {
			const typed = document.getElementById('textAbout');
		  if (typed) {
		    let typed_strings = typed.getAttribute('data-typed-items')
		    typed_strings = typed_strings.split(',')
		    new Typed('.typed', {
		      strings: typed_strings,
		      loop: true,
		      typeSpeed: 100,
		      backSpeed: 50,
		      backDelay: 2000
		    });
		  }


		})
		</script>


</body>
</html>