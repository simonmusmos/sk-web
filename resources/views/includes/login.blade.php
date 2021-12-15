@extends('welcome')
@section('content')
    
    <div id="registration-background">
            <!-- MultiStep Form -->
<div class="row">
    <div class="col-md-6 col-md-offset-3 mx-auto">
        <form id="login-form" class="msform" method="POST" action="{{ route('login.custom') }}">
            @csrf
            <!-- progressbar -->
            <!-- fieldsets -->
            <fieldset title="personal">
                <h2 class="fs-title">Admin Login</h2>
                <h3 class="fs-subtitle">Please enter your given credentials.</h3>
                <input type="email" name="email" placeholder="Email"/>
                <input type="password" name="password" placeholder="Password"/>
                <input type="button" name="submit" class="submit action-button" value="Submit"/>
            </fieldset>
        </form>
    </div>
</div>
<!-- /.MultiStep Form -->
</div>

        <footer class="footer navbar-static-bottom mt-auto" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="100" style="z-index: -1;">
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