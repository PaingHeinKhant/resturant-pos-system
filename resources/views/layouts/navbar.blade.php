<nav class="navbar  navbar-expand-lg navbar-light bg-white shadow-sm sticky-top" style="z-index: 1">
    <div class="container px-3 py-2">
{{--        <a class="navbar-brand fw-bold" href="{{ url('/') }}">--}}
{{--            Dashboard--}}
{{--        </a>--}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

{{--                <form class="d-flex" role="search">--}}
{{--                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">--}}
{{--                    <button class="btn btn-outline-primary" type="submit">Search</button>--}}
{{--                </form>--}}

            </ul>


            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <div class="d-flex align-items-center">
                    @yield('searchText')
                    @yield('search')
                </div>

                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item px-4 " >
                            {{ Auth::user()->name }}
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
