<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a href="{{ route('home') }}" class="navbar-brand">
                <h2>MADSTRAV</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link active" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Paket Travel</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Service
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Link</a></li>
                            <li><a class="dropdown-item" href="#">Link</a></li>
                            <li><a class="dropdown-item" href="#">Link</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Testimonial</a>
                    </li>

                    @guest
                        <!-- Mobile Button -->
                        <form class="form-inline d-sm-block d-md-none">
                            <button class="btn btn-login my-2 my-sm-0" type="button"
                                onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                                Masuk
                            </button>
                        </form>

                        <!-- Desktop Button -->
                        <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                                onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                                Masuk
                            </button>
                        </form>
                    @endguest

                    @auth
                        <!-- Mobile Button -->
                        <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-login my-2 my-sm-0" type="submit">
                                Keluar
                            </button>
                        </form>

                        <!-- Desktop Button -->
                        <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}"
                            method="POST">
                            @csrf
                            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                                Keluar
                            </button>
                        </form>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</div>
