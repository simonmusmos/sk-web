@extends('welcome')
@section('content')
    
    <div id="registration-background">
            <!-- MultiStep Form -->
<div class="row">
    <div class="col-md-6 col-md-offset-3 mx-auto">
        <form id="msform" class="msform" method="POST" action="{{ route('registration.process') }}">
            @csrf
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Personal Details</li>
                <li>Contact Information</li>
                <li>Miscellaneous Information</li>
            </ul>
            <!-- fieldsets -->
            <fieldset title="personal">
                <h2 class="fs-title">Personal Information</h2>
                <h3 class="fs-subtitle">Tell us something more about you</h3>
                <input type="text" name="fname" placeholder="First Name"/>
                <input type="text" name="mname" placeholder="Middle Name"/>
                <input type="text" name="lname" placeholder="Last Name"/>
                <input type="text" name="address" placeholder="Address"/>
                <select id="gender_dp" name="gender" aria-label="gender">
                    <option selected disabled>Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                    <option value="Prefer not to tell">Prefer not to tell</option>
                </select>
                <input type="text" name="father_name" placeholder="Father's Name"/>
                <input type="text" name="mother_name" placeholder="Mother's Name"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset title="contact">
                <h2 class="fs-title">Contact Information</h2>
                <h3 class="fs-subtitle">How will we contact you</h3>
                <input type="email" name="email" placeholder="Email Address"/>
                <input type="text" name="number" placeholder="Contact Number"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset title="misc" id="misc_fieldset">
                <h2 class="fs-title">Miscellaneous Information</h2>
                <h3 class="fs-subtitle">Fill in your credentials</h3>
                <input type="text" name="education_attainment" placeholder="Education Attainment"/>
                <input type="text" name="current_work" placeholder="Current Work (Leave blank if none)"/>
                <select name="is_voter" aria-label="is_voter">
                    <option selected disabled>Voter</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
                <input type="text" disabled name="precint" placeholder="Precint Number"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
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