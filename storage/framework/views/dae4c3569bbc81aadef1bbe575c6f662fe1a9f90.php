
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
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
      <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->

        
        <div class="container-fluid page-body-wrapper">
            <div align="center" style="padding-top: 100px;">
            
                <table>
                    <tr style="background-color:black;">
                        <th style="padding:10px;">Doctor Name</th>
                        <th style="padding:10px;">Phone</th>
                        <th style="padding:10px;">Speciality</th>
                        <th style="padding:10px;">Room Number</th>
                        <th style="padding:10px;">Image</th>
                        <th style="padding:10px;">Delete</th>
                        <th style="padding:10px;">Update</th>
                    </tr>

                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr align="center" style="background-color:aqua;">>
                        <td><?php echo e($doctor->name); ?></td>
                        <td><?php echo e($doctor->phone); ?></td>
                        <td><?php echo e($doctor->speciality); ?></td>
                        <td><?php echo e($doctor->room); ?></td>
                        <td><img height="100" width="100" src="doctorimage/<?php echo e($doctor->image); ?>"</td>
                        <td onclick="return confirm('are you sure to delete this?')">
                            <a class="btn btn-danger" href="<?php echo e(url('deletedoctor',$doctor->id)); ?>">Delete</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="<?php echo e(url('updatedoctor',$doctor->id)); ?>">Update</a>
                        </td>
                    </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            </div>

        
    







  <!-- page-body-wrapper ends -->




    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH C:\wamp64\www\hos\resources\views/admin/showdoctor.blade.php ENDPATH**/ ?>