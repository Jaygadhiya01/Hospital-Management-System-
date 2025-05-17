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
      <div class="container" align="center" style="padding-top: 100px;">
            @if(session()->has('message'))

       <div class="alert alert-success">

        <button type="button" class="close" data-dismiss="alert">X</button>
         
         {{session()->get('message')}}
       </div>
       @endif


        <table style="background-color: black;">
          <tr>
            <th style="padding:10px">name</th>
            <th style="padding:10px">email </th>
            <th style="padding:10px">date</th>
            <th style="padding:10px">doctor</th>
            <th style="padding:10px">phone</th>
            <th style="padding:10px">message</th>
            <th style="padding:10px">status</th>
            <th style="padding:10px">user_name</th>
            <th style="padding:10px">approve</th>
            <th style="padding:10px">cancle</th>
            


          </tr>
          
           @foreach ($app as $info)
          <tr   align="center" style="background-color: skyblue;">
            <td>{{$info->name}}</td>
            <td>{{$info->email}}</td>
            <td>{{$info->date}}</td>
            <td>{{$info->doctor}}</td>
            <td>{{$info->phone}}</td>
            <td>{{$info->message}}</td>
            <td>{{$info->status}}</td>
            <td>{{$info->user_name}}</td>

            <td ><a class="btn btn-primary" href="{{url('approved',$info->id)}}">approve</a> </td>

             <td ><a onclick="return confirm('you are sure to cancle appoientment')" class="btn btn-danger" href="{{url('cancled',$info->id)}}">cancle</a> </td>

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
