<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property Role[] $roles
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::created(function (User $user) {
            // set role user by default
            $user->roles()->attach(1);
        });
    }

    /**
     * User has many roles
     *
     * @return HasMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * Check if user has permission
     *
     * return bool
     */
    public function hasPermission($class, $permissionName)
    {
        $class = str_replace('\\', '.', $class);
        $permission = "{$class}:{$permissionName}";
        foreach ($this->roles()->get() as $role) {
            if (in_array('*', $role->permissions)) {
                return true;
            }
            if (in_array($permission, $role->permissions)) {
                return true;
            }
        }
        return false;
    }
}
