<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 18/01/18
 * Time: 10:54
 */

namespace Metinet\Core\Authentication;

use Metinet\Core\Account\Account;

interface AuthenticationRepository
{
    public function findByLogin(string $login): Account;
}