<!DOCTYPE html>
 
<html lang="en">
 
 <head>
@if( ! empty($schema))
    @include('partials.head', array('schema' => $schema, 'title'=>$title))
@else
    @include('partials.head')
@endif

 </head>
 
 <body>
   <div>
      @include('partials.menu')
   </div>
  <div id="app">
      @yield('content')
  </div>
 
  @include('partials.footer-scripts')
 
 </body>
 
</html>