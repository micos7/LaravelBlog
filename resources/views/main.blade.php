<!DOCTYPE html>
<html lang="en">
@include('partials._head')


  <body>
    @include('partials._nav')


    <h1>Hello, laravel!</h1>

    <div class="container">

      @yield('content')

      @include('partials._footer')

    </div> <!-- end of container -->

    @include('partials._javascript')
    </body>
</html>
