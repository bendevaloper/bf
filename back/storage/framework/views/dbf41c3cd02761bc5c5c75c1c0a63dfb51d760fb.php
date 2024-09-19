<?php
    $setting = App\Models\Setting::first();
?>


<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e($setting->sidebar_lg_header); ?></a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e($setting->sidebar_lg_header); ?></a>
      </div>
      <ul class="sidebar-menu">
          <li class="<?php echo e(Route::is('admin.dashboard') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i> <span><?php echo e(__('admin.Dashboard')); ?></span></a></li>

          <li class="nav-item dropdown <?php echo e(Route::is('admin.all-booking') || Route::is('admin.order-show') || Route::is('admin.pending-order') || Route::is('admin.complete-order') || Route::is('admin.complete-request') || Route::is('admin.completed-booking') || Route::is('admin.declined-booking')  ? 'active' : ''); ?>">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-shopping-cart"></i><span><?php echo e(__('admin.All Orders')); ?></span></a>

                <ul class="dropdown-menu">
                    <li class="<?php echo e(Route::is('admin.all-booking') || Route::is('admin.order-show') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.all-booking')); ?>"><?php echo e(__('admin.All Orders')); ?></a></li>

                    <li class="<?php echo e(Route::is('admin.pending-order') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.pending-order')); ?>"><?php echo e(__('admin.Pending Orders')); ?></a></li>

                    <li class="<?php echo e(Route::is('admin.complete-order') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.complete-order')); ?>"><?php echo e(__('admin.Complete Orders')); ?></a></li>

                </ul>
          </li>

          <li class="nav-item dropdown <?php echo e(Route::is('admin.product.*') || Route::is('admin.active.product') || Route::is('admin.pending.product') || Route::is('admin.product-variant') || Route::is('admin.product.create') || Route::is('admin.product-review.*') || Route::is('admin.product-type-page.*') ? 'active' : ''); ?>">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i><span><?php echo e(__('admin.Manage Product')); ?></span></a>

            <ul class="dropdown-menu">
                <li class="<?php echo e(Route::is('admin.product.create') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.product.create')); ?>"><?php echo e(__('admin.Create Product')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.product.*') || Route::is('admin.product-variant') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.product.index')); ?>"><?php echo e(__('admin.All Product')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.active.product') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.active.product')); ?>"><?php echo e(__('admin.Active Product')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.pending.product') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.pending.product')); ?>"><?php echo e(__('admin.Pending Product')); ?></a></li>



                <li class="<?php echo e(Route::is('admin.product-review.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.product-review.index')); ?>"><?php echo e(__('admin.Review')); ?></a></li>

            </ul>
          </li>

          <li class="nav-item dropdown <?php echo e(Route::is('admin.category.*') || Route::is('admin.assign-home-category') ? 'active' : ''); ?>">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i><span><?php echo e(__('admin.Manage Category')); ?></span></a>

            <ul class="dropdown-menu">

                <li class="<?php echo e(Route::is('admin.category.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.category.index')); ?>"><?php echo e(__('admin.Category List')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.assign-home-category') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.assign-home-category')); ?>"><?php echo e(__('admin.Homepage Category')); ?></a></li>

            </ul>
          </li>


          <li class="nav-item dropdown <?php echo e(Route::is('admin.provider') || Route::is('admin.seller-requests') || Route::is('admin.seller-request') ? 'active' : ''); ?>">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span><?php echo e(__('admin.Manage Seller')); ?></span></a>
            <ul class="dropdown-menu">

                <li class="<?php echo e(Route::is('admin.provider') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.provider')); ?>"><?php echo e(__('admin.Seller List')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.seller-requests') || Route::is('admin.seller-request') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.seller-requests')); ?>"><?php echo e(__('admin.Seller Request')); ?></a></li>

            </ul>
          </li>





          <li class="nav-item dropdown <?php echo e(Route::is('admin.customer-list') || Route::is('admin.customer-show') || Route::is('admin.pending-customer-list') || Route::is('admin.send-email-to-all-customer') ? 'active' : ''); ?>">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span><?php echo e(__('admin.Users')); ?></span></a>
            <ul class="dropdown-menu">
                <li class="<?php echo e(Route::is('admin.customer-list') || Route::is('admin.customer-show') || Route::is('admin.send-email-to-all-customer') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.customer-list')); ?>"><?php echo e(__('admin.User List')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.pending-customer-list') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.pending-customer-list')); ?>"><?php echo e(__('admin.Pending User')); ?></a></li>
            </ul>
          </li>



          <li class="nav-item dropdown <?php echo e(Route::is('admin.withdraw-method.*') || Route::is('admin.provider-withdraw') || Route::is('admin.pending-provider-withdraw') || Route::is('admin.show-provider-withdraw')  ? 'active' : ''); ?>">
            <a href="#" class="nav-link has-dropdown"><i class="far fa-newspaper"></i><span><?php echo e(__('admin.Withdraw Payment')); ?></span></a>

            <ul class="dropdown-menu">
                <li class="<?php echo e(Route::is('admin.withdraw-method.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.withdraw-method.index')); ?>"><?php echo e(__('admin.Withdraw Method')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.provider-withdraw') || Route::is('admin.show-provider-withdraw') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.provider-withdraw')); ?>"><?php echo e(__('admin.Seller Withdraw')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.pending-provider-withdraw') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.pending-provider-withdraw')); ?>"><?php echo e(__('admin.Withdraw Request')); ?></a></li>

            </ul>
          </li>



          <li class="nav-item dropdown <?php echo e(Route::is('admin.maintainance-mode') || Route::is('admin.seo-setup') || Route::is('admin.default-avatar') ||  Route::is('admin.testimonial.*') || Route::is('admin.partner.*') || Route::is('admin.counter') || Route::is('admin.ad') ? 'active' : ''); ?>">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-globe"></i><span><?php echo e(__('admin.Manage Website')); ?></span></a>

            <ul class="dropdown-menu">

                <li class="<?php echo e(Route::is('admin.partner.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.partner.index')); ?>"><?php echo e(__('admin.Slider')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.testimonial.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.testimonial.index')); ?>"><?php echo e(__('admin.Testimonial')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.counter') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.counter', ['lang_code' => 'en'])); ?>"><?php echo e(__('admin.Counter')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.ad') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.ad')); ?>"><?php echo e(__('admin.Ads Banner')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.seo-setup') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.seo-setup')); ?>"><?php echo e(__('admin.SEO Setup')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.maintainance-mode') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.maintainance-mode')); ?>"><?php echo e(__('admin.Maintainance Mode')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.default-avatar') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.default-avatar')); ?>"><?php echo e(__('admin.Default Avatar')); ?></a></li>

            </ul>
          </li>


          <li class="nav-item dropdown <?php echo e(Route::is('admin.footer.*') || Route::is('admin.social-link.*') || Route::is('admin.footer-link.*') || Route::is('admin.second-col-footer-link') || Route::is('admin.third-col-footer-link') || Route::is('admin.header-info') ? 'active' : ''); ?>">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i><span><?php echo e(__('admin.Header & Footer')); ?></span></a>

            <ul class="dropdown-menu">

                <li class="<?php echo e(Route::is('admin.header-info') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.header-info')); ?>"><?php echo e(__('admin.Header Info')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.social-link.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.social-link.index')); ?>"><?php echo e(__('admin.Social Link')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.footer.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.footer.index', ['lang_code' => 'en'])); ?>"><?php echo e(__('admin.Footer')); ?></a></li>

            </ul>
          </li>



          <li class="<?php echo e(Route::is('admin.payment-method') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.payment-method')); ?>"><i class="fas fa-dollar-sign"></i> <span><?php echo e(__('admin.Payment Method')); ?></span></a></li>

        <?php
            $json_module_data = file_get_contents(base_path('modules_statuses.json'));
            $module_status = json_decode($json_module_data);

        ?>

        <?php if($module_status->PaymentGateway): ?>

        <li class="<?php echo e(Route::is('admin.payment-addon') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.payment-addon')); ?>"><i class="fas fa-dollar-sign"></i> <span><?php echo e(__('admin.Gateway')); ?><span class="badge badge-danger addon_text"><?php echo e(__('admin.addon')); ?></span></span></a></li>

        <?php endif; ?>



          <li class="nav-item dropdown <?php echo e(Route::is('admin.faq.*') || Route::is('admin.about-us.*') || Route::is('admin.terms-and-condition.*') || Route::is('admin.privacy-policy.*') || Route::is('admin.faq.*') || Route::is('admin.contact-us.*') ? 'active' : ''); ?>">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-columns"></i><span><?php echo e(__('admin.Pages')); ?></span></a>

            <ul class="dropdown-menu">
                <li class="<?php echo e(Route::is('admin.about-us.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.about-us.index', ['lang_code' => 'en'])); ?>"><?php echo e(__('admin.About Us')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.contact-us.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.contact-us.index', ['lang_code' => 'en'])); ?>"><?php echo e(__('admin.Contact Us')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.terms-and-condition.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.terms-and-condition.index', ['lang_code' => 'en'])); ?>"><?php echo e(__('admin.Terms And Conditions')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.privacy-policy.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.privacy-policy.index', ['lang_code' => 'en'])); ?>"><?php echo e(__('admin.Privacy Policy')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.faq.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.faq.index')); ?>"><?php echo e(__('admin.FAQ')); ?></a></li>

            </ul>
          </li>

          <li class="nav-item dropdown <?php echo e(Route::is('admin.blog-category.*') || Route::is('admin.edit.blog.category') || Route::is('admin.blog.*') || Route::is('admin.blog-comment.*') ? 'active' : ''); ?>">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i><span><?php echo e(__('admin.Blogs')); ?></span></a>

            <ul class="dropdown-menu">
                <li class="<?php echo e(Route::is('admin.blog-category.*') || Route::is('admin.edit.blog.category') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.blog-category.index')); ?>"><?php echo e(__('admin.Categories')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.blog.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.blog.index')); ?>"><?php echo e(__('admin.Blogs')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.blog-comment.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.blog-comment.index')); ?>"><?php echo e(__('admin.Comments')); ?></a></li>
            </ul>
          </li>

          <li class="nav-item dropdown <?php echo e(Route::is('admin.email-configuration') || Route::is('admin.email-template') || Route::is('admin.edit-email-template') ? 'active' : ''); ?>">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-envelope"></i><span><?php echo e(__('admin.Email Configuration')); ?></span></a>

            <ul class="dropdown-menu">
                <li class="<?php echo e(Route::is('admin.email-configuration') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.email-configuration')); ?>"><?php echo e(__('admin.Setting')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.email-template') || Route::is('admin.edit-email-template') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.email-template')); ?>"><?php echo e(__('admin.Email Template')); ?></a></li>
            </ul>
          </li>
          <li class="nav-item dropdown <?php echo e(Route::is('admin.admin-language') || Route::is('admin.admin-validation-language') || Route::is('admin.website-language') || Route::is('admin.website-validation-language') || Route::is('admin.languages') ? 'active' : ''); ?>">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i><span><?php echo e(__('admin.Manage Language')); ?></span></a>

            <ul class="dropdown-menu">
                <li class="<?php echo e(Route::is('admin.admin-language') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.admin-language', ['lang_code' => 'en'])); ?>"><?php echo e(__('admin.Admin Language')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.admin-validation-language') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.admin-validation-language', ['lang_code' => 'en'])); ?>"><?php echo e(__('admin.Admin Validation')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.website-language') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.website-language', ['lang_code' => 'en'])); ?>"><?php echo e(__('admin.Frontend Language')); ?></a></li>

                <li class="<?php echo e(Route::is('admin.website-validation-language') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.website-validation-language', ['lang_code' => 'en'])); ?>"><?php echo e(__('admin.Frontend Validation')); ?></a></li>

            </ul>
          </li>

          <li class="<?php echo e(Route::is('admin.currency.*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.currency.index')); ?>"><i class="fas fa-dollar-sign"></i> <span><?php echo e(__('admin.Currencies')); ?></span></a></li>

          <li class="<?php echo e(Route::is('admin.general-setting') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.general-setting')); ?>"><i class="fas fa-cog"></i> <span><?php echo e(__('admin.Setting')); ?></span></a></li>

          <?php
              $logedInAdmin = Auth::guard('admin')->user();
          ?>
          <?php if($logedInAdmin->admin_type == 1): ?>
          <li  class="<?php echo e(Route::is('admin.clear-database') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.clear-database')); ?>"><i class="fas fa-trash"></i> <span><?php echo e(__('admin.Clear Database')); ?></span></a></li>
          <?php endif; ?>

          <li class="<?php echo e(Route::is('admin.subscriber') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.subscriber')); ?>"><i class="fas fa-fire"></i> <span><?php echo e(__('admin.Subscribers')); ?></span></a></li>

          <li class="<?php echo e(Route::is('admin.contact-message') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.contact-message')); ?>"><i class="fas fa-fa fa-envelope"></i> <span><?php echo e(__('admin.Contact Message')); ?></span></a></li>

          <?php if($logedInAdmin->admin_type == 1): ?>
            <li class="<?php echo e(Route::is('admin.admin.index') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.admin.index')); ?>"><i class="fas fa-user"></i> <span><?php echo e(__('admin.Admin list')); ?></span></a></li>
          <?php endif; ?>

        </ul>

    </aside>
  </div>
<?php /**PATH C:\xampp\htdocs\axtro\axtro_laravel\resources\views/admin/sidebar.blade.php ENDPATH**/ ?>