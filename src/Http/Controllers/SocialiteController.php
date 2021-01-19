<?php

namespace Habib\Layout\Http\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Authenticatable;
use Laravel\Socialite\Contracts\Provider;
use Laravel\Socialite\Contracts\User as SocialUser;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Class SocialiteController
 * @package Habib\Layout\Http\Controller;
 */
class SocialiteController extends Controller
{
    /**
     * @param string $provider
     * @return Provider|RedirectResponse
     */
    public function redirectHandler(string $provider)
    {
        abort_if(!config('services' . $provider), 404);
        $driver = Socialite::driver($provider);
        if ($response = $this->driverHandler($driver)) {
            return $response;
        }
        return $driver->redirect();
    }

    /**
     * @param Provider $driver
     * @return Provider|RedirectResponse|null|void
     */
    public function driverHandler(Provider $driver)
    {
        return $driver->redirect();
    }

    /**
     * @param string $provider
     * @return \Illuminate\Http\RedirectResponse|SocialUser|void
     */
    public function callbackHandler(string $provider)
    {
        abort_if(!config('services' . $provider), 404);
        $user = Socialite::driver('github')->user();
        tap($this->returnSocialUser($user,$provider),function ($authenticatable) use ($user,$provider) {
            $authenticatable->socialites()->firstOrCreate(["provider"=>$provider,"provider_id"=>$user->getId()],[ "token"=>$user->token ] );
        }
        );
        return back()->with(['success' => __('layout.welcome')]);
    }

    /**
     * @param SocialUser $user
     * @return Authenticatable
     */
    public function returnSocialUser(SocialUser $user):Authenticatable
    {

    }
}
