<x-auth>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="login-brand">
                    <x-app-logo></x-app-logo>
                </div>

                <div class="card card-primary">
                    <div class="card-header"><h4>@lang('Forgot Password')</h4></div>

                    <div class="card-body">
                        <p class="text-muted">@lang('We will send a link to reset your password')</p>
                        <form method="POST">
                            <x-input-form-group id="email" type="email" minlength="7" name="email" tabindex="1" required
                                                autofocus>
                                <x-slot name="label"> @lang('Email') </x-slot>
                            </x-input-form-group>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block"
                                        tabindex="4"> @lang('Forgot Password') </button>
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
