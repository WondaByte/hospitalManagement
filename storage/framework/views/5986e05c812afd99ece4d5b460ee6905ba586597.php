<!DOCTYPE html>
<html lang="en">
<head>
 <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
    <body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>


            <?php if(Route::has('login')): ?>
            <?php if(auth()->guard()->check()): ?>

            <li class="nav-item">
              <a class="nav-link" style="background-color:blue; color:white;" href="<?php echo e(url('myappointment')); ?>">MY APPOINTMENT</a>
            </li>

            <?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>    
                
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
            <?php else: ?>
    
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="<?php echo e('login'); ?>">Login</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="<?php echo e('register'); ?>">Register</a>
              </li>
              <?php endif; ?>
              <?php endif; ?>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  
 

            <div class="container-fluid page-body-wrapper">

        <div align="center" style="padding:90px;">
            
            <table stylee="background-color:blue;">
            <tr style="background-color:blue;">
            <th stylye="padding:0px; font-size:20px; color:white;">DOCTOR NAME</th>
            <th stylye="padding:0px; font-size:20px; color:white;">DATE</th>
            <th stylye="padding:10px; font-size:20px; color:white;">MESSAGE</th>
            <th stylye="padding:10px; font-size:20px; color:white;">STATUS</th>
            <th stylye="padding:10px; font-size:20px; color:white;">CANCEL APPOINTMENT</th>
            </tr>

             <?php $__currentLoopData = $appoint; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appoints): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color:grey;" align="center">
                <td stylye="padding:10px; font-size:15px; color:white;"><?php echo e($appoints->doctor); ?></td>
                <td stylye="padding:10px; font-size:15px; color:white;"><?php echo e($appoints->date); ?></td>
                <td stylye="padding:10px; font-size:15px; color:white;"><?php echo e($appoints->message); ?></td>
                <td stylye="padding:10px; font-size:15px; color:white;"><?php echo e($appoints->status); ?></td>

                <td><a class="bt btn-danger" onclick="return confirm('Do you still wish to DELETE this record')"" href="<?php echo e(url('cancel_appoint',$appoints->id)); ?>">Cancel</a></td>
             
            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </table>

            </div>

          </div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html><?php /**PATH C:\wamp64\www\hos\resources\views/user/my_appointment.blade.php ENDPATH**/ ?>