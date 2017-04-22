<!DOCTYPE html>
<html lang="en">
@include('partials._head')


  <body>
    @include('partials._nav')


    <h1>Hello, laravel!</h1>

    <div class="container">
      @include('partials._messages')

     {{Auth::check() ? 'Logged in' : 'Logged out'}}

      @yield('content')

      @include('partials._footer')

    </div> <!-- end of container -->

    @include('partials._javascript')

    @yield('scripts')
    </body>
</html>
