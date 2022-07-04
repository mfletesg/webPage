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

	<script src="{{URL::asset('assets/vendor/glightbox/js/glightbox.min.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('assets/vendor/waypoints/noframework.waypoints.js')}}" type="text/javascript"></script>
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


	    // let skilsContent = select('.skills-content');
	    skilsContent = document.getElementsByClassName('skills-content')

	    for (var i = 0; i < skilsContent.length; i++) {
	    	if (skilsContent[i]) {
			    new Waypoint({
			      element: skilsContent[i],
			      offset: '80%',
			      handler: function(direction) {
			        let progress = select('.progress .progress-bar', true);
			        progress.forEach((el) => {
			          el.style.width = el.getAttribute('aria-valuenow') + '%'
			        });
			      }
			    })
			  }

	    }

		})
		</script>


</body>
</html>