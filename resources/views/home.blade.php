@extends('layouts.index')
@section('content')

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <div class="content-wrapper">
            <button type="button" class="btn btn-outline-primary btn-block button-language" onclick="changeLanguage()"
                id="button-language">
                🇲🇽 <label class="text-language-btn">Español</label>
            </button>

            <!-- Content Header (Page header) -->
            <section class="jumbotron text-center h-100 jumbotron-about">
                <div class="container">
                    <div class="container-about">
                        <div class="card card-profile">
                            <div class="card-body ">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle profile-user-img-style"
                                        src="{{URL::asset('img/photo_2022-10-02_20-35-46.jpg')}}"
                                        alt="User profile picture">
                                </div>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <h1>Miguel Fletes <label class="subTitleInfo">(Mike Fletes)</label></h1>
                        <p><span class="typed" id="textAbout"
                                data-typed-items="I ❤️ Open Source, I'm Developer Laravel, I'm Linuxero, I'm Developer Vtex.IO, I'm Developer IONIC, I'm Developer React, I'm Developer Angular"></span>
                        </p>
                        <div class="social-icons">
                            <a class="social-icon social-icon--linkedin"
                                href="https://www.linkedin.com/in/miguel-fletes-garcia-4426b414a/" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a class="social-icon social-icon--github" href="https://github.com/mfletesg"
                                target="_blank">
                                <i class="fa fa-github"></i>
                            </a>
                            <a class="social-icon social-icon--twitter" href="https://twitter.com/mike_fletes"
                                target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="social-icon social-icon--spotify"
                                href="https://open.spotify.com/user/1295075135?si=507a29c284c34fe6" target="_blank">
                                <i class="fa fa-spotify"></i>
                            </a>
                            <a class="social-icon social-icon--instagram" href="https://www.instagram.com/mike_fletes"
                                target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a class="social-icon social-icon--facebook"
                                href="https://www.facebook.com/miguel.fletesgarcia" target="_blank">
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
                            <h2 class="about-title" id="about-title">About</h2>
                            <div data-aos="fade-up" data-aos-offset="0" data-aos-delay="50" data-aos-duration="1000"
                                data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="false"
                                data-aos-anchor-placement="top-top top-bottom center-center">
                                <div id="bar">
                                    <div class="button-windows">
                                        <div id="button-red"></div>
                                        <div id="button-yellow"></div>
                                        <div id="button-green"></div>
                                    </div>
                                </div>
                                <div id="screen">

                                    <div class="command-title">
                                        <p class="command-title-text">miguel</p>
                                        <p class="command-git-text"><b>(master)</b></p>
                                        <p class="command-arrow"><b>⇒</b></p>
                                        <p class="command-subtitle-text" id="terminalTitle1"><b>about</b></p>
                                    </div>
                                    <p class="response" id="terminalText1"><b>Web Developer Full Stack</b> graduated
                                        from Instituto Tecnológicode Colima as a Computer Engineer specializing in
                                        <b>"High Performance Software"</b>, passionate about Open Source technologies.
                                    </p>


                                    <div class="command-title">
                                        <p class="command-title-text">miguel</p>
                                        <p class="command-git-text"><b>(master)</b></p>
                                        <p class="command-arrow"><b>⇒</b></p>
                                        <p class="command-subtitle-text" id="terminalTitle2"><b>city</b></p>
                                    </div>
                                    <p class="response array">
                                        <label class="array-element">📍Colima, Colima, Mexico</label>
                                    </p>

                                    <div class="command-title">
                                        <p class="command-title-text">miguel</p>
                                        <p class="command-git-text"><b>(master)</b></p>
                                        <p class="command-arrow"><b>⇒</b></p>
                                        <p class="command-subtitle-text" id="terminalTitle3"><b>Favorite Language</b></p>
                                    </div>
                                    <p class="response" id="terminalText3"><b>JavaScript and PHP</p>


                                    <div class="command-title">
                                        <p class="command-title-text">miguel</p>
                                        <p class="command-git-text"><b>(master)</b></p>
                                        <p class="command-arrow"><b>⇒</b></p>
                                        <p class="command-subtitle-text" id="terminalTitle4"><b>hobbies</b></p>
                                    </div>
                                    <p class="response" id="terminalText4"><b>Listen Rock Music 🎸, Read, Drink Beer and
                                            Watch the Sunset :)</p>

                                    <div class="command-title">
                                        <p class="command-title-text">miguel</p>
                                        <p class="command-git-text"><b>(master)</b></p>
                                        <p class="command-arrow"><b>⇒</b></p>
                                        <p class="command-subtitle-text"><b>github</b></p>
                                    </div>
                                    <p class="response">
                                        <a class="array-element" href="https://github.com/mfletesg"
                                            target="_blank">https://github.com/mfletesg</a>
                                    </p>



                                    <div class="command-title">
                                        <p class="command-title-text">miguel</p>
                                        <p class="command-git-text"><b>(master)</b></p>
                                        <p class="command-arrow"><b>⇒</b></p>
                                        <span class="cursor">&nbsp </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>

            <section id="skills" class="content  skills section-bg content-skills">
                <div class="container container-skills">
                    <div class="section-title">
                        <h2 class="skills-title" id="skills-title">Skills</h2>
                        <p class="skills-description" id="skills-description">My skills are based on Full Stack
                            development for mobile and web applications, I also design vector drawings and designs for
                            smart watches</p>
                    </div>
                    <div class="row skills-content">
                        <div class="col-lg-6" data-aos="fade-up">
                            <div class="progress">
                                <div class="progressTextContainer">
                                    <span class="skill"><img src="img/html-1.svg" alt="Bootstrap"
                                            class="svgTecnologies"> HTML <i class="val">100%</i></span>
                                </div>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill"><img src="img/css-3.svg" alt="Bootstrap" class="svgTecnologies"> CSS
                                    <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill"><img src="img/logo-javascript.svg" alt="Bootstrap"
                                        class="svgTecnologies"></i> JavaScript <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill"><img src="img/react-2.svg" alt="Bootstrap" class="svgTecnologies">
                                    React <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill"><img src="img/mysql-6.svg" alt="Bootstrap"
                                        class="svgTecnologies">Mysql <i class="val">80%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill"><img src="img/ionicframework-icon.svg" alt="Bootstrap"
                                        class="svgTecnologies"> IONIC Framework <i class="val">70%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill"><img src="img/inkscape.svg" alt="Bootstrap" class="svgTecnologies">
                                    Inkscape <i class="val">65%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill"><img src="img/logo-vtex.svg" alt="Bootstrap"
                                        class="svgTecnologies "> Vtex.IO <i class="val">60%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill"><img src="img/semantic-ui.svg" alt="Bootstrap"
                                        class="svgTecnologies"> Semantic UI <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill"><img src="img/swift-logo-with-text.svg" alt="Bootstrap"
                                        class="svgTecnologies"> Swift with Xcode <i class="val">40%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="progress">
                                <span class="skill"><img src="img/php-1.svg" alt="Bootstrap" class="svgTecnologies"> PHP
                                    With Laravel<i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill"><img src="img/wordpress-blue.svg" alt="Bootstrap"
                                        class="svgTecnologies"> WordPress/CMS <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill"><img src="img/adobe-photoshop-2.svg" alt="Bootstrap"
                                        class="svgTecnologies"> Photoshop <i class="val">50%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill"><img src="img/ubuntu-4.svg" alt="Bootstrap" class="svgTecnologies">
                                    Linux with Debian (Ubuntu) <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill"><img src="img/github-icon.svg" alt="Bootstrap"
                                        class="svgTecnologies"> Git <i class="val">60%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill"><img src="img/spring-3.svg" alt="Bootstrap" class="svgTecnologies">
                                    Java with Spring Boot <i class="val">55%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill"><img src="img/angular-icon-1.svg" alt="Bootstrap"
                                        class="svgTecnologies"> Angular <i class="val">80%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill"><img src="img/salesforce-2.svg" alt="Bootstrap"
                                        class="svgTecnologies"> Salesforce <i class="val">25%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill"><img src="img/bootstrap-4.svg" alt="Bootstrap"
                                        class="svgTecnologies"> Bootstrap <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill"><img src="img/android.svg" alt="Bootstrap" class="svgTecnologies">
                                    Android Studio With Java <i class="val">50%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="experience" class="content  content-svg1 section-bg"></section>




            <section id="experience" class="content experience content-experience section-bg">
                <div class="section-title">
                    <h2 class="experience-title" id="experience-title">Experience</h2>
                    <br>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-timeline8">
                                <div class="timeline-profile">
                                    <span class="timeline-icon"></span>
                                    <span class="year" id="item1Year">2012 - 2017</span>
                                    <div class="timeline-content">
                                        <h3 class="title" id="item1Title">Student of the Instituto Tecnologico de Colima
                                        </h3>
                                        <p class="description" id="item1Description">
                                            I studied at the Instituto Tecnologico de Colima in the computer engineering
                                            career with a specialty in high-performance software.
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
                                    <span class="year" id="item2Year">2018</span>
                                    <div class="timeline-content">
                                        <h3 class="title" id="item2Title">Developer Junior in Colimasoft</h3>
                                        <p class="description" id="item2Description">
                                            My first job as a software developer was in the ColimaSoft company, where I
                                            developed web and mobile applications, especially in PHP and JavaScript.
                                        </p>


                                        <div class="container-img-timeline">
                                            <img src="img/LOGO12.0f0d9fbf.png"
                                                class="img-timeline img-timeline-colimasoft">
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
                                    <span class="year" id="item3Year">2019</span>
                                    <div class="timeline-content">
                                        <h3 class="title" id="item3Title">Web Developer Full Stack in CIMA Group</h3>

                                        <p class="description" id="item3Description">
                                            Cima Group is a port logistics company, he worked as a Full-Stack developer
                                            creating internal modules to streamline the company's logistics processes.
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
                                    <span class="year" id="item4Year">2020 - 2023</span>
                                    <div class="timeline-content">
                                        <h3 class="title" id="item4Title">Web Developer Full Stack Middle in Punto
                                            Commerce</h3>
                                        <p class="description" id="item4Description">
                                            I currently work in an e-commerce agency called Punto Commerce, where I
                                            build integrations with NodeJS, design web pages, test and raise
                                            requirements to create ecommerce modules.
                                        </p>

                                        <div class="container-img-timeline">
                                            <img src="img/PC_logo_2020_1-3484729.png"
                                                class="img-timeline img-timeline-pc">
                                        </div>

                                        <div class="container-webpage-timeline">
                                            <a class="webpage-link" href="https://puntocommerce.com" target="_blank">
                                                https://puntocommerce.com
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="timeline-profile timeline-profile5">
                                    <span class="timeline-icon"></span>
                                    <span class="year" id="item5Year">2023 - Present</span>
                                    <div class="timeline-content">
                                        <h3 class="title" id="item5Title">Web Developer Full Stack Middle in CloudAppi</h3>
                                        <p class="description" id="item5Description">
                                            I currently work in an e-commerce agency called Punto Commerce, where I
                                            build integrations with NodeJS, design web pages, test and raise
                                            requirements to create ecommerce modules.
                                        </p>

                                        <div class="container-img-timeline">
                                            <img src="img/logo_cloudappi_450_150.webp"
                                                class="img-timeline img-timeline-pc">
                                        </div>

                                        <div class="container-webpage-timeline">
                                            <a class="webpage-link" href="https://cloudappi.net" target="_blank">
                                                https://cloudappi.net
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="playlist" class="content content-playlist resume section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="title-photos" id="title-playlist">My playlist</h2>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <iframe style="border-radius:12px"
                                src="https://open.spotify.com/embed/playlist/48zDtuxp7T7GMyP6RfOsCq?utm_source=generator"
                                width="100%" height="380" frameBorder="0" allowfullscreen=""
                                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                        </div>

                        <div class="col-md-4  playlist1">
                            <iframe style="border-radius:12px"
                                src="https://open.spotify.com/embed/playlist/0jEeuJxnkHp6xPVEPigp82?utm_source=generator&theme=0"
                                width="100%" height="380" frameBorder="0" allowfullscreen=""
                                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                        </div>

                        <div class="col-md-4  playlist1">
                            <iframe style="border-radius:12px"
                                src="https://open.spotify.com/embed/playlist/5j9R3LNUGd4I8wb9owrPPy?utm_source=generator&theme=0"
                                width="100%" height="380" frameBorder="0" allowfullscreen=""
                                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tweet-container">
                                <blockquote class="twitter-tweet" data-theme="dark">
                                    <p lang="en" dir="ltr">Hello<br>I’ve waited here for you<br>Everlong <a
                                            href="https://twitter.com/hashtag/FooFighters?src=hash&amp;ref_src=twsrc%5Etfw">#FooFighters</a>
                                    </p>&mdash; Foo_Lyrics (@Foo_Lyrics_) <a
                                        href="https://twitter.com/Foo_Lyrics_/status/1613843832898191361?ref_src=twsrc%5Etfw">January
                                        13, 2023</a>
                                </blockquote>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="jobs" class="content  content-photos section-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="title-photos" id="title-photos">My photos</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div #swiperRef="" class="swiper mySwiper">
                    <div class="swiper-wrapper">

                    <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2023-09-07_18-33-42.jpg?text=39" data-toggle="lightbox"
                                data-title="😀" data-gallery="gallery">
                                <img src="img/photo_2023-09-07_18-33-42.jpg?text=39" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>

                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2023-07-15_13-54-42.jpg?text=38" data-toggle="lightbox"
                                data-title="The Colour and The Shape" data-gallery="gallery">
                                <img src="img/photo_2023-07-15_13-54-42.jpg?text=38" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>

                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2023-07-15_13-53-12.jpg?text=38" data-toggle="lightbox"
                                data-title="🍓🍓🍓🍓🍓" data-gallery="gallery">
                                <img src="img/photo_2023-07-15_13-53-12.jpg?text=38" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>

                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2023-05-15_22-55-54.jpg?text=37" data-toggle="lightbox"
                                data-title="Sea" data-gallery="gallery">
                                <img src="img/photo_2023-05-15_22-55-54.jpg?text=37" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>

                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2023-05-11_21-18-24.jpg?text=36" data-toggle="lightbox"
                                data-title="Miguel Fletes" data-gallery="gallery">
                                <img src="img/photo_2023-05-11_21-18-24.jpg?text=36" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2023-04-14_21-34-36.jpg?text=35" data-toggle="lightbox"
                                data-title="Driving in the CDMX" data-gallery="gallery">
                                <img src="img/photo_2023-04-14_21-34-36.jpg?text=35" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2023-04-14_21-42-06.jpg?text=34" data-toggle="lightbox"
                                data-title="Punto Commerce Backpack" data-gallery="gallery">
                                <img src="img/photo_2023-04-14_21-42-06.jpg?text=34" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2023-04-11_14-26-31.jpg?text=33" data-toggle="lightbox"
                                data-title="Bigotes in Home" data-gallery="gallery">
                                <img src="img/photo_2023-04-11_14-26-31.jpg?text=33" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2023-04-13_14-39-24.jpg?text=32" data-toggle="lightbox"
                                data-title="Cuautla Morelos Sunset" data-gallery="gallery">
                                <img src="img/photo_2023-04-13_14-39-24.jpg?text=32" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2023-04-06_07-30-29.jpg?text=31" data-toggle="lightbox"
                                data-title="Cerveza y playa" data-gallery="gallery">
                                <img src="img/photo_2023-04-06_07-30-29.jpg?text=31" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2023-04-06_07-23-40.jpg?text=30" data-toggle="lightbox"
                                data-title="Villa de Alvarez" data-gallery="gallery">
                                <img src="img/photo_2023-04-06_07-23-40.jpg?text=30" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>

                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2023-03-24_23-53-36.jpg?text=29" data-toggle="lightbox"
                                data-title="Take a Picture" data-gallery="gallery">
                                <img src="img/photo_2023-03-24_23-53-36.jpg?text=29" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>



                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2023-02-18_15-02-22.jpg?text=28" data-toggle="lightbox"
                                data-title="Colimita 🍺" data-gallery="gallery">
                                <img src="img/photo_2023-02-18_15-02-22.jpg?text=28" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>

                        

                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2023-02-18_15-14-14.jpg?text=27" data-toggle="lightbox"
                                data-title="Code and Sunset" data-gallery="gallery">
                                <img src="img/photo_2023-02-18_15-14-14.jpg?text=27" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>


                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2023-03-16_01-54-18.jpg?text=26" data-toggle="lightbox"
                                data-title="Bike" data-gallery="gallery">
                                <img src="img/photo_2023-03-16_01-54-18.jpg?text=26" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>

                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2023-02-18_15-00-53.jpg?text=25" data-toggle="lightbox"
                                data-title="Blue Sea 🌊" data-gallery="gallery">
                                <img src="img/photo_2023-02-18_15-00-53.jpg?text=25" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>

                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2023-01-26_20-17-49.jpg?text=24" data-toggle="lightbox"
                                data-title="There is Nothing Left to Lose" data-gallery="gallery">
                                <img src="img/photo_2023-01-26_20-17-49.jpg?text=24" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>


                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2023-01-05_22-48-03.jpg?text=23" data-toggle="lightbox"
                                data-title="View of the horizon under a tree" data-gallery="gallery">
                                <img src="img/photo_2023-01-05_22-48-03.jpg?text=23" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>

                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2022-12-23_14-39-36.jpg?text=22" data-toggle="lightbox"
                                data-title="28th birthday, with coffee 🎂" data-gallery="gallery">
                                <img src="img/photo_2022-12-23_14-39-36.jpg?text=22" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>



                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2022-10-02_17-53-20.jpg?text=21" data-toggle="lightbox"
                                data-title="Colima volcano" data-gallery="gallery">
                                <img src="img/photo_2022-10-02_17-53-20.jpg?text=21" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2022-10-02_20-28-46.jpg?text=20" data-toggle="lightbox"
                                data-title="Favorite Record Foo Fighters" data-gallery="gallery">
                                <img src="img/photo_2022-10-02_20-28-46.jpg?text=20" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>


                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2022-10-06_23-10-31.jpg?text=19" data-toggle="lightbox"
                                data-title="Bicycle and Blue Sky" data-gallery="gallery">
                                <img src="img/photo_2022-10-06_23-10-31.jpg?text=19" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>

                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2022-10-06_23-02-34.jpg?text=18" data-toggle="lightbox" data-title="🙂"
                                data-gallery="gallery">
                                <img src="img/photo_2022-10-06_23-02-34.jpg?text=18" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>

                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2022-10-06_23-02-32.jpg?text=17" data-toggle="lightbox"
                                data-title="Mexico City" data-gallery="gallery">
                                <img src="img/photo_2022-10-06_23-02-32.jpg?text=17" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>

                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2022-10-01_14-29-22.jpg?text=16" data-toggle="lightbox"
                                data-title="Code in Linux" data-gallery="gallery">
                                <img src="img/photo_2022-10-01_14-29-22.jpg?text=16" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2022-10-01_14-40-00.jpg?text=15" data-toggle="lightbox"
                                data-title="Colima" data-gallery="gallery">
                                <img src="img/photo_2022-10-01_14-40-00.jpg?text=15" class="img-fluid img-photo mb-2"
                                    alt="red sample" />
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2022-10-01_14-40-08.jpg?text=14" data-toggle="lightbox"
                                data-title="Sunset" data-gallery="gallery">
                                <img src="img/photo_2022-10-01_14-40-08.jpg?text=14" class="img-fluid img-photo mb-2"
                                    alt="red sample" />
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2022-10-01_14-40-21.jpg?text=13" data-toggle="lightbox"
                                data-title="Everlong 🎸" data-gallery="gallery">
                                <img src="img/photo_2022-10-01_14-40-21.jpg?text=13" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2022-10-01_19-32-24.jpg?text=12" data-toggle="lightbox"
                                data-title="Acustic Guitar" data-gallery="gallery">
                                <img src="img/photo_2022-10-01_19-32-24.jpg?text=12" class="img-fluid img-photo mb-2"
                                    alt="white sample" />
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2022-10-01_14-40-04.jpg?text=11" data-toggle="lightbox"
                                data-title="Sunset at the beach" data-gallery="gallery">
                                <img src="img/photo_2022-10-01_14-40-04.jpg?text=11" class="img-fluid img-photo mb-2"
                                    alt="white sample" />
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2022-10-01_14-40-13.jpg?text=10" data-toggle="lightbox"
                                data-title="Sunrise" data-gallery="gallery">
                                <img src="img/photo_2022-10-01_14-40-13.jpg?text=10" class="img-fluid img-photo mb-2"
                                    alt="white sample" />
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2022-10-01_14-55-55.jpg?text=9" data-toggle="lightbox"
                                data-title="February Stars" data-gallery="gallery">
                                <img src="img/photo_2022-10-01_14-55-55.jpg?text=9" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2022-10-01_15-04-07.jpg?text=8" data-toggle="lightbox"
                                data-title="River and beer" data-gallery="gallery">
                                <img src="img/photo_2022-10-01_15-04-07.jpg?text=8" class="img-fluid img-photo mb-2"
                                    alt="red sample" />
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2022-10-01_15-04-11.jpg?text=7" data-toggle="lightbox" data-title="Book"
                                data-gallery="gallery">
                                <img src="img/photo_2022-10-01_15-04-11.jpg?text=7" class="img-fluid img-photo mb-2"
                                    alt="white sample" />
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2022-10-01_15-11-32.jpg?text=6" data-toggle="lightbox"
                                data-title="Casual programming" data-gallery="gallery">
                                <img src="img/photo_2022-10-01_15-11-32.jpg?text=6" class="img-fluid img-photo mb-2"
                                    alt="white sample" />
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2022-10-01_14-54-29.jpg?text=5" data-toggle="lightbox"
                                data-title="Manzanillo sunset" data-gallery="gallery">
                                <img src="img/photo_2022-10-01_14-54-29.jpg?text=5" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>

                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2022-10-01_14-19-44.jpg?text=4" data-toggle="lightbox" data-title="Bike"
                                data-gallery="gallery">
                                <img src="img/photo_2022-10-01_14-19-44.jpg?text=4" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>

                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2022-10-02_20-29-25.jpg?text=3" data-toggle="lightbox"
                                data-title="Bigotes" data-gallery="gallery">
                                <img src="img/photo_2022-10-02_20-29-25.jpg?text=3" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2022-10-02_20-29-20.jpg?text=2" data-toggle="lightbox"
                                data-title="December Sunset" data-gallery="gallery">
                                <img src="img/photo_2022-10-02_20-29-20.jpg?text=2" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-photo">
                            <a href="img/photo_2022-10-02_20-49-25.jpg?text=1" data-toggle="lightbox"
                                data-title="Watching the Horizon" data-gallery="gallery">
                                <img src="img/photo_2022-10-02_20-49-25.jpg?text=1" class="img-fluid img-photo mb-2"
                                    alt="black sample" />
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
                            <h2 class="titleContact" id="titleContact">Contact</h2>
                            <p class="textContact" id="textContact">Send me a message to drink a coffee or beer, talk
                                about code and software projects!!</p>

                            <div class="row">
                                <div class="col-sm-8 col-md-8  col-lg-8 ">
                                    <div class="card card-info card-contact">
                                        <p></p>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form class="form-horizontal form-body-contact" onsubmit="return false"
                                            autocomplete="off">
                                            <div class="card-body card-body-contact">
                                                <div class="row">
                                                    <div class="col-sm-6 col-lg-6 ">
                                                        <div class="input-group">
                                                            <input type="text" class="inputContact" id="inputName"
                                                                placeholder="Name">
                                                        </div>
                                                        <!-- /input-group -->
                                                    </div>
                                                    <!-- /.col-lg-6 -->
                                                    <div class="col-sm-6 col-lg-6 ">
                                                        <div class="input-group">
                                                            <input type="email" class="inputContact" id="inputEmail"
                                                                placeholder="Email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="input-group">
                                                            <input type="text" class="inputContact" id="inputSubject"
                                                                placeholder="Subject">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="input-group">
                                                            <textarea class="inputContactTextArea" rows="3"
                                                                placeholder="Enter ..." id="inputMessage"></textarea>
                                                        </div>

                                                        <div class="characterCountContainer">
                                                            <label id="characterCount" class="characterCount"></label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="containerLoading">
                                                            <div class="lds-ring" id="lds-ring">
                                                                <div></div>
                                                                <div></div>
                                                                <div></div>
                                                                <div></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="card-contact-button">
                                                            <button class="custom-btn btn-5" onclick="sendEmail()"
                                                                id="btnSendMessage"><span>Send Message!</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-img-contact">
                                    <div class="avatar">
                                        <img src="{{URL::asset('img/chemla.gif')}}" class="img-fluid mb-2"
                                            alt="white sample">
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
            <p class="text-footer" id="text-footer">Make with 🎸, 🍺, ☕ by Miguel Fletes</p>
        </footer>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
</body>
@stop
