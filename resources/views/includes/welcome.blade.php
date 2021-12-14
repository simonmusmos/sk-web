@extends('welcome')
@section('content')
    <div id="hero" class="jumbotron aos-init aos-animate welcome-page-one" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="100" style="width: 100%;">
    <!-- <div class="container"> -->
        <div class="row align-items-center h-100" style="margin-left: 0; margin-right: 0; width: 100%">
            <div class="col-lg-4 col-md-12 col-sm-12 order-1" style="padding:0" id="hero-text-div">
                <h1 class="hero-title aos-init aos-animate pl-5 text-right" id="title-hero" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200" style="text-align: left;">Ang mga <span class="text-color-main">Kabataan</span> ang pag-asa ng <span class="text-color-main">Bayan</span>.</h1>
                <!-- <p class="hero-cta" id="hero-btn" data-aos="fade-right"data-aos-easing="ease-in-out" data-aos-delay="300">
                    <a class="cta-btn cta-btn--hero">
                        Know More
                    </a>
                </p> -->
            </div>
            <div class="col-lg-8 col-md-12 order-2" style="margin-left: 0; padding: 0" id="hero-img-div">
                <img src="{{ asset('img/sk-logo.png') }}" style="height: 100%" class="img-fluid">
            </div>
        </div>
    </div>
    <div style="position: absolute; bottom:-650px; background-color: #333; width: 100%; height: 20%; z-index: -200; margin-bottom: -20px;" data-aos="fade-up" data-aos-easing="ease-in-out" style="height: 650px" data-aos-delay="200"></div>
    
    <section id="projects">
            <div class="container">
                <div class="project-wrapper">
                    <h2 class="section-title" data-aos="zoom-in" data-aos-easing="ease-in-out">SK Officials</h2>
                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200" style="margin-bottom: 20px;">
                            <div class="react-reveal project-wrapper__image">
                                <img src="{{ asset('img/officials/president.png') }}"style="width: 60%">
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="project-wrapper__text mx-auto">
                                <h2 class="project-wrapper__text-title projttl mb-1" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="100">Trixie Anne N. Bayombon</h2>
                                <div data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="200">
                                    <h3 class="mb-4 proj-desc ">SK Chairperson &nbsp 2018 - 2022</h3>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>

                    <div class="row">
                        
                        <div class="col-lg-4 d-flex align-items-center d-sm-none show-lg">
                            <div class="project-wrapper__text">
                                <h2 class="project-wrapper__text-title projttl mb-1" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="100">Veronica L. Broso</h2>
                                <div data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">
                                    <h3 class="mb-4 proj-desc ">SK Secretary &nbsp 2018 - 2022</h3>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="200" style="margin-bottom: 20px;">
                            <div class="react-reveal project-wrapper__image">
                                <img src="{{ asset('img/officials/secretary.png') }}"style="width: 60%">
                            </div>
                        </div>

                        <div class="col-lg-4 d-flex align-items-center d-md-none show-sm">
                            <div class="project-wrapper__text mx-auto">
                                <h2 class="project-wrapper__text-title projttl mb-1 " data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="100">Veronica L. Broso</h2>
                                <div data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">
                                    <h3 class="mb-4 proj-desc ">SK Secretary &nbsp 2018 - 2022</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200" style="margin-bottom: 20px;">
                            <div class="react-reveal project-wrapper__image">
                                <img src="{{ asset('img/officials/treasurer.png') }}"style="width: 60%">
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="project-wrapper__texy mx-auto">
                                <h2 class="project-wrapper__text-title projttl mb-1" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="100">Judy Anne M. De Leon</h2>
                                <div data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="200">
                                    <h3 class="mb-4 proj-desc ">SK Treasurer &nbsp 2018 - 2022</h3>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>

                    <div class="row">
                        
                        <div class="col-lg-4 d-flex align-items-center d-sm-none show-lg">
                            <div class="project-wrapper__text">
                                <h2 class="project-wrapper__text-title projttl mb-1" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="100">Jechris A. Aunario</h2>
                                <div data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">
                                    <h3 class="mb-4 proj-desc ">SK Kagawad &nbsp 2018 - 2022</h3>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="200" style="margin-bottom: 20px;">
                            <div class="react-reveal project-wrapper__image">
                                <img src="{{ asset('img/officials/kagawad-1.png') }}"style="width: 60%">
                            </div>
                        </div>

                        <div class="col-lg-4 d-flex align-items-center d-md-none show-sm">
                            <div class="project-wrapper__text mx-auto">
                                <h2 class="project-wrapper__text-title projttl mb-1" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="100">Jechris A. Aunario</h2>
                                <div data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">
                                    <h3 class="mb-4 proj-desc ">SK Kagawad &nbsp 2018 - 2022</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200" style="margin-bottom: 20px;">
                            <div class="react-reveal project-wrapper__image">
                                <img src="{{ asset('img/officials/kagawad-2.png') }}"style="width: 60%">
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="project-wrapper__text mx-auto">
                                <h2 class="project-wrapper__text-title projttl mb-1" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="100">Michaela D. Angbengco</h2>
                                <div data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="200">
                                    <h3 class="mb-4 proj-desc ">SK Kagawad &nbsp 2018 - 2022</h3>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>

                    <div class="row">
                        
                        <div class="col-lg-4 d-flex align-items-center d-sm-none show-lg">
                            <div class="project-wrapper__text">
                                <h2 class="project-wrapper__text-title projttl mb-1" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="100">Lawrence Ralph A. Niedo</h2>
                                <div data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">
                                    <h3 class="mb-4 proj-desc ">SK Kagawad &nbsp 2018 - 2022</h3>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="200" style="margin-bottom: 20px;">
                            <div class="react-reveal project-wrapper__image">
                                <img src="{{ asset('img/officials/kagawad-3.png') }}"style="width: 60%">
                            </div>
                        </div>

                        <div class="col-lg-4 d-flex align-items-center d-md-none show-sm">
                            <div class="project-wrapper__text mx-auto">
                                <h2 class="project-wrapper__text-title projttl mb-1" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="100">Lawrence Ralph A. Niedo</h2>
                                <div data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">
                                    <h3 class="mb-4 proj-desc ">SK Kagawad &nbsp 2018 - 2022</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200" style="margin-bottom: 20px;">
                            <div class="react-reveal project-wrapper__image">
                                <img src="{{ asset('img/officials/kagawad-4.png') }}"style="width: 60%">
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="project-wrapper__text mx-auto">
                                <h2 class="project-wrapper__text-title projttl mb-1" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="100">Lesley Anne B. Barredo</h2>
                                <div data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="200">
                                    <h3 class="mb-4 proj-desc ">SK Kagawad &nbsp 2018 - 2022</h3>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>

                    <div class="row">
                        
                        <div class="col-lg-4 d-flex align-items-center d-sm-none show-lg">
                            <div class="project-wrapper__text">
                                <h2 class="project-wrapper__text-title projttl mb-1" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="100">Jayvee Ann F. Ronquillo</h2>
                                <div data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">
                                    <h3 class="mb-4 proj-desc ">SK Kagawad &nbsp 2018 - 2022</h3>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="200" style="margin-bottom: 20px;">
                            <div class="react-reveal project-wrapper__image">
                                <img src="{{ asset('img/officials/kagawad-5.png') }}"style="width: 60%">
                            </div>
                        </div>

                        <div class="col-lg-4 d-flex align-items-center d-md-none show-sm">
                            <div class="project-wrapper__text mx-auto">
                                <h2 class="project-wrapper__text-title projttl mb-1" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="100">Jayvee Ann F. Ronquillo</h2>
                                <div data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">
                                    <h3 class="mb-4 proj-desc ">SK Kagawad &nbsp 2018 - 2022</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer navbar-static-bottom" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="100">
            <div class="container">
                <a href="#top" aria-label="Back To Top" class="back-to-top">
                    <i class="fa fa-angle-up fa-2x" aria-hidden="true">

                    </i>
                </a>
                <div class="social-links">
                    <a href="https://instagram.com/simonmusmos" rel="noopener noreferrer" target="_blank" aria-label="instagram">
                        <i class="fa fa-instagram fa-inverse">

                        </i>
                    </a>
                    <a href="https://www.facebook.com/MusmosSimon" rel="noopener noreferrer" target="_blank" aria-label="facebook">
                        <i class="fa fa-facebook fa-inverse">

                        </i>
                    </a>
                    <a href="https://www.linkedin.com/in/simon-musmos-34324517b/" rel="noopener noreferrer" target="_blank" aria-label="linkedin">
                        <i class="fa fa-linkedin fa-inverse">

                        </i>
                    </a>
                    <a href="https://github.com/simonmusmos" rel="noopener noreferrer" target="_blank" aria-label="github">
                        <i class="fa fa-github fa-inverse">

                        </i>
                    </a>
                </div>
            <hr>
            <p class="footer__text">© 2021 - Website developed and powered by <a href="https://github.com/simonmusmos" target="_blank" rel="noopener noreferrer">Simon Musmos</a></p>
            </div>
        </footer>
@endsection