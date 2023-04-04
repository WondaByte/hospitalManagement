
<!DOCTYPE html>
<html lang="en">
  <head>

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
     <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
      <!-- partial -->
      /<?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
      
      
       
      <div class="container-fluid page-body-wrapper">

            
        <div class="container" align="center" style="padding-top:120px;;"> 

            <?php if(session()->has('message')): ?>

            <div class="alert alert-success">
                <button type="button"class="close" data-dismiss="alert">
                x
                </button>
                <?php echo e(session()->get('message')); ?>

            </div>
            
            <?php endif; ?>

            <form action="<?php echo e(('upload_doctor')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div style="padding:15px;">
                    <label>Doctor Name</label>
                    <input type="text" style="color:black;"name="name"placeholder="Type in the NAME" required="">
                </div>

                <div style="padding:15px;">
                    <label>Phone</label>
                    <input type="number" style="color:black;"name="number"placeholder="Type in the phone number"required="">
                </div>

                <div style="padding:30px;">
                    <label>Speciality</label>
                    <select name="speciality" style="color:black; width: 200px;"required="">
                        <option>--Select--</option>
                        <option value="skin">SKIN</option>
                        <option value="heart">HEART</option>
                        <option value="eye">EYE</option>
                        <option value="nose">NOSE</option>
                    </select>
                </div>

                <div style="padding:15px;">
                    <label>Room</label>
                    <input type="number" style="color:black;"name="number"placeholder="Type in the room number"required="">
                </div>

                <div style="padding:15px;">
                    <label>Doctor Image</label>
                    <input type ="file" name="file"required="">
                </div>
                <div style="padding:15px;">
                    
                    <input type ="submit" class="btn btn-success">
                </div>


            </form>
        </div>
      </div>





  <!-- page-body-wrapper ends -->




    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH C:\wamp64\www\hos\resources\views/admin/add_doctor.blade.php ENDPATH**/ ?>