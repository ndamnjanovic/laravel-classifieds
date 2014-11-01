<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials.head')
  </head>

  <body>
     @include('partials.header')

     @yield('content', 'This is default')

     @include('partials.footer')
     @include('partials.foot')
  </body>
</html>