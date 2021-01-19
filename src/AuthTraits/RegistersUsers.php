<?php

namespace Habib\Layout\AuthTraits;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait RegistersUsers
{
    use RedirectsUsers;
    /**
     * @var string
     */
//    protected $viewName = 'auth.register';

    protected $autoLogin = true;

    protected $guard = null;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view($this->viewName);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        if ($this->isAutoLogin()) {
            $this->guard()->login($user);
        }

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
                    ? new JsonResponse([], 201)
                    : redirect($this->redirectPath());
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard($this->getGuard());
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {

    }

    /**
     * @param bool $autoLogin
     * @return RegistersUsers
     */
    public function setAutoLogin(bool $autoLogin)
    {
        $this->autoLogin = $autoLogin;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAutoLogin(): bool
    {
        return $this->autoLogin;
    }

    /**
     * @return null
     */
    public function getGuard()
    {
        return $this->guard;
    }

    /**
     * @param null $guard
     * @return RegistersUsers
     */
    public function setGuard($guard)
    {
        $this->guard = $guard;
        return $this;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     * @return RegistersUsers
     */
    public function setModel(string $model)
    {
        $this->model = $model;
        return $this;
    }
}
