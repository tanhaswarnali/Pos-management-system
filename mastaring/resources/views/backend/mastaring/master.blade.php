
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

 <!-- ########## START: MAIN PANEL ########## -->
 <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Dashboard</h4>
        
        </div>
      </div>

      <div class="br-pagebody">
        
          
  @yield('swarnali')



      </div><!-- br-pagebody -->
        @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    @include('backend.includes.scripts')
    

    
  </body>
</html>
