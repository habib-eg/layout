<?php

namespace Habib\Layout\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Socialite
 * @package Habib\Layout\Models
 */
class Socialite extends Model
{
    /**
     * @var string
     */
    protected $table = "socialites";
    /**
     * @var string[]
     */
    protected $fillable = [
      'provider',
      'provider_id',
      'owner_id',
      'owner_type',
      'token'
    ];

}
