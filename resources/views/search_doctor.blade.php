


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
        <div class="container-fluid page-body-wrapper">
      <div class="container" align="center" style="padding-top: 90px;">

        <table style="background-color: black;">
          <tr>
            <th style="padding:20px">id</th>
            <th style="padding:20px">name</th>
            <th style="padding:40px">phone </th>
            <th style="padding:20px">Speciality</th>
            <th style="padding:20px">Image</th>
	        </tr>

      	 @foreach ($doctors as $info)
          <tr>
          	<td>{{$info->id}}</td>
          	<td>{{$info->name}}</td>
          	<td>{{$info->phone}}</td>
          	<td>{{$info->Speciality}}</td>
          	<td><img src="doctorimage/{{$info->Image}}" alt="image" width="100" height="100" /></td>
          </tr>
          @endforeach
    </table>
</div>
</div>
<a href="add_doctor">Add Doctor....</a>

    <!-- container-scroller -->
       @include('script')
    <!-- End custom js for this page -->
  </div>
  </body>
</html>