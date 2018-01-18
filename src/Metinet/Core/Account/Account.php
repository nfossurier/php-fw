<?php

namespace Metinet\Core\Account;

use Metinet\Core\Utils\PasswordTools;

class Account
{
    private $login;
    private $encoded;

    public function __construct($login, $rawPassword)
    {
        $passwordEncoder = new PasswordTools();

        $this->login   = $login;
        $this->encoded = $passwordEncoder->encodePassword($rawPassword);
    }

    public function checkPassword($rawPassword)
    {
        $passwordEncoder = new PasswordTools();
        $encoded = $passwordEncoder->encodePassword($rawPassword);
        return $this->encoded === $encoded;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getEncoded(): string
    {
        return $this->encoded;
    }

}