<x-layout-auth-layout>
    <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
            <div class="p-4 m-3">
                <x-layout-app-logo></x-layout-app-logo>
                <h4 class="text-dark font-weight-normal"> @lang('layout.welcome_to') <span
                        class="font-weight-bold">{{ config('app.name') }}</span></h4>
                <p class="text-muted">
                    @lang('layout.before_you_get_started_you_must_login_or_register_if_you_dont_already_have_an_account')
                </p>
                <form method="POST" action="#" class="needs-validation" novalidate="">@csrf
                    <x-layout-input-form-group id="email" type="email" minlength="7" name="email" tabindex="1" required
                                        autofocus>
                        <x-slot name="label"> @lang('layout.email') </x-slot>
                    </x-layout-input-form-group>
                    <x-layout-input-form-group id="password" type="password" minlength="7" name="password" tabindex="2"
                                        required>
                        <x-slot name="label"> @lang('layout.password') </x-slot>
                    </x-layout-input-form-group>

                    <div class="form-group">
                        <x-custom-control name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                            <x-slot name="label">@lang('layout.remember_me')</x-slot>
                        </x-custom-control>
                    </div>

                    <div class="form-group text-right">
                        <a href="auth-forgot-password.html" class="float-left mt-3">
                            @lang('layout.forgot_password')
                        </a>
                        <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                            @lang('layout.login')
                        </button>
                    </div>

                    <div class="mt-5 text-center">
                        @lang('layout.dont_have_an_account') <a href="auth-register.html">@lang('layout.create_new')</a>
                    </div>
                </form>

                <div class="text-center mt-5 text-small">
                    <x-layout-copy-right></x-layout-copy-right>
                    <div class="mt-2">
                        <a href="#">@lang('layout.privacy_policy')</a>
                        <div class="bullet"></div>
                        <a href="#">@lang('layout.terms_of_service')</a>
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
                        <h1 class="mb-2 display-4 font-weight-bold">@lang('layout.good_morning')</h1>
                        <h5 class="font-weight-normal text-muted-transparent">@lang('layout.bali_Indonesia')</h5>
                    </div>
                    @lang('layout.photo_by')
                    <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">
                        {{ config('app.name') }}
                    </a>
                    @lang('layout.on')
                    <a class="text-light bb" target="_blank" href="https://unsplash.com">
                        @lang('layout.unsplash')
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout-auth-layout>
