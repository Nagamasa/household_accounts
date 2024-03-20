<?php

namespace App\Domain\Repositories;

use App\Domain\Models\Users\User;

interface UserRepository
{
    public function save(User $user): ?User;
}
