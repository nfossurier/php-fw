<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 18/01/18
 * Time: 10:01
 */

namespace Metinet\Core\Authentication;

class AuthenticationProvider
{
    public function authenticateCookie(string $cookie): void
    {
        //TODO OK
    }


    public function authenticate(string $login, string $rawPassword): void
    {
        $arrayAuthProvider = new InMemoryAuthenticationRepository();

        try {
            $account = $arrayAuthProvider->findByLogin($login);

            $account->checkPassword($rawPassword);

            setcookie('myauthcookie', 'TODO vrai cookie');

        } catch (\Exception $e) {

        }
    }


}