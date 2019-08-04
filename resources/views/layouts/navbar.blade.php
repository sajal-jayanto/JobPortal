<nav class="navbar navbar-expand-md navbar-dark  bg-primary shadow-sm">
    <div class="container">
        @if(Auth::guard('web')->check())
            <a class="navbar-brand" href="{{ url('/home') }}">
                {{ config('', 'Job Portal') }}
            </a>
        @elseif(Auth::guard('company')->check())
            <a class="navbar-brand" href="{{ url('/company') }}">
                {{ config('', 'Job Portal') }}
            </a>
        @else 
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('', 'Job Portal') }}
            </a>
        @endif
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @if(Auth::guard('web')->check())    
                    <li class="nav-item active">
                        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.profile' , Auth::user()->id) }}">Profile</a>
                    </li>
                @elseif(Auth::guard('company')->check())
                    <li class="nav-item">
                        <a class="nav-link" href="/company"> Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('company.profile' , session()->get('company_id') ) }}">Profile</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('jobpost.index') }}"> Jobs </span></a>
                    </li>
                @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Register
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('register') }}">Register as user</a>
                                <a class="dropdown-item" href="{{ route('company.register') }}">Register as Company</a>
                            </div>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        @if(Auth::guard('web')->check())    
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->firstname }}  {{ Auth::user()->lastname }} <span class="caret"></span>
                            </a>
                        @else
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->companyname }} <span class="caret"></span>
                            </a>
                        @endif
                        

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>