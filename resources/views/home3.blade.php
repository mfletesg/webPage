@extends('layouts.index3')

@section('content3')
<body class="hold-transition layout-top-nav">
<div class="wrapper">

	

  {{-- <a class="nav-link circle" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a> --}}


  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="jumbotron text-center h-100 jumbotron-about">
      <div class="container">
        <div class="container-about">


          <div class="card card-profile">
            <div class="card-body ">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle profile-user-img-style" src="{{URL::asset('img/20190921_1810734.jpg')}}" alt="User profile picture">
              </div>
              {{-- <h3 class="profile-username text-center profile-username-style">Miguel Fletes</h3> --}}
              {{-- <p class="text-muted text-center">Software Engineer</p> --}}
            </div>
            <!-- /.card-body -->
          </div>


          <h1>Miguel Fletes <label class="subTitleInfo">(Mike Fletes)</label></h1> 
          <p>I'm <span class="typed" id="textAbout" data-typed-items="❤️ Open Source, Developer Laravel, Developer Vtex.IO, Developer IONIC, Developer React, Developer Angular"></span></p>
        </div>
      </div>
    </section>



    <section class="content content-about">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">


            <h2 class="about-title">About</h2>

            <div id="bar">
              <div id="button-red"></div>
              <div id="button-yellow"></div>
              <div id="button-green"></div>
            </div>
            <div id="screen">
              <p class="command">about</p>
              <p class="response"><b>Web Developer Full Stack</b> graduated from Instituto Tecnológicode Colima as a Computer Engineer specializing in <b>"High Performance Software"</b>, passionate about Open Source technologies.</p>

              <p class="command">city</p>
              <p class="response array">
                <a class="array-element" href="#">📍Villa de Alvarez Colima MX</a>,
                <a class="array-element" href="#">📍Nicolas Romero Estado de Mexico MX</a>
              </p>

             
              <p class="command">age</p>
              <p class="response"><b>27 years</p>


              <p class="command">email</p>
              <p class="response"><b>mfletesg@outlook.com</p>  


              <p class="command">github</p>
              <p class="response ">
                <a class="array-element" href="https://github.com/mfletesg" target="_blank">https://github.com/mfletesg</a>            
              </p>
               
              
              <p class="command">
                <span class="cursor">&nbsp</span> 
              </p>
            </div>

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    {{-- <section  class="skills-backgroundTop"></section> --}}

    {{-- <section id="skills" class="content content-skills skills section-bg"> --}}<section id="skills" class="content  skills section-bg">
      <div class="container ">
        <div class="section-title">
          <h2 class="skills-title">Skills</h2>
          <p>My skills are based on Full Stack development for mobile and web applications, I also design vector drawings and designs for smart watches</p>
        </div>
        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <div class="progressTextContainer">
               <span class="skill"><img src="img/html-1.svg" alt="Bootstrap" class="svgTecnologies"> HTML <i class="val">100%</i></span>
              </div>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill"><img src="img/css-3.svg" alt="Bootstrap" class="svgTecnologies"> CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill"><img src="img/logo-javascript.svg" alt="Bootstrap" class="svgTecnologies"></i>  JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill"><img src="img/react-2.svg" alt="Bootstrap" class="svgTecnologies">  React <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill"><img src="img/mysql-6.svg" alt="Bootstrap" class="svgTecnologies">Mysql <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>



            <div class="progress">
              <span class="skill"><img src="img/ionicframework-icon.svg" alt="Bootstrap" class="svgTecnologies"> IONIC Framework <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>


            <div class="progress">
              <span class="skill"><img src="img/inkscape.svg" alt="Bootstrap" class="svgTecnologies"> Inkscape <i class="val">65%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>


            <div class="progress">
              <span class="skill"><img src="img/logo-vtex.svg" alt="Bootstrap" class="svgTecnologies "> Vtex.IO <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>



            <div class="progress">
              <span class="skill"><img src="img/semantic-ui.svg" alt="Bootstrap" class="svgTecnologies"> Semantic UI <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>


            <div class="progress">
              <span class="skill"><img src="img/swift-logo-with-text.svg" alt="Bootstrap" class="svgTecnologies"> Swift with Xcode <i class="val">40%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>



          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill"><img src="img/php-1.svg" alt="Bootstrap" class="svgTecnologies"> PHP With Laravel<i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill"><img src="img/wordpress-blue.svg" alt="Bootstrap" class="svgTecnologies"> WordPress/CMS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill"><img src="img/adobe-photoshop-2.svg" alt="Bootstrap" class="svgTecnologies"> Photoshop <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill"><img src="img/ubuntu-4.svg" alt="Bootstrap" class="svgTecnologies"> Linux with Debian (Ubuntu) <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill"><img src="img/github-icon.svg" alt="Bootstrap" class="svgTecnologies"> Git <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>


            <div class="progress">
              <span class="skill"><img src="img/spring-3.svg" alt="Bootstrap" class="svgTecnologies"> Java with Spring Boot <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>


            <div class="progress">
              <span class="skill"><img src="img/angular-icon-1.svg" alt="Bootstrap" class="svgTecnologies"> Angular <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>


            <div class="progress">
              <span class="skill"><img src="img/salesforce-2.svg" alt="Bootstrap" class="svgTecnologies"> Salesforce <i class="val">5%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>


            <div class="progress">
              <span class="skill"><img src="img/bootstrap-4.svg" alt="Bootstrap" class="svgTecnologies"> Bootstrap <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill"><img src="img/android.svg" alt="Bootstrap" class="svgTecnologies"> Android Studio With Java <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>



    <section id="resume" class="content resume section-bg">
      <div class="container ">
        <div class="section-title">
          <h2>Skills</h2>
          <p>My skills are based on Full Stack development for mobile and web applications, I also design vector drawings and designs for smart watches</p>
        </div>
      </div>
    </section>
    <!-- Main content -->
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
</body>
@stop