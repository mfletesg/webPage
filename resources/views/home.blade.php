@extends('layouts.index')
@section('content')

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

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

              </div>
              <!-- /.card-body -->
            </div>
            <h1>Miguel Fletes <label class="subTitleInfo">(Mike Fletes)</label></h1>
            <p><span class="typed" id="textAbout" data-typed-items="I ❤️ Open Source, I'm Developer Laravel, I'm Developer Vtex.IO, I'm Developer IONIC, I'm Developer React, I'm Developer Angular"></span></p>
            <div class="social-icons">

              <a class="social-icon social-icon--github" href="https://github.com/mfletesg" target="_blank">
                <i class="fa fa-github"></i>
              </a>
              <a class="social-icon social-icon--twitter" href="https://twitter.com/mike_fletes" target="_blank">
                <i class="fa fa-twitter"></i>
              </a>
              <a class="social-icon social-icon--instagram" href="https://www.instagram.com/mike_fletes" target="_blank">
                <i class="fa fa-instagram"></i>
              </a>
              <a class="social-icon social-icon--facebook" href="https://www.facebook.com/miguel.fletesgarcia" target="_blank">
                <i class="fa fa-facebook"></i>
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="content content-about">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
              </div>
              <h2 class="about-title">About</h2>
              <div data-aos="fade-up" data-aos-offset="0" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="false" data-aos-anchor-placement="top-top top-bottom center-center">
                <div id="bar">
                  <div class="button-windows">
                    <div id="button-red"></div>
                    <div id="button-yellow"></div>
                    <div id="button-green"></div>
                  </div>
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
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <section id="skills" class="content   skills section-bg">
        <div class="container container-skills">
          <div class="section-title">
            <h2 class="skills-title">Skills</h2>
            <p class="skills-description">My skills are based on Full Stack development for mobile and web applications, I also design vector drawings and designs for smart watches</p>
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
                <span class="skill"><img src="img/logo-javascript.svg" alt="Bootstrap" class="svgTecnologies"></i> JavaScript <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="progress">
                <span class="skill"><img src="img/react-2.svg" alt="Bootstrap" class="svgTecnologies"> React <i class="val">75%</i></span>
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
      {{-- <section id="contact" class="content content-contact resume section-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="titleContact">Contact</h2>
              <p class="textContact">Send me a message to drink a coffee, talk about code and software projects!!</p>

              <div class="row">
                <div class="col-sm-8 col-md-8  col-lg-8 ">


                  <div class="card card-info card-contact">

                    <p></p>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal form-body-contact">
                      <div class="card-body card-body-contact">
                        <div class="row">
                          <div class="col-sm-6 col-lg-6 ">
                            <div class="input-group">
                              <input type="text" class=" inputContact" id="inputName" placeholder="Name">
                            </div>
                            <!-- /input-group -->
                          </div>
                          <!-- /.col-lg-6 -->
                          <div class="col-sm-6 col-lg-6 ">
                            <div class="input-group">
                              <input type="email" class=" inputContact" id="inputEmail" placeholder="Email">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="input-group">
                              <input type="text" class="inputContact" id="inputSubject" placeholder="Subject">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="input-group">
                              <textarea class="inputContact" rows="3" placeholder="Enter ..." id="inputMessage"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="card-contact-button">
                          <button class="custom-btn btn-5"><span>Send Message!</span></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-img-contact">

                  <div class="avatar">
                    <img src="{{URL::asset('img/langfr-220px-GNOME_Terminal_icon_2019.svg.png')}}" class="img-fluid mb-2" alt="white sample">
                  </div>

                </div>
              </div>
            </div>
          </div>
      </section> --}}
      <!-- Main content -->
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <p class="text-footer">Make with 🎸, 🍺, ☕ and Open Source</p>
    </footer>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
</body>
@stop