<?php

namespace App\Infra\Daos;

use App\Domain\Models\Users\User;
use App\Models\User as EqUser;
use App\Domain\Repositories\UserRepository;

class UsersDao implements UserRepository
{
    public function save(User $user): User
    {   
        $result = EqUser::create([
            'id' => $user->jsonSerialize()['id'],
            'name' => $user->jsonSerialize()['name'],
            'email' => $user->jsonSerialize()['email'],
            'password' => $user->jsonSerialize()['password']
        ]);

        return new User($result->name, $result->email, $result->password, $result->id);
    }
}
