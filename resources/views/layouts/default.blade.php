<!DOCTYPE html>
<html lang="en">

  <head>
    @include('partials.head')
  </head>

  <body style="direction: {{ config('app.locale') == 'ar' ? 'rtl' : 'ltr' }}"

    <!-- Navigation -->
    
    @include('partials.navbar')
    

    <!-- Page Header -->
      
      @yield('header')
      

    <!-- Main Content -->
    <div class="container">
      <div class="row">
            @yield('content')
      </div>
    </div>

    <hr>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('Theme/Clean_blog/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('Theme/Clean_blog/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('Theme/Clean_blog/js/clean-blog.min.js') }}"></script>

  </body>

</html>
