<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 18/01/18
 * Time: 10:06
 */

namespace Metinet\Core\Utils;

class PasswordTools
{
    private const DEFAULT_SALT = 'Juhf546@~';

    public function encodePassword(string $rawPassword): string
    {

        return password_hash($rawPassword, PASSWORD_BCRYPT, [
            'cost' => 52,
            'salt' => self::DEFAULT_SALT
        ]);
    }
}