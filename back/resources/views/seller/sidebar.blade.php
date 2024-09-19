@php
    $setting = App\Models\Setting::first();
@endphp


<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{ route('seller.dashboard') }}">{{ $setting->sidebar_lg_header }}</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('seller.dashboard') }}">{{ $setting->sidebar_sm_header }}</a>
      </div>
      <ul class="sidebar-menu">
          <li class="{{ Route::is('seller.dashboard') ? 'active' : '' }}"><a class="nav-link" href="{{ route('seller.dashboard') }}"><i class="fas fa-home"></i> <span>{{__('admin.Dashboard')}}</span></a></li>

          <li class="nav-item dropdown {{ Route::is('seller.all-booking') || Route::is('seller.order-show') || Route::is('seller.pending-order') || Route::is('seller.complete-order') || Route::is('seller.complete-request') || Route::is('seller.completed-booking') || Route::is('seller.declined-booking')  ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-shopping-cart"></i><span>{{__('admin.All Orders')}}</span></a>

                <ul class="dropdown-menu">
                    <li class="{{ Route::is('seller.all-booking') || Route::is('seller.order-show') ? 'active' : '' }}"><a class="nav-link" href="{{ route('seller.all-booking') }}">{{__('admin.Order Items')}}</a></li>

                    <li class="{{ Route::is('seller.pending-order') ? 'active' : '' }}"><a class="nav-link" href="{{ route('seller.pending-order') }}">{{__('admin.Pending Items')}}</a></li>

                    <li class="{{ Route::is('seller.complete-order') ? 'active' : '' }}"><a class="nav-link" href="{{ route('seller.complete-order') }}">{{__('admin.Complete Items')}}</a></li>

                </ul>
          </li>

          <li class="nav-item dropdown {{ Route::is('seller.product.*') || Route::is('seller.active.product') || Route::is('seller.pending.product') || Route::is('seller.product-variant') || Route::is('seller.product.create') || Route::is('seller.product-review.*') ? 'active' : '' }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i><span>{{__('admin.Manage Product')}}</span></a>

            <ul class="dropdown-menu">
                <li class="{{ Route::is('seller.product.create') ? 'active' : '' }}"><a class="nav-link" href="{{ route('seller.product.create') }}">{{__('admin.Create Product')}}</a></li>

                <li class="{{ Route::is('seller.product.*') || Route::is('seller.product-variant') ? 'active' : '' }}"><a class="nav-link" href="{{ route('seller.product.index') }}">{{__('admin.All Product')}}</a></li>

                <li class="{{ Route::is('seller.active.product') ? 'active' : '' }}"><a class="nav-link" href="{{ route('seller.active.product') }}">{{__('admin.Active Product')}}</a></li>

                <li class="{{ Route::is('seller.pending.product') ? 'active' : '' }}"><a class="nav-link" href="{{ route('seller.pending.product') }}">{{__('admin.Pending Product')}}</a></li>
            </ul>
          </li>


          <li class="{{ Route::is('seller.my-withdraw.index') ? 'active' : '' }}"><a class="nav-link" href="{{ route('seller.my-withdraw.index') }}"><i class="far fa-newspaper"></i> <span>{{__('admin.My Withdraw')}}</span></a></li>



        </ul>

    </aside>
  </div>
