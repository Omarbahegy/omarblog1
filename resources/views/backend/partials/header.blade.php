  <header class="main-header">
    <!-- Logo -->
    <a href="{{ route('backend.dashboard') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Wb</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>{{ config('app.name') }}</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('backend/adminlte/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                    <span class="hidden-xs">{{ Auth::user()->name}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ asset('backend/adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                            <p>

                            {{ Auth::user()->name }}
                            <small>{{ Auth::user()->email}}</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
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
                    </ul>
                </li>    
            </ul>
        </div>
    </nav>
</header>