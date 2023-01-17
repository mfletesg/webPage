<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>Miguel Fletes 🎸</title>
	<link rel="icon" type="image/x-icon" href="{{asset('./img/icon-terminal.svg')}}">

	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">


	<!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />



{{--   <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/home3.css')}}"> --}}

  	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

  @if($name =='127.0.0.1')
	  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
	  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
	  <link rel="stylesheet" href="{{asset('css/home3.css')}}">
	  <link rel="stylesheet" href="{{asset('plugins/ekko-lightbox/ekko-lightbox.css')}}" >


	  <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
		<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
		<script src="{{asset('assets/vendor/typed.js/typed.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}" type="text/javascript"></script>
		
		<script src="{{asset('js/TaTaNotification/tata.js')}}"></script>
		<script src="{{asset('plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>

		<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

		<script src="{{asset('js/home.js')}}" type="text/javascript"></script>
		

  @else
    <link rel="stylesheet" href="{{secure_asset('plugins/fontawesome-free/css/all.min.css')}}">
  	<link rel="stylesheet" href="{{secure_asset('dist/css/adminlte.min.css')}}">
  	<link rel="stylesheet" href="{{secure_asset('css/home3.css')}}">
  	<link rel="stylesheet" href="{{secure_asset('plugins/ekko-lightbox/ekko-lightbox.css')}}" >

  	<script src="{{secure_asset('plugins/jquery/jquery.min.js')}}"></script>
		<script src="{{secure_asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{secure_asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
		<script src="{{secure_asset('dist/js/adminlte.min.js') }}"></script>
		<script src="{{secure_asset('assets/vendor/typed.js/typed.min.js') }}"></script>
		<script src="{{secure_asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
		<script src="{{secure_asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
		<script src="{{secure_asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
		<script src="{{secure_asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
		
		<script src="{{secure_asset('js/TaTaNotification/tata.js')}}"></script>
		<script src="{{secure_asset('plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>


		<script src="{{secure_asset('js/home.js')}}" type="text/javascript"></script>
		<script src="{{secure_asset('js/s.js')}}" type="text/javascript"></script>
	@endif


	<script src="https://kit.fontawesome.com/9b26a92da5.js" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-W8TXJNX4ZG"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-W8TXJNX4ZG');
</script>


	</head>
	<body>
		@yield('content')



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


		$(document).ready(function() {

			// const typed = document.getElementById('textAbout');
		  // if (typed) {

		  // 	try {
		  // 		let objectTyped = null;
		  // 	} catch(e) {
		  // 		// statements
		  // 		console.log(e);
		  // 	}


		  //   let typed_strings = typed.getAttribute('data-typed-items')
		  //   typed_strings = typed_strings.split(',')
		  //   objectTyped = new Typed('.typed', {
		  //     strings: typed_strings,
		  //     loop: true,
		  //     typeSpeed: 100,
		  //     backSpeed: 50,
		  //     backDelay: 2000
		  //   });
		  // }

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
		});
		window.addEventListener('load', () => {


	    // let skilsContent = select('.skills-content');



		})
		</script>
	</body>

</html>