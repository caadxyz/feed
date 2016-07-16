<?php

namespace Michaeljennings\Feed\Tests;

use Illuminate\Database\Eloquent\Model;
use Michaeljennings\Feed\Contracts\Notifiable as NotifiableContract;
use Michaeljennings\Feed\Store\Eloquent\Notifiable;

class User extends Model implements NotifiableContract
{
    use Notifiable;

    /**
     * The model's attributes.
     *
     * @var array
     */
    protected $attributes = ['id' => 1];

    /**
     * Set the attributes available for mass assignment.
     *
     * @var array
     */
    protected $fillable = ['id'];
}