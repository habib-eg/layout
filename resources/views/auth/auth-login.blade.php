<x-auth>
    <x-slot name="header"> @lang('Login') </x-slot>
    <x-slot name="footer">
        <div class="mt-5 text-muted text-center">
            @lang('Don\'t have an account?') <a href="auth-register.html">@lang('Create One')</a>
        </div>
    </x-slot>

    <form method="POST" action="#" class="needs-validation" novalidate="">
        <x-input-form-group id="email" type="email" minlength="7" name="email" tabindex="1" required autofocus>
            <x-slot name="label"> @lang('Email') </x-slot>
        </x-input-form-group>
        <x-input-form-group id="password" type="password" minlength="7" name="password" tabindex="2" required>
            <x-slot name="label"> @lang('Password') </x-slot>
            <x-slot name="header">
                <div class="float-right">
                    <a href="auth-forgot-password.html" class="text-small"> @lang('Forgot Password?') </a>
                </div>
            </x-slot>
        </x-input-form-group>

        <div class="form-group">
            <x-custom-control name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                <x-slot name="label">@lang('Remember Me')</x-slot>
            </x-custom-control>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4"> @lang('Login') </button>
        </div>
    </form>

    @if ($facebook= config('services.facebook') || $twitter= config('services.twitter') )
        <div class="text-center mt-4 mb-3">
            <div class="text-job text-muted">@lang('Login With Social')</div>
        </div>
        <div class="row sm-gutters">
            @if ($facebook)
                <div class="col-6">
                    <a class="btn btn-block btn-social btn-facebook">
                        <span class="fab fa-facebook"></span> @lang('Facebook')
                    </a>
                </div>
            @endif
            @if ($twitter)
                <div class="col-6">
                    <a class="btn btn-block btn-social btn-twitter">
                        <span class="fab fa-twitter"></span> @lang('Twitter')
                    </a>
                </div>
            @endif
        </div>
    @endif


</x-auth>
