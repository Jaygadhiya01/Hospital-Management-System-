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
      <div class="container" align="center" style="padding-top: 50px;">

        <table style="background-color: black;">
          <tr>
            <th style="padding:10px">Doctor name</th>
            <th style="padding:10px">Phone</th>
            <th style="padding:10px">Speciality</th>
            <th style="padding:10px">Image</th>
            <th style="padding:10px">delete</th>
            <th style="padding:10px">update</th>
          </tr>
          
           @foreach ($dot as $info)
          <tr   align="center" style="background-color: skyblue;">
            <td>{{$info->name}}</td>
            <td>{{$info->phone}}</td>
            <td>{{$info->Speciality}}</td>
             <td><img src="doctorimage/{{$info->Image}}" alt="image" width="100" height="100" /></td>

             <td ><a onclick="return confirm('you are sure to delete this doctor')" class="btn btn-danger" href="{{url('deletedoctor',$info->id)}}">delete</a> </td>

             <td ><a class="btn btn-primary" href="{{url('updatedoctor',$info->id)}}">update</a> </td>

          </tr>
          @endforeach
        </table>

      </div>
    </div>
    <!-- container-scroller -->
    @include('script')
    <!-- End custom js for this page -->
  </div>
</body>
</html>
