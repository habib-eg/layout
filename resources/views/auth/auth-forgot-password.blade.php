<x-auth>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="login-brand">
                    <x-app-logo></x-app-logo>
                </div>

                <div class="card card-primary">
                    <div class="card-header"><h4>@lang('layout.forgot_password')</h4></div>

                    <div class="card-body">
                        <p class="text-muted">@lang('layout.we_will_send_a_link_to_reset_your_password')</p>
                        <form method="POST">@csrf
                            <x-layout-input-form-group id="email" type="email" minlength="7" name="email" tabindex="1" required
                                                autofocus>
                                <x-slot name="label"> @lang('layout.email') </x-slot>
                            </x-layout-input-form-group>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block"
                                        tabindex="4"> @lang('layout.forgot_password') </button>
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
</x-auth>
