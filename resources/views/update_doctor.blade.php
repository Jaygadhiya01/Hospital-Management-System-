


<!DOCTYPE html>
<html lang="en">
  <head>
  	<base href="/public">
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
  <div class="container" align="center" style="padding: 100px;">

     @if(session()->has('message'))

       <div class="alert alert-success">

        <button type="button" class="close" data-dismiss="alert">X</button>
         
         {{session()->get('message')}}
       </div>
       @endif

                <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px;">
                       <label>Docter name</label>
                       <input type="text" name="name" value="{{$data->name}}"> 
                    </div>  
                    <div style="padding: 15px;">
                       <label>phone</label>
                       <input type="number" name="phone" value="{{$data->phone}}"> 
                    </div>  
                    <div style="padding: 15px;">
                       <label>Speciality</label>
                       <input type="text" name="Speciality" value="{{$data->Speciality}}"> 
                    </div>  
                    <div style="padding: 15px;">
                       <label>old image</label>
                       <img height="150px" width="150px" src="doctorimage/{{$data->Image}}">
                    </div>  
                     <div style="padding: 15px;">
                       <label>change image</label>
                       <input type="file" name="file">
                     </div>  
                       <div style="padding: 15px;">
                       <input type="submit" class="btn btn-primary">
                     </div>
                </form>     
        </div>

    <!-- container-scroller -->
       @include('script')
    <!-- End custom js for this page -->
  </div>
  </body>
</html>