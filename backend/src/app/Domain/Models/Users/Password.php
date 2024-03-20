<?php

namespace App\Domain\Models\Users;

use Exception;
use Hash;

class Password
{
    private String $password;

    public function __construct(String $password)
    {
        // TODO ガード節記載
        
        $this->password = $password;
    }

    public function toHash(): String
    {
        return Hash::make($this->password);
    }
}