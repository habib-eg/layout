<x-auth>
    <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
            <div class="p-4 m-3">
                <img src="assets/img/stisla-fill.svg" alt="logo" width="80"
                     class="shadow-light rounded-circle mb-5 mt-2">
                <h4 class="text-dark font-weight-normal"> @lang('Welcome to') <span
                        class="font-weight-bold">{{ config('app.name') }}</span></h4>
                <p class="text-muted">
                    @lang('Before you get started, you must login or register if you don\'t already have an account.')
                </p>
                <form method="POST" action="#" class="needs-validation" novalidate="">@csrf
                    <x-input-form-group id="email" type="email" minlength="7" name="email" tabindex="1" required
                                        autofocus>
                        <x-slot name="label"> @lang('Email') </x-slot>
                    </x-input-form-group>
                    <x-input-form-group id="password" type="password" minlength="7" name="password" tabindex="2"
                                        required>
                        <x-slot name="label"> @lang('Password') </x-slot>
                    </x-input-form-group>

                    <div class="form-group">
                        <x-custom-control name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                            <x-slot name="label">@lang('Remember Me')</x-slot>
                        </x-custom-control>
                    </div>

                    <div class="form-group text-right">
                        <a href="auth-forgot-password.html" class="float-left mt-3">
                            @lang('Forgot Password?')
                        </a>
                        <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                            @lang('Login')
                        </button>
                    </div>

                    <div class="mt-5 text-center">
                        @lang('Don\'t have an account?') <a href="auth-register.html">@lang('Create new one')</a>
                    </div>
                </form>

                <div class="text-center mt-5 text-small">
                    <x-layout-copy-right></x-layout-copy-right>
                    <div class="mt-2">
                        <a href="#">@lang('Privacy Policy')</a>
                        <div class="bullet"></div>
                        <a href="#">@lang('Terms of Service')</a>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
            data-background="assets/img/unsplash/login-bg.jpg">
            <div class="absolute-bottom-left index-2">
                <div class="text-light p-5 pb-2">
                    <div class="mb-5 pb-3">
                        <h1 class="mb-2 display-4 font-weight-bold">@lang('Good Morning')</h1>
                        <h5 class="font-weight-normal text-muted-transparent">@lang('Bali, Indonesia')</h5>
                    </div>
                    @lang('Photo by')
                    <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">
                        {{ config('app.name') }}
                    </a>
                    @lang('on')
                    <a class="text-light bb" target="_blank" href="https://unsplash.com">
                        @lang('Unsplash')
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-auth>
