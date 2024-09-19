<?php
    $setting = App\Models\Setting::first();
?>

<div class="modal fade" tabindex="-1" role="dialog" id="deleteModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><?php echo e(__('admin.Item Delete Confirmation')); ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p><?php echo e(__('admin.Are You sure delete this item ?')); ?></p>
        </div>
        <div class="modal-footer bg-whitesmoke br">
            <form id="deleteForm" action="" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field("DELETE"); ?>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo e(__('admin.Close')); ?></button>
                <button type="submit" class="btn btn-primary"><?php echo e(__('admin.Yes, Delete')); ?></button>
            </form>
        </div>
      </div>
    </div>
  </div>




  <script src="<?php echo e(asset('backend/js/popper.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/datatables/jquery.dataTables.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/datatables/dataTables.bootstrap4.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/js/jquery.nicescroll.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/js/moment.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/js/stisla.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/js/scripts.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/js/custom.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/js/select2.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/js/tagify.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/js/bootstrap-tagsinput.min.js')); ?>"></script>
  <script src="<?php echo e(asset('toastr/toastr.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/js/bootstrap4-toggle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/js/fontawesome-iconpicker.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/js/bootstrap-datepicker.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/clockpicker/dist/bootstrap-clockpicker.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/datetimepicker/jquery.datetimepicker.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/js/iziToast.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/js/modules-toastr.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/tinymce/js/tinymce/tinymce.min.js')); ?>"></script>

    <script>
        <?php if(Session::has('messege')): ?>
        var type="<?php echo e(Session::get('alert-type','info')); ?>"
        switch(type){
            case 'info':
                toastr.info("<?php echo e(Session::get('messege')); ?>");
                break;
            case 'success':
                toastr.success("<?php echo e(Session::get('messege')); ?>");
                break;
            case 'warning':
                toastr.warning("<?php echo e(Session::get('messege')); ?>");
                break;
            case 'error':
                toastr.error("<?php echo e(Session::get('messege')); ?>");
                break;
        }
        <?php endif; ?>
    </script>

    <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <script>
                toastr.error('<?php echo e($error); ?>');
            </script>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>



<script>
    (function($) {
    "use strict";
    $(document).ready(function () {
        tinymce.init({
            selector: '.summernote',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ]
        });
        $('#dataTable').DataTable();
        $('.select2').select2();
        $('.sub_cat_one').select2();
        $('.tags').tagify();
        $('.datetimepicker_mask').datetimepicker({
            format:'Y-m-d H:i',

        });
        $('.custom-icon-picker').iconpicker({
            templates: {
                popover: '<div class="iconpicker-popover popover"><div class="arrow"></div>' +
                    '<div class="popover-title"></div><div class="popover-content"></div></div>',
                footer: '<div class="popover-footer"></div>',
                buttons: '<button class="iconpicker-btn iconpicker-btn-cancel btn btn-default btn-sm">Cancel</button>' +
                    ' <button class="iconpicker-btn iconpicker-btn-accept btn btn-primary btn-sm">Accept</button>',
                search: '<input type="search" class="form-control iconpicker-search" placeholder="Type to filter" />',
                iconpicker: '<div class="iconpicker"><div class="iconpicker-items"></div></div>',
                iconpickerItem: '<a role="button" href="javascript:;" class="iconpicker-item"><i></i></a>'
            }
        })
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            startDate: '-Infinity'
        });
        $('.clockpicker').clockpicker();

    });

    })(jQuery);
</script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\axtro\axtro_laravel\resources\views/admin/footer.blade.php ENDPATH**/ ?>