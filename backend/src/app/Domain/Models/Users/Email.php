<?php

namespace App\Domain\Models\Users;

use Exception;

class Email
{
    private String $email;

    public function __construct(String $email)
    {
        // TODO ガード節記載
        
        $this->email = $email;
    }

    public function toString(): String
    {
        return $this->email;
    }
}