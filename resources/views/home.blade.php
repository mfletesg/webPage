@extends('layouts.index')


@section('content')
	  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{URL::asset('img/20190921_1810734.jpg')}}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Miguel Fletes</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/MiguelFg94" class="twitter" target="_blank"><i class="bx bxl-twitter" ></i></a>
          <a href="https://www.facebook.com/miguel.fletesgarcia/" class="facebook" target="_blank"><i class="bx bxl-facebook" ></i></a>
          <a href="https://www.instagram.com/mike_fletes/"  target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-spotify"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>General</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Miguel Fletes <label class="subTitleInfo">(Mike Fletes)</label></h1> 
      <p>I'm <span class="typed" data-typed-items="Open Source ❤️, UI/UX Designer, Developer Laravel, Developer Vtex.IO, Developer IONIC, Developer React, Photographer"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="
         ">
          <h2 id="aboutText">About</h2>
          <p><b>Web Developer Full Stack</b> graduated from Instituto Tecnológicode Colima as a Computer Engineer specializing in <b>"High Performance Software"</b>, passionate about Open Source technologies.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{URL::asset('img/PSX_20191026_045117.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Web Developer &amp; Mobile Developer.</h3>
            <p class="fst-italic">
              Details About Me:
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>22 December 1994</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>https://github.com/mfletesg</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>5551860276</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>📍Villa de Alvarez Colima MX ,<br>📍Nicolas Romero Estado de Mexico MX</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>27</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Software Engineer</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>mfletesg@outlook.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
           
          </div>
        </div>

      </div>
    </section><!-- End About Section -->



    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
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
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Miguel Fletes Garcia</h4>
              <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
              <ul>
                <li>Portland par 127,Orlando, FL</li>
                <li>(123) 456-7891</li>
                <li>alice.barkley@example.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Instituto Tecnológico de Colima</h4>
              <div class="imageCenterContainer">
                <img class="mr-3 imgTecColima"  src="{{URL::asset('img/itcolima.svg')}}" alt="Generic placeholder image" >
              </div>
              <h5>Title: Informatics Engineer.</h5>
              <h5>2012 - 2018</h5>
              <p><em>Villa de Alvarez Colima, Mexico</em></p>
              <a href="https://www.colima.tecnm.mx">www.colima.tecnm.mx</a>
            </div>
            <div class="resume-item">
              <h4>CECYTEM Nicolás Romero #2</h4>
              <div class="imageCenterContainer">
                <img class="mr-3 imgTecColima"  src="{{URL::asset('img/cecytem.jpg')}}" alt="Generic placeholder image" >
              </div>
              <h5>2009 - 2012</h5>
              <p><em>Nicolas Romero Estado de Mexico, Mexico</em></p>
              <p>Title: Certificate, Computer Technician</p>
              <a href="https://cecytem.edomex.gob.mx/nicolas_romero_ii">https://cecytem.edomex.gob.mx/nicolas_romero_ii</a>
              
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Punto Commerce </h4>
              <div class="imageCenterContainer">
                <img class="mr-3 imgPuntoCommerce"  src="{{URL::asset('img/PC_logo_2020_1-3484729.png')}}" alt="Generic placeholder image" >
              </div>
                
                <div class="media-body">
                  <h5>Middle Software Developer Full Stack</h5>
                  <h5>2020 - Present</h5>
                  <p><em>Guadalajara Jalisco Mexico (Remote)</em></p>
                  <ul>
                    <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                  </ul>
                </div>

            </div>
            <div class="resume-item">
              <h4>CIMA Logistic</h4>
              <div class="imageCenterContainer">
                <img class="mr-3 imgCIMA" src="{{URL::asset('img/logo-cima.png')}}" alt="Generic placeholder image" >
              </div>
              <h5>Software Developer Full Stack</h5><h5>2020 - 2019</h5>
              <p><em>Manzanillo Colima Mexico</em></p>
              <ul>
                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
              </ul>
            </div>

            <div class="resume-item">
              <h4>ColimaSoft</h4>
              <div class="imageCenterContainer">
                <img class="mr-3 imgColimaSoft"  src="{{URL::asset('img/LOGO12.0f0d9fbf.png')}}" alt="Generic placeholder image" >
              </div>
              <h5>Junior Software Developer</h5><h5>2019 - 2018</h5>
              <p><em>Colima Colima Mexico</em></p>
              <ul>
                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    



   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Villa de Alvarez Colima Mexico</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>mfletesg@gmail.com</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@stop