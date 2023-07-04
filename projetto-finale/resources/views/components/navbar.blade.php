<div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning static-top ">
        <div class="container">
            <a class="navbar-brand" href="{{ route('homepage') }}">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                    alt="Aulab post" height="50">
            </a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon È"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('work.with.us') }}">Work-with-us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('articles.create') }}">Publica Articolo</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Log
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @guest
                                <li>
                                    <a class="dropdown-item" href="{{ route('register') }}">Rgister</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                </li
                                 @endguest
                                 @auth
                                 <li class="nav-item">
                                <a class="nav-item">benvenuto {{ Auth::user()->name }}</a>
                                  </li>
                                <li class="nav-item">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('form-logout').submit();">logout</a>
                            <form method="POST" action="{{ route('logout') }}" style="display:  none" id="form-logout">
                                @csrf
                            </form>
                        </a>
                        </li>

                    @endauth


                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>

</div>
