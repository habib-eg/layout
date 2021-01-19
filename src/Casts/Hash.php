<?php
namespace Habib\Layout\Casts;
/**
 * Class Hash
 * @package Habib\Layout;
 */
class Hash implements \Illuminate\Contracts\Database\Eloquent\CastsInboundAttributes
{
    /**
     * The hashing algorithm.
     *
     * @var string
     */
    protected $algorithm;

    /**
     * Create a new cast class instance.
     *
     * @param  string|null  $algorithm
     * @return void
     */
    public function __construct($algorithm = null)
    {
        $this->algorithm = $algorithm;
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  array  $value
     * @param  array  $attributes
     * @return string
     */
    public function set($model, $key, $value, $attributes)
    {
        return is_null($this->algorithm)
            ? bcrypt($value)
            : hash($this->algorithm, $value);
    }
}
