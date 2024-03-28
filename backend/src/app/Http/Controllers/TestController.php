<?php

namespace App\Http\Controllers;

use App\Domain\Models\Users\User;
use App\Http\Controllers\Controller;
use App\Application\UseCase\Users\CreateUser;
use App\Application\UseCase\Users\SelectUser;
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
        // $result = (new CreateUser(
        //     $this->userRepository
        // ))->execute('永野将志', 'nagano5@test.com', 'password');

        $result = (new SelectUser(
            $this->userRepository
        ))->execute('nagano5@test.com', 'password');
        dd($result);
    }
}
