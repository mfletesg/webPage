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
                  <img class="profile-user-img img-fluid img-circle profile-user-img-style" src="{{URL::asset('img/photo_2022-10-02_20-35-46.jpg')}}" alt="User profile picture">
                </div>

              </div>
              <!-- /.card-body -->
            </div>
            <h1>Miguel Fletes <label class="subTitleInfo">(Mike Fletes)</label></h1>
            <p><span class="typed" id="textAbout" data-typed-items="I ❤️ Open Source, I'm Developer Laravel, I'm Linuxero, I'm Developer Vtex.IO, I'm Developer IONIC, I'm Developer React, I'm Developer Angular"></span></p>
            <div class="social-icons">

              <a class="social-icon social-icon--linkedin" href="https://www.linkedin.com/in/miguel-fletes-garcia-4426b414a/" target="_blank">
                <i class="fa fa-linkedin"></i>
              </a>

              <a class="social-icon social-icon--github" href="https://github.com/mfletesg" target="_blank">
                <i class="fa fa-github"></i>
              </a>
              <a class="social-icon social-icon--twitter" href="https://twitter.com/mike_fletes" target="_blank">
                <i class="fa fa-twitter"></i>
              </a>
              <a class="social-icon social-icon--spotify" href="https://open.spotify.com/user/1295075135?si=507a29c284c34fe6" target="_blank">
                <i class="fa fa-spotify"></i>
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
                  <p class="command"><b>about<b></p>
                  <p class="response"><b>Web Developer Full Stack</b> graduated from Instituto Tecnológicode Colima as a Computer Engineer specializing in <b>"High Performance Software"</b>, passionate about Open Source technologies.</p>
                  <p class="command"><b>city<b></p>
                  <p class="response array">
                    <a class="array-element" href="https://www.google.com/maps/place/Villa+de+%C3%81lvarez,+Col./@19.2765187,-103.8204107,12z/data=!4m5!3m4!1s0x8425453ee675017d:0xb7b213275f421382!8m2!3d19.2662338!4d-103.7390574"  target="_blank" >📍Villa de Alvarez Colima MX</a>,
                    <a class="array-element" href="https://www.google.com/maps/place/Villa+Nicol%C3%A1s+Romero,+M%C3%A9x./@19.6192966,-99.342438,13z/data=!3m1!4b1!4m5!3m4!1s0x85d219638c308a05:0xc1c76fdec34cd1d8!8m2!3d19.6162033!4d-99.3001181"  target="_blank">📍Nicolas Romero Estado de Mexico MX</a>
                  </p>
                  <p class="command"><b>age<b></p>
                  <p class="response"><b>28 years</p>
                  <p class="command">hobbies</p>
                  <p class="response"><b>Listen Rock Music 🎸, Read, Drink Beer and Watch the Sunset :)</p>
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


      <section id="skills" class="content  skills section-bg">
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
                <span class="skill"><img src="img/salesforce-2.svg" alt="Bootstrap" class="svgTecnologies"> Salesforce <i class="val">25%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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

      
      <section id="experience" class="content experience content-experience section-bg">
        <div class="section-title">
          <h2 class="skills-title">Experience</h2>
          <br>
        </div>


        <div class="container">
          <div class="row">



            <div class="col-md-12">
                    <div class="main-timeline8">
                        <div class="timeline-profile">
                            <span class="timeline-icon"></span>
                            <span class="year">2012 - 2017</span>
                            <div class="timeline-content">
                                <h3 class="title">Student of the Instituto Tecnologico de Colima</h3>
                                <p class="description">
                                    I studied at the Instituto Tecnologico de Colima in the computer engineering career with a specialty in high-performance software.
                                </p>

                                <div class="container-img-timeline">
                                  <img src="img/itcolima.svg" class="img-timeline img-timeline-itcolima">
                                </div>

                                <div class="container-webpage-timeline">
                                  <a class="webpage-link" href="https://www.colima.tecnm.mx" target="_blank">
                                    https://www.colima.tecnm.mx
                                  </a>     
                                </div>

                                
                            </div>
                        </div>
  
                        <div class="timeline-profile">
                            <span class="timeline-icon"></span>
                            <span class="year">2018</span>
                            <div class="timeline-content">
                                <h3 class="title">Developer Junior in Colimasoft</h3>
                                <p class="description">
                                    My first job as a software developer was in the ColimaSoft company, where I developed web and mobile applications, especially in PHP and JavaScript.
                                </p>

                                <p class="description">
                                    ColimaSoft is a custom software development company.
                                </p>

                                <div class="container-img-timeline">
                                  <img src="img/LOGO12.0f0d9fbf.png" class="img-timeline img-timeline-colimasoft">
                                </div>

                                

                                <div class="container-webpage-timeline">
                                  <a class="webpage-link" href="https://www.colimasoft.com" target="_blank">
                                    https://www.colimasoft.com
                                  </a>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-profile">
                            <span class="timeline-icon"></span>
                            <span class="year">2019</span>
                            <div class="timeline-content">
                                <h3 class="title">Web Developer Full Stack in CIMA Group</h3>
                                <p class="description">
                                  My second job was at Grupo CIMA
                                </p>
                                <p class="description">
                                    Cima Group is a port logistics company, he worked as a Full-Stack developer creating internal modules to streamline the company's logistics processes.
                                </p>

                                <p class="description">
                                    Use web technologies such as PHP, Javascript (Angular JS), CSS (Sementic UI), and MySQL.
                                </p>
                                <div class="container-img-timeline">
                                  <img src="img/logo-cima.png" class="img-timeline img-timeline-cimagroup">
                                </div>

                                <div class="container-webpage-timeline">
                                  <a class="webpage-link" href="https://cimagroup.com.mx" target="_blank">
                                    https://cimagroup.com.mx
                                  </a>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-profile">
                            <span class="timeline-icon"></span>
                            <span class="year">2020 - Present</span>
                            <div class="timeline-content">
                                <h3 class="title">Web Developer Full Stack Middle in Punto Commerce</h3>
                                <p class="description">
                                    I currently work in an e-commerce agency called Punto Commerce, where I build integrations with NodeJS, design web pages, test and raise requirements to create ecommerce modules.
                                </p>

                                <div class="container-img-timeline">
                                  <img src="img/PC_logo_2020_1-3484729.png" class="img-timeline img-timeline-pc">
                                </div>

                                <div class="container-webpage-timeline">
                                  <a class="webpage-link" href="https://puntocommerce.com" target="_blank">
                                    https://puntocommerce.com
                                  </a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

          </div>
        </div>
      </section>



      <!--<section id="projects" class="content projects content-projects section-bg">

        <div class="container container-skills">
          <div class="section-title">
            <h2 class="skills-title">Some projects</h2>
            <br>

            <div class="row skills-content">
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22288%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20288%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_184890280cf%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_184890280cf%22%3E%3Crect%20width%3D%22288%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2296.84375%22%20y%3D%22118.8%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                  <div class="card-body">
                    <p class="card-text">TuVotoSiMX</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a type="button" target="_blank" class="btn btn-sm btn-outline-secondary" href="https://play.google.com/store/apps/details?id=com.TuVotoSiMXAPP&hl=es_MX&gl=US&pli=1">Go to Web Page</a>
                      </div>
                      <small class="text-muted">by ColimaSoft</small>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22288%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20288%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_184890280cf%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_184890280cf%22%3E%3Crect%20width%3D%22288%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2296.84375%22%20y%3D%22118.8%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                  <div class="card-body">
                    <p class="card-text">INTECON WEB</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a type="button" target="_blank" class="btn btn-sm btn-outline-secondary" href="https://solicitudes.cimalogistic.com/inteconweb/index.html#!/elegir">Go to Inteconweb</a>
                      </div>
                      <small class="text-muted">by Group CIMA</small>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22288%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20288%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_184890280cf%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_184890280cf%22%3E%3Crect%20width%3D%22288%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2296.84375%22%20y%3D%22118.8%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                  <div class="card-body">
                    <p class="card-text">Natural Scents</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                      </div>
                      <small class="text-muted">by Punto Commerce</small>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22288%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20288%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_184890280cf%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_184890280cf%22%3E%3Crect%20width%3D%22288%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2296.84375%22%20y%3D%22118.8%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                  <div class="card-body">
                    <p class="card-text">Face Watch</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a type="button" class="btn btn-sm btn-outline-secondary" href="https://solicitudes.cimalogistic.com/inteconweb/index.html#!/elegir">Go to Inteconweb</a>
                      </div>
                      <small class="text-muted">Project Freelance by Miguel Fletes</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->


      <section id="playlist" class="content content-playlist resume section-bg">
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <div class="section-title">
                <h2 class="title-photos">My playlist</h2>
              </div>
            </div>

            <div class="col-md-4">
              <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/48zDtuxp7T7GMyP6RfOsCq?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
            </div>

            <div class="col-md-4  playlist1">
              <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/0jEeuJxnkHp6xPVEPigp82?utm_source=generator&theme=0" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
            </div>

            <div class="col-md-4  playlist1">
              <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/5j9R3LNUGd4I8wb9owrPPy?utm_source=generator&theme=0" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
            </div>
          </div>
        </div>
      </section>





      <section id="jobs" class="content  content-photos section-bg">

        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-title">
               <h2 class="title-photos">My photos</h2>
              </div>
            </div>
          </div>
        </div>

        <div #swiperRef="" class="swiper mySwiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide swiper-slide-photo">
                <a href="img/photo_2023-01-05_22-48-03.jpg?text=22" data-toggle="lightbox" data-title="View of the horizon under a tree" data-gallery="gallery">
                  <img src="img/photo_2023-01-05_22-48-03.jpg?text=22" class="img-fluid img-photo mb-2" alt="black sample"/>
                </a>
            </div>

            <div class="swiper-slide swiper-slide-photo">
                <a href="img/photo_2022-12-23_14-39-36.jpg?text=21" data-toggle="lightbox" data-title="28th birthday, with coffee 🎂" data-gallery="gallery">
                  <img src="img/photo_2022-12-23_14-39-36.jpg?text=21" class="img-fluid img-photo mb-2" alt="black sample"/>
                </a>
            </div>



            <div class="swiper-slide swiper-slide-photo">
              <a href="img/photo_2022-10-02_17-53-20.jpg?text=14" data-toggle="lightbox" data-title="Colima volcano" data-gallery="gallery">
                <img src="img/photo_2022-10-02_17-53-20.jpg?text=14" class="img-fluid img-photo mb-2" alt="black sample"/>
              </a>
            </div>
            <div class="swiper-slide swiper-slide-photo">
              <a href="img/photo_2022-10-02_20-28-46.jpg?text=13" data-toggle="lightbox" data-title="Foo Fighters" data-gallery="gallery">
                <img src="img/photo_2022-10-02_20-28-46.jpg?text=13" class="img-fluid img-photo mb-2" alt="black sample"/>
              </a>
            </div>


            <div class="swiper-slide swiper-slide-photo">
                <a href="img/photo_2022-10-06_23-10-31.jpg?text=20" data-toggle="lightbox" data-title="Bicycle and Blue Sky" data-gallery="gallery">
                  <img src="img/photo_2022-10-06_23-10-31.jpg?text=20" class="img-fluid img-photo mb-2" alt="black sample"/>
                </a>
            </div>

            <div class="swiper-slide swiper-slide-photo">
                <a href="img/photo_2022-10-06_23-02-34.jpg?text=19" data-toggle="lightbox" data-title="🙂" data-gallery="gallery">
                  <img src="img/photo_2022-10-06_23-02-34.jpg?text=19" class="img-fluid img-photo mb-2" alt="black sample"/>
                </a>
            </div>

            <div class="swiper-slide swiper-slide-photo">
                <a href="img/photo_2022-10-06_23-02-32.jpg?text=18" data-toggle="lightbox" data-title="Mexico City" data-gallery="gallery">
                  <img src="img/photo_2022-10-06_23-02-32.jpg?text=18" class="img-fluid img-photo mb-2" alt="black sample"/>
                </a>
            </div>

            <div class="swiper-slide swiper-slide-photo">
              <a href="img/photo_2022-10-01_14-29-22.jpg?text=2" data-toggle="lightbox" data-title="Code in Linux" data-gallery="gallery">
                <img src="img/photo_2022-10-01_14-29-22.jpg?text=2" class="img-fluid img-photo mb-2" alt="black sample"/>
              </a>
            </div>
            <div class="swiper-slide swiper-slide-photo">
              <a href="img/photo_2022-10-01_14-40-00.jpg?text=3" data-toggle="lightbox" data-title="Colima" data-gallery="gallery">
                <img src="img/photo_2022-10-01_14-40-00.jpg?text=3" class="img-fluid img-photo mb-2" alt="red sample"/>
              </a>
            </div>
             <div class="swiper-slide swiper-slide-photo">
              <a href="img/photo_2022-10-01_14-40-08.jpg?text=4" data-toggle="lightbox" data-title="Sunset" data-gallery="gallery">
                <img src="img/photo_2022-10-01_14-40-08.jpg?text=4" class="img-fluid img-photo mb-2" alt="red sample"/>
              </a>
            </div>
             <div class="swiper-slide swiper-slide-photo">
              <a href="img/photo_2022-10-01_14-40-21.jpg?text=5" data-toggle="lightbox" data-title="Everlong 🎸" data-gallery="gallery">
                <img src="img/photo_2022-10-01_14-40-21.jpg?text=5" class="img-fluid img-photo mb-2" alt="black sample"/>
              </a>
            </div>
            <div class="swiper-slide swiper-slide-photo">
              <a href="img/photo_2022-10-01_19-32-24.jpg?text=14" data-toggle="lightbox" data-title="Acustic Guitar" data-gallery="gallery">
                <img src="img/photo_2022-10-01_19-32-24.jpg?text=14" class="img-fluid img-photo mb-2" alt="white sample"/>
              </a>
            </div>
             <div class="swiper-slide swiper-slide-photo">
              <a href="img/photo_2022-10-01_14-40-04.jpg?text=6" data-toggle="lightbox" data-title="Sunset at the beach" data-gallery="gallery">
                <img src="img/photo_2022-10-01_14-40-04.jpg?text=6" class="img-fluid img-photo mb-2" alt="white sample"/>
              </a>
            </div>
             <div class="swiper-slide swiper-slide-photo">
              <a href="img/photo_2022-10-01_14-40-13.jpg?text=7" data-toggle="lightbox" data-title="Sunrise" data-gallery="gallery">
                <img src="img/photo_2022-10-01_14-40-13.jpg?text=7" class="img-fluid img-photo mb-2" alt="white sample"/>
              </a>
            </div>
             <div class="swiper-slide swiper-slide-photo">
              <a href="img/photo_2022-10-01_14-55-55.jpg?text=8" data-toggle="lightbox" data-title="February Stars" data-gallery="gallery">
                <img src="img/photo_2022-10-01_14-55-55.jpg?text=8" class="img-fluid img-photo mb-2" alt="black sample"/>
              </a>
            </div>
             <div class="swiper-slide swiper-slide-photo">
              <a href="img/photo_2022-10-01_15-04-07.jpg?text=9" data-toggle="lightbox" data-title="River and beer" data-gallery="gallery">
                <img src="img/photo_2022-10-01_15-04-07.jpg?text=9" class="img-fluid img-photo mb-2" alt="red sample"/>
              </a>
            </div>
             <div class="swiper-slide swiper-slide-photo">
              <a href="img/photo_2022-10-01_15-04-11.jpg?text=10" data-toggle="lightbox" data-title="Book" data-gallery="gallery">
                <img src="img/photo_2022-10-01_15-04-11.jpg?text=10" class="img-fluid img-photo mb-2" alt="white sample"/>
              </a>
            </div>
             <div class="swiper-slide swiper-slide-photo">
              <a href="img/photo_2022-10-01_15-11-32.jpg?text=11" data-toggle="lightbox" data-title="Casual programming" data-gallery="gallery">
                <img src="img/photo_2022-10-01_15-11-32.jpg?text=11" class="img-fluid img-photo mb-2" alt="white sample"/>
              </a>
            </div>
            <div class="swiper-slide swiper-slide-photo">
              <a href="img/photo_2022-10-01_14-54-29.jpg?text=12" data-toggle="lightbox" data-title="Manzanillo sunset" data-gallery="gallery">
                <img src="img/photo_2022-10-01_14-54-29.jpg?text=12" class="img-fluid img-photo mb-2" alt="black sample"/>
              </a>
            </div>

            <div class="swiper-slide swiper-slide-photo">
                <a href="img/photo_2022-10-01_14-19-44.jpg?text=1" data-toggle="lightbox" data-title="Bike" data-gallery="gallery">
                  <img src="img/photo_2022-10-01_14-19-44.jpg?text=1" class="img-fluid img-photo mb-2" alt="black sample"/>
                </a>
            </div>

            <div class="swiper-slide swiper-slide-photo">
              <a href="img/photo_2022-10-02_20-29-25.jpg?text=15" data-toggle="lightbox" data-title="Bigotes" data-gallery="gallery">
                <img src="img/photo_2022-10-02_20-29-25.jpg?text=15" class="img-fluid img-photo mb-2" alt="black sample"/>
              </a>
            </div>
            <div class="swiper-slide swiper-slide-photo">
              <a href="img/photo_2022-10-02_20-29-20.jpg?text=16" data-toggle="lightbox" data-title="December Sunset" data-gallery="gallery">
                <img src="img/photo_2022-10-02_20-29-20.jpg?text=16" class="img-fluid img-photo mb-2" alt="black sample"/>
              </a>
            </div>
            <div class="swiper-slide swiper-slide-photo">
              <a href="img/photo_2022-10-02_20-49-25.jpg?text=17" data-toggle="lightbox" data-title="Watching the Horizon" data-gallery="gallery">
                <img src="img/photo_2022-10-02_20-49-25.jpg?text=17" class="img-fluid img-photo mb-2" alt="black sample"/>
              </a>
            </div>

          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>

      </section>




      


      <section id="contact" class="content content-contact resume section-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="titleContact">Contact</h2>
              <p class="textContact">Send me a message to drink a coffee or beer, talk about code and software projects!!</p>

              <div class="row">
                <div class="col-sm-8 col-md-8  col-lg-8 ">


                  <div class="card card-info card-contact">

                    <p></p>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal form-body-contact" onsubmit="return false" autocomplete="off">
                      <div class="card-body card-body-contact">
                        <div class="row">
                          <div class="col-sm-6 col-lg-6 ">
                            <div class="input-group">
                              <input type="text" class="inputContact" id="inputName" placeholder="Name">
                            </div>
                            <!-- /input-group -->
                          </div>
                          <!-- /.col-lg-6 -->
                          <div class="col-sm-6 col-lg-6 ">
                            <div class="input-group">
                              <input type="email" class="inputContact" id="inputEmail" placeholder="Email">
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
                              <textarea class="inputContactTextArea" rows="3" placeholder="Enter ..." id="inputMessage"></textarea>
                            </div>

                            <div class="characterCountContainer">
                              <label id="characterCount" class="characterCount"></label>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-6">
                            <div class="containerLoading">
                              <div class="lds-ring" id="lds-ring" ><div></div><div></div><div></div><div></div></div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="card-contact-button">
                              <button class="custom-btn btn-5" onclick="sendEmail()" id="btnSendMessage"><span>Send Message!</span></button>
                            </div>
                          </div>
                        </div>

                      </div>
                    </form>


                  </div>
                </div>

                <div class="col-sm-4 col-md-4 col-lg-4 col-img-contact">

                

                <div class="avatar">
                  <img src="{{URL::asset('img/chemla.gif')}}" class="img-fluid mb-2" alt="white sample">
                </div>


                </div>
              </div>
            </div>
          </div>
      </section>
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