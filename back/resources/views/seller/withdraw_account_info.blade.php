<div class="alert alert-primary" role="alert">
    <h5>{{__('admin.Withdraw Limit')}} :

        {{ $setting->currency_icon }}{{ round($method->min_amount) }} - {{ $setting->currency_icon }}{{ round($method->max_amount) }} -

    </h5>
    <h5>{{__('admin.Withdraw charge')}} : {{ $method->withdraw_charge }}%</h5>
    {!! clean($method->description) !!}
</div>
