<!-- Navbar -->
@if(Route::current()->getName() == 'home')
<nav class="navbar navbar-non-transparent-bg navbar-expand-lg navbar-dark shadow-5-strong fixed-top">
@else
<!-- <nav class="navbar navbar-transparent-bg navbar-expand-lg navbar-dark shadow-5-strong fixed-top"> -->
<nav class="navbar navbar-non-transparent-bg navbar-expand-lg navbar-dark shadow-5-strong fixed-top">
@endif

    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Navbar brand -->

        <!-- Toggle button -->
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
            <i class="fa fa-bars" style="color: #1c2a48"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto sk-nav-main">
                <li class="nav-item mr-4">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="{{ route('registration.index') }}">Registration</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="#">Events and Programs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('registration.list') }}">Sangguniang Kabataan Members</a>
                </li>
                @if (Auth::guest())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Admin Login</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                @endif
                
                <!-- Navbar dropdown -->
                <!-- <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-mdb-toggle="dropdown"
                      aria-expanded="false"
                    >
                        Dropdown
                    </a>
                  Dropdown menu
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="#">Action</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Another action</a>
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->