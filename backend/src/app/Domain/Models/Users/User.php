<?php

namespace App\Domain\Models\Users;

use App\Domain\Models\Users\UserId;
use App\Domain\Models\Users\UserName;
use App\Domain\Models\Users\Email;
use App\Domain\Models\Users\Password;
use Exception;
use Illuminate\Support\Str;

class User implements \JsonSerializable
{
    private UserId $id;
    private UserName $name;
    private Email $email;
    private Password $password;

    public function __construct(String $name, String $email, String $password, ?String $id) {
        if (is_null($name)) {
            throw new Exception('nameが存在しません');
        }

        if (is_null($email)) {
            throw new Exception('emailが存在しません');
        }

        if (is_null($password)) {
            throw new Exception('passwordが存在しません');
        }

        if (is_null($id)) {
            $this->id = new UserId(Str::uuid());
        } else {
            $this->id = new UserId($id);
        }
        
        $this->name = new UserName($name);
        $this->email = new Email($email);
        $this->password = new Password($password);
    }

    public function getId(): UserId
    {
        return $this->id;
    }

    public function getName(): String
    {
        return $this->name;
    }

    public function getEmail(): String
    {
        return $this->email;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id->toString(),
            'name' => $this->name->toString(),
            'email' => $this->email->toString(),
            'password' => $this->password->toHash()
        ];
    }
}