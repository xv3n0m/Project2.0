<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="nav has-shadow">
            <div class=container>
                <div class="nav-left">
                    <a class="nav-item" href="{{route('home')}}">
                       <img src="{{asset('images/project_2.0.png')}}" alt="Project_2.0 Logo" /> 
                    </a>
                    <a href="#" class="nav-item is-tab is-hidden-mobile m-l-10">Learn</a>
                    <a href="#" class="nav-item is-tab is-hidden-mobile">Discuss</a>
                    <a href="#" class="nav-item is-tab is-hidden-mobile">Share</a>
                </div>

                <div class="nav-right" style="overflow: visible;">
                    @if (!Auth::guest())
                        <a href="#" class="nav-item is-tab">Login</a>
                        <a href="#" class="nav-item is-tab">Join the Community</a>
                    @else
                        <div class="dropdown">
                          <button class="nav-item is-tab dropdown-toggle">
                            <figure class="image is-16x16" style="margin-right: 8px;">
                              <img src="http://bulma.io/images/jgthms.png">
                            </figure>

                          </button>
                          <button class="dropdown is-aligned-right nav-item is-tab" >
                            Hey Yudhi
                            <ul class="dropdown-menu" style="overflow: visible;">
                              <li><a href="#">
                                    <span class="icon">
                                      <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                                    </span>Profile
                                  </a>
                              </li>
                              <li><a href="#">
                                    <span class="icon">
                                      <i class="fa fa-fw fa-bell m-r-5"></i>
                                    </span>Notifications
                                  </a>
                              </li>
                              <li><a href="#">
                                    <span class="icon">
                                      <i class="fa fa-fw fa-cog m-r-5"></i>
                                    </span>Settings
                                  </a>
                              </li>
                              <li class="seperator"></li>
                              <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                    <span class="icon">
                                      <i class="fa fa-fw fa-sign-out m-r-5"></i>
                                    </span>
                                    Logout
                                  </a>
                              </li>
                            </ul>
                          </button>
                        </div>
                    @endif

                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
