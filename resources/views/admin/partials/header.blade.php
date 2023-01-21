<nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">

            <div class="container-fluid">

                <div class="navbar-brand px-4">
                    <div class="logo">
                        <a class="text-decoration-none text-light" href="{{route('home')}}"><h1><i class="fa-duotone fa-l"></i><i class="fa-duotone fa-f"></i></h1></a>
                    </div>
                </div>

                <div>
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
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
                        <li class="nav-item">
                            <form action="{{route('admin.projects.index')}}" method="GET">
                                @csrf
                                <input class="form-control d-inline-block w-75 px-5" type="text" name="search" placeholder="Find into the projects">
                                <button class="btn btn-outline-secondary mb-1" type="submit">Find</button>
                            </form>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase pb-page text-light" href="{{route('home')}}"><i class="fa-solid fa-earth-americas me-1"></i>Public Page</a>
                        </li>


                        <li class="nav-item px-3">
                                <a class="dropdown-item text-light mt-2 px-3 text-uppercase fs-6" href="{{ route('logout') }}" onclick="event.preventDefault();
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





