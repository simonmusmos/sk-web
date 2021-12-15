@extends('welcome')
@section('content')
    
    <div id="registration-background">
            <!-- MultiStep Form -->
<div class="row pt-5">
    <div class="col-md-8 col-md-offset-3 mx-auto ">
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="fs-title">Sangguniang Kabataan Members</h2>
                <form action="{{ route('registration.list') }}" method="GET" role="search">
                    <div class="input-group rounded col-md-12 mb-3">
                        <input type="search" name="key" class="form-control rounded py-4" placeholder="Search" aria-label="Search"
                        aria-describedby="search-addon" value="{{ app('request')->input('key') }}"/>
                        <button type="submit" class="input-group-text border-0 px-4" id="search-addon">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
                <!--Table-->
                <table class="table table-hover table-responsive-lg">
                    <!--Table head-->
                    <thead class="mdb-color darken-3 py-4">
                        <tr class="text-white">
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                        </tr>
                    </thead>
                    <!--Table head-->
                    <!--Table body-->
                    <tbody>
                        
                        @foreach($members as $member)
                            <tr>
                                <th scope="row">{{ $member->first_name }}</th>
                                <td>{{ $member->middle_name }}</td>
                                <td>{{ $member->last_name }}</td>
                                <td>{{ $member->gender }}</td>
                                <td>{{ $member->email }}</td>
                                <td>{{ $member->contact_number }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <!--Table body-->
                </table>
                <!--Table-->

                <!-- Pagination -->
                <div class="d-flex justify-content-center">
                    {!! $members->links() !!}
                </div>
            </div>
        </div>
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