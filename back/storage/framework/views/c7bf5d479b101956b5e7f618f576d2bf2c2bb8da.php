<?php
    $setting = App\Models\Setting::first();
    $footer = App\Models\Footer::first();
?>

<?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a target="_blank" href="<?php echo e($setting->frontend_url); ?>" class="nav-link nav-link-lg"><i class="fas fa-home"></i> <?php echo e(__('admin.Visit Website')); ?></i></a>

          </li>

          <?php
              $header_admin=Auth::guard('admin')->user();
              $setting = App\Models\Setting::first();
                $default_avatar = array(
                    'image' => $setting->default_avatar
                );
                $default_avatar = (object) $default_avatar;

          ?>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <?php if($header_admin->image): ?>
              <img alt="image" src="<?php echo e(asset($header_admin->image)); ?>" class="rounded-circle mr-1">
              <?php else: ?>
              <img alt="image" src="<?php echo e(asset($default_avatar->image)); ?>" class="rounded-circle mr-1">
              <?php endif; ?>
            <div class="d-sm-none d-lg-inline-block"><?php echo e($header_admin->name); ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">

              <a href="<?php echo e(route('admin.profile')); ?>" class="dropdown-item has-icon">
                <i class="far fa-user"></i> <?php echo e(__('admin.Profile')); ?>

              </a>
              <div class="dropdown-divider"></div>
              <a href="<?php echo e(route('admin.logout')); ?>" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();
              document.getElementById('admin-logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> <?php echo e(__('admin.Logout')); ?>

              </a>
            
            <form id="admin-logout-form" action="<?php echo e(route('admin.logout')); ?>" method="POST" class="d-none">
                <?php echo csrf_field(); ?>
            </form>
            


            </div>
          </li>
        </ul>
      </nav>




      <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php echo $__env->yieldContent('admin-content'); ?>



      <footer class="main-footer">
        <div class="footer-left">
          <?php echo e($footer->copyright); ?>

        </div>
        <div class="footer-right">
            <?php echo e(__('App Version')); ?> : <?php echo e($setting->app_version); ?>

          </div>
      </footer>
    </div>
  </div>

  <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\axtro\axtro_laravel\resources\views/admin/master_layout.blade.php ENDPATH**/ ?>