<x-layout-auth-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="login-brand">
                    <x-app-logo></x-app-logo>
                </div>

                <div class="card card-primary">
                    <div class="card-header"><h4>@lang('layout.login')</h4></div>

                    <div class="card-body">
                        <form method="POST" action="#" class="needs-validation" novalidate="">@csrf
                            <x-layout-input-form-group id="email" type="email" minlength="7" name="email" tabindex="1" required autofocus>
                                <x-slot name="label"> @lang('layout.email') </x-slot>
                            </x-layout-input-form-group>
                            <x-layout-input-form-group id="password" type="password" minlength="7" name="password" tabindex="2" required>
                                <x-slot name="label"> @lang('layout.password') </x-slot>
                                <x-slot name="header">
                                    <div class="float-right">
                                        <a href="auth-forgot-password.html" class="text-small"> @lang('layout.forgot_password') ? </a>
                                    </div>
                                </x-slot>
                            </x-layout-input-form-group>

                            <div class="form-group">
                                <x-custom-control name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                    <x-slot name="label">@lang('layout.remember_me')</x-slot>
                                </x-custom-control>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4"> @lang('layout.login') </button>
                            </div>
                        </form>
                        @if ($facebook= config('services.facebook') || $twitter= config('services.twitter') )
                            <div class="text-center mt-4 mb-3">
                                <div class="text-job text-muted">@lang('layout.login_with_social')</div>
                            </div>
                            <div class="row sm-gutters">
                                @if ($facebook)
                                    <div class="col-6">
                                        <a class="btn btn-block btn-social btn-facebook">
                                            <span class="fab fa-facebook"></span> @lang('layout.facebook')
                                        </a>
                                    </div>
                                @endif
                                @if ($twitter)
                                    <div class="col-6">
                                        <a class="btn btn-block btn-social btn-twitter">
                                            <span class="fab fa-twitter"></span> @lang('layout.twitter')
                                        </a>
                                    </div>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
                <div class="simple-footer">
                    <x-layout-copy-right></x-layout-copy-right>
                </div>
            </div>
        </div>
    </div>

</x-layout-auth-layout>
