

<!DOCTYPE html>
<html lang="en">
    
  <head>
    <base href="/public">
    <style type="text/css">
        label{
            display:inline-block;
            width:200px;
        }
    </style>
    @include('admin.css')

    
    <!-- Required meta tags -->
    <style type="text/css">
        label{
            display:inline-block;
            width:200px;
        }
        </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>One-Health</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar') 
      <!-- partial -->
      @include('admin.navbar') 
      
      
       
      <div class="container-fluid page-body-wrapper">
        

        <div class="container" align="center" style="padding:60px">
            @if(session()->has('message'))

        <div class="alert alert-success">
            <button type="button"class="close" data-dismiss="alert">
            x
            </button>
            {{session()->get('message')}}
        </div>
        
        @endif
            
            <form action="{{url('editdoctor',$data->id)}}" method="" enctype="multipart/form-data">
                @csrf
                <div style="padding:15px;">
                    <label>Doctor Name</label>
                    <input type="text" style="color:blue;" name="name" value={{$data->name}}>

                </div>

                <div style="padding:15px;">
                    <label>Phone</label>
                    <input type="number" style="color:blue;" name="phone" value={{$data->phone}}>

                </div>

                <div style="padding:15px;">
                    <label>Speciality</label>
                    <input type="text" style="color:blue;" name="speciality" value="{{$data->speciality}}">

                </div>

                <div style="padding:15px;">
                    <label>Room Number</label>
                    <input type="text"  style="color:blue;"  name="room" value="{{$data->room}}">

                </div>

                <div style="padding:15px;">
                    <label>Old Image</label>
                   <img height="150" width="150" src="doctorimage/{{$data->image}}">

                </div>

                <div  style="padding:15px;">
                    <label>Change Image</label>
                    <input type="file" name="file">
                </div>

                
                <div  style="padding:15px;">
                    
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
            
      </div>





  <!-- page-body-wrapper ends -->




    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>