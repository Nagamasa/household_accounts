<?php

namespace App\Domain\Models\Users;

use Exception;

class UserId
{
    private String $id;

    public function __construct(String $id)
    {
        if (is_null($id)) {
            throw new Exception('idが存在しません');
        }
        
        $this->id = $id;
    }

    public function toString(): String
    {
        return $this->id;
    }
}