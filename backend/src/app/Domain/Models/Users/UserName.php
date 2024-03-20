<?php

namespace App\Domain\Models\Users;

use Exception;

class UserName
{
    private String $name;

    const MAX_LENGTH = 3;

    public function __construct(String $name)
    {
        if (is_null($name)) {
            throw new Exception('nameが存在しません');
        }

        if (mb_strlen($name) < self::MAX_LENGTH) {
            throw new Exception('ユーザー名は3文字以上です');
        }
        
        $this->name = $name;

        
    }

    public function toString(): String
    {
        return $this->name;
    }
}