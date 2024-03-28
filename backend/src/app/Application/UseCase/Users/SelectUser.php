<?php

namespace App\Application\UseCase\Users;

use App\Domain\Models\Users\User;
use App\Domain\Repositories\UserRepository;

class SelectUser
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    
    public function execute(String $email, String $password)
    {
        // 重複チェック
        $result = $this->userRepository->findByUser($email, $password);

        return $result;

    }
}
