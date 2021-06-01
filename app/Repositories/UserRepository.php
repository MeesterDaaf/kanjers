<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserRepository
{

    public static function update(User $user, array $data)
    {
        $user->firstname = $data['firstname'];
        $user->lastname  = $data['lastname'];
        $user->email     = $data['email'];
        $user->title     = $data['title'];
        $user->isActive  = $data['isActive'];
        $user->syncRoles($data['role']);

        $user->save();
    }
}
