<!DOCTYPE html>
<html lang="en">
  <head>

   <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Required meta tags -->
   </head>
   <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

      <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- partial -->

      <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- partial -->
      <?php echo $__env->make('admin.body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- container-scroller -->
    <!-- plugins:js -->

  <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
    <!-- End custom js for this page -->
  </body>
</html>

<?php /**PATH E:\Mona\Project\Hospital\resources\views/admin/home.blade.php ENDPATH**/ ?>