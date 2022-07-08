<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Miguel Fletes</title>


	<!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">



  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  {{-- @env --}}
	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">

	  <!-- Theme style -->
	  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">

	  <!-- Theme style -->
	  <link rel="stylesheet" href="{{asset('css/home3.css')}}">

  {{-- @endenv --}}

  @production
    <link rel="stylesheet" href="{{ secure_asset('plugins/jquery/jquery.min.js') }}">
        <!-- Font Awesome -->
	  <link rel="stylesheet" href="{{secure_asset('plugins/fontawesome-free/css/all.min.css')}}">

	  <!-- Theme style -->
	  <link rel="stylesheet" href="{{secure_asset('dist/css/adminlte.min.css')}}">

	  <!-- Theme style -->
	  <link rel="stylesheet" href="{{secure_asset('css/home3.css')}}">
	@endproduction



</head>
<body>

	@yield('content')



	<!-- jQuery -->

	 {{-- @env --}}
	{{-- <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
	<script src="{{asset('dist/js/adminlte.min.js')}}"></script>


	<script src="{{asset('assets/vendor/typed.js/typed.min.js')}}" type="text/javascript"></script>

	<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}" type="text/javascript"></script> --}}
{{-- 	@endenv --}}

	@production
    <link rel="stylesheet" href="{{ secure_asset('plugins/jquery/jquery.min.js') }}">
    <link rel="stylesheet" href="{{ secure_asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}">
    <link rel="stylesheet" href="{{ secure_asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}">
    <link rel="stylesheet" href="{{ secure_asset('dist/js/adminlte.min.js') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/vendor/typed.js/typed.min.js') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/vendor/glightbox/js/glightbox.min.js') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/vendor/swiper/swiper-bundle.min.js') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/vendor/waypoints/noframework.waypoints.js') }}">
	@endproduction

	<script src="https://kit.fontawesome.com/9b26a92da5.js" crossorigin="anonymous"></script>


	  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>


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

		 	const select = (el, all = false) => {
		    el = el.trim()
		    if (all) {
		      return [...document.querySelectorAll(el)]
		    } else {
		      return document.querySelector(el)
		    }
		  }

		  let skilsContent = select('.skills-content');
		  if (skilsContent) {
		    new Waypoint({
		      element: skilsContent,
		      offset: '80%',
		      handler: function(direction) {
		        let progress = select('.progress .progress-bar', true);
		        progress.forEach((el) => {
		          el.style.width = el.getAttribute('aria-valuenow') + '%'
		        });
		      }
		    })
		  }


	    // let skilsContent = select('.skills-content');



		})
		</script>


</body>
</html>