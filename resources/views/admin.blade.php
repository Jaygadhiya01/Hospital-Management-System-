
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('sidebar')
      <!-- partial -->
      
      @include('navbar')
        <!-- partial -->
    @include('body')

    <!-- container-scroller -->
       @include('script')
    <!-- End custom js for this page -->
  </div>
  </body>
</html>