<div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning position:fixed shadow p-3 mb-5 ">
        <div class="container ">
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
                        <a class="nav-link active   hover" aria-current="page" href="{{ route('homepage') }}">HOME</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('work.with.us') }}">LAVORA CON
                            NOI</a>
                    </li>





                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('article.create') }}">PUBLICA ARTICOLO</a>
                    </li>


                    @auth


                        <li class="nav-item">
                            <a class="nav-link text-success" href="  {{ route('admin.dashboard') }} ">DASHBOARD</a>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.dashboard') }}">WRITER </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.dashboard') }}">REVISOR </a>
                        </li>




                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <li class="nav-item">
                            <a class="nav-link text-bg-danger rounded mx-3" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('LOGOUT') }}
                            </a>
                        </li>



                        {{-- User navigation section --}}


                        @guest

                            @if (!Auth::guard('admin')->check())
                                <li class="nav-item list-unstyled ">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>

                                <li class="nav-item list-unstyled ">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @endif

                        @endguest

                    </ul>

                @endauth
                <li class="nav-item dropdown list-unstyled ">

                    @guest
                    <li class="list-unstyled ">
                        <a class="dropdown-item bg-danger text-center rounded p-2"
                            href="{{ route('register') }}">ROGISTER</a>
                    </li>

                    <li class=" list-unstyled ">
                        <a class="dropdown-item bg-danger mx-2 text-center rounded p-2"
                            href="{{ route('login') }}">LOGIN</a>
                    </li @endguest @auth <li class="nav-item list-unstyled ">

                    <a class="nav-item text-dark link-underline-light  " style="text-decoration: none">BENVENUTO
                        {{ Auth::user()->name }}</a>
                    </li>




                    <li class="nav-item list-unstyled  ">
                        <a class="dropdown-item bg-success rounded mx-2 p-2 text-center mb-0  "
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('form-logout').submit();">LOGOUT</a>
                        <form method="POST" action="{{ route('logout') }}" style="display:  none" id="form-logout">
                            @csrf
                        </form>
                        </a>
                    </li>

                @endauth



            </div>
        </div>
    </nav>

</div>
