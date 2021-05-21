<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static Role firstOrCreate(array $where, array $attributes)
 */
class Role extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'permissions',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'permissions' => 'array',
    ];
}
