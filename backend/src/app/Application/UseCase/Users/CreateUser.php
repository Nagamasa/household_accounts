<?php

namespace App\Application\UseCase\Users;

use App\Domain\Models\Users\User;
use App\Domain\Models\UserService;
use App\Domain\Repositories\UserRepository;

class CreateUser
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    
    public function execute(String $name, String $email, String $password)
    {
        $user = new User($name, $email, $password, null);

        // 重複チェック

        
        $result = $userRepository->save($user);

        return $result;

    }
}
