<?php
    $setting = App\Models\Setting::first();
    Session::put('admin_lang', 'en');
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="shortcut icon"  href="<?php echo e(asset($setting->favicon)); ?>"  type="image/x-icon">
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <?php echo $__env->yieldContent('title'); ?>
  <title><?php echo e(__('admin.Login')); ?></title>


  <link rel="stylesheet" href="<?php echo e(asset('backend/css/bootstrap.min.css')); ?>">
  <link href="<?php echo e(asset('backend/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(asset('backend/fontawesome/css/all.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/css/bootstrap-social.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/css/components.css')); ?>">
  <?php if($setting->text_direction == 'rtl'): ?>
    <link rel="stylesheet" href="<?php echo e(asset('backend/css/rtl.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('backend/css/dev_rtl.css')); ?>">
    <?php endif; ?>
  <link rel="stylesheet" href="<?php echo e(asset('toastr/toastr.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/css/bootstrap4-toggle.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/css/dev.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/css/select2.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/css/tagify.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/css/bootstrap-tagsinput.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/css/fontawesome-iconpicker.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/css/bootstrap-datepicker.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/clockpicker/dist/bootstrap-clockpicker.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/datetimepicker/jquery.datetimepicker.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/css/iziToast.min.css')); ?>">

  <script src="<?php echo e(asset('backend/js/jquery-3.7.1.min.js')); ?>"></script>
  <style>
    .fade.in {
        opacity: 1 !important;
    }

    .tox .tox-promotion,
    .tox-statusbar__branding{
        display: none !important;
    }
</style>

</head>
<?php /**PATH C:\xampp\htdocs\axtro\axtro_laravel\resources\views/admin/header.blade.php ENDPATH**/ ?>