<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Miguel Fletes</title>

	<meta content="" name="description">
  	<meta content="" name="keywords">







  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  	<!-- Vendor CSS Files -->
	<link href="{{URL::asset('bootstrap/css/bootstrap.min.css')}} " rel="stylesheet">
	<link href="{{URL::asset('bootstrap/css/bootstrap-grid.min.css')}} " rel="stylesheet">
	<link href="{{URL::asset('bootstrap/css/bootstrap-reboot.min.css')}} " rel="stylesheet">


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

	<link href="{{URL::asset('css/home2.css')}}" rel="stylesheet">

</head>
<body>


	@yield('content2')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
	<script src="{{URL::asset('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('bootstrap/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>


	<script src="{{URL::asset('assets/vendor/typed.js/typed.min.js')}}" type="text/javascript"></script>


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


      $('[data-toggle="offcanvas"]').on('click', function () {
        $('.offcanvas-collapse').toggleClass('open')
      })


      const $menu = $('#navbarToggleExternalContent');
	    $menu.on('show.bs.collapse', function () {
	      $menu.addClass('menu-show');
	    });

	    $menu.on('hide.bs.collapse', function () {
	      $menu.removeClass('menu-show');
	    });

	    


    })
  </script>
</body>
</html>