<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Miguel Fletes 🎸</title>
    <link rel="icon" type="image/x-icon" href="{{asset('./img/icon-terminal.svg')}}">

    @if($name =='127.0.0.1')
        <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/ekko-lightbox/ekko-lightbox.css')}}">
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
        <script src="{{asset('js/ImgConvert.js')}}" type="text/javascript"></script>


    @else
        <link rel="stylesheet" href="{{secure_asset('plugins/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{secure_asset('dist/css/adminlte.min.css')}}">
        <link rel="stylesheet" href="{{secure_asset('plugins/ekko-lightbox/ekko-lightbox.css')}}">

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
        <script src="{{secure_asset('js/ImgConvert.js?version=1.0.2')}}" type="text/javascript"></script>
        <script src="{{secure_asset('js/s.js?version=1.0.2')}}" type="text/javascript"></script>
    @endif
</head>

<body>

    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Quick Example</h3>
                        </div>
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputIMG">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="button" class="btn btn-primary" onclick="convertIMG()">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
