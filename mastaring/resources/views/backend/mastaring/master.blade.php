
<!DOCTYPE html>
<html lang="en">
  <head>
    

    @include('backend.includes.head')
    @include('backend.includes.css')
    

    
  </head>

  <body>

    
  @include('backend.includes.leftbar')
  @include('backend.includes.topbar')
  @include('backend.includes.rightbar')

 
  @yield('swarnali')

    @include('backend.includes.footer')
    @include('backend.includes.scripts')
  </body>
</html>
