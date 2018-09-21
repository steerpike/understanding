<!DOCTYPE html>
 
<html lang="en">
 
 <head>
 
   @include('partials.head')
 
 </head>
 
 <body>
  <div id="app">
      @yield('content')
  </div>
 
  @include('partials.footer-scripts')
 
 </body>
 
</html>