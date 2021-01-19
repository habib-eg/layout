<x-layout-auth-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                <div class="login-brand">
                    <x-app-logo></x-app-logo>
                </div>

                <div class="card card-primary">
                    <div class="card-header"><h4>@lang('layout.register')</h4></div>

                    <div class="card-body">
                        <form method="POST" action="#" class="needs-validation" novalidate="">@csrf
                            <div class="row">
                                <x-layout-input-form-group group-class="col-6"  id="first_name" type="text" minlength="3" name="first_name" tabindex="1" required
                                                    autofocus>
                                    <x-slot name="label"> @lang('layout.first_name') </x-slot>
                                </x-layout-input-form-group>
                                <x-layout-input-form-group group-class="col-6"  id="last_name" type="text" minlength="3" name="last_name" tabindex="1" required>
                                    <x-slot name="label"> @lang('layout.last_name') </x-slot>
                                </x-layout-input-form-group>
                            </div>

                            <x-layout-input-form-group id="email" type="email" minlength="7" name="email" tabindex="2" required>
                                <x-slot name="label"> @lang('layout.email') </x-slot>
                            </x-layout-input-form-group>

                            <div class="row">
                                <x-layout-input-form-group group-class="col-6" id="password" type="password" minlength="8" class="pwstrength" data-indicator="pwindicator" name="password" tabindex="3"
                                                    required>
                                    <x-slot name="label"> @lang('layout.password') </x-slot>
                                    <x-slot name="footer">
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </x-slot>
                                </x-layout-input-form-group>
                                <x-layout-input-form-group group-class="col-6" id="password2" type="password" minlength="8" name="password_confirmation" tabindex="4"
                                                    required>
                                    <x-slot name="label"> @lang('layout.password_confirmation') </x-slot>
                                </x-layout-input-form-group>
                            </div>

                            <div class="form-group">
                                <x-custom-control name="agree" class="custom-control-input" tabindex="3" id="agree">
                                    <x-slot name="label">@lang('layout.i_agree_with_the_terms_and_conditions')</x-slot>
                                </x-custom-control>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    @lang('layout.register')
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="simple-footer">
                    <x-layout-copy-right></x-layout-copy-right>
                </div>
            </div>
        </div>
    </div>
</x-layout-auth-layout>
