<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;
    use DefaultPolicyTrait;

    protected $modelClass = User::class;
    protected $ownerField = 'id';
}
