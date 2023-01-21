<nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">

            <div class="container-fluid">

                <div class="navbar-brand px-4">
                    <div class="logo">
                        <a class="text-decoration-none text-light" href="{{route('home')}}"><h1><i class="fa-duotone fa-l"></i><i class="fa-duotone fa-f"></i></h1></a>
                    </div>
                </div>

                <div>
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link text-light text-uppercase fs-6" href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-light text-uppercase fs-6" href="{{ route('register') }}">Register</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item d-flex">
                            <a class="nav-link text-uppercase pb-page text-light" href="{{route('home')}}" target="_blank"><i class="fa-solid fa-earth-americas me-1"></i></a>
                            <a class="nav-link text-uppercase pb-page text-light" href="https://github.com/LucaFabbozzo" target="_blank"><i class="fa-brands fa-github d-inline me-1"></i></a>
                        </li>


                        <li class="nav-item">
                                <a class="dropdown-item text-light px-3 mt-1 fs-6" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                    <img class="avatar" src="{{ Vite::asset('resources/img/luca.jpg')}}" alt="">
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
</nav>





