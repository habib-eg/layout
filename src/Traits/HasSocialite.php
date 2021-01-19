<?php

namespace Habib\Layout\Traits;
use Habib\Layout\Models\Socialite;

/**
 * Trait HasSocialite
 * @package Habib\Layout\Traits
 */
trait HasSocialite
{
    public function socialites()
    {
        return $this->morphMany(config('layout.socialite_model',Socialite::class),config('layout.socialite_morph_name','owner'));
    }

}
