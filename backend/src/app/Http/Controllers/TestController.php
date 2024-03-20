<?php

namespace App\Http\Controllers;

use App\Domain\Models\Users\User;
use App\Http\Controllers\Controller;
use App\Application\UseCase\Users\CreateUser;
use App\Domain\Repositories\UserRepository;

class TestController extends Controller
{   
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $user = new User('永野将志', 'nagano2@test.com', 'password', null);
        $result = $this->userRepository->save($user);
        //$result = $createUser->execute('永野将志', 'nagano@test.com', 'password');
        dd($result);
    }
}
