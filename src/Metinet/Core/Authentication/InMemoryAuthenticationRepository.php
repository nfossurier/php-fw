<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 18/01/18
 * Time: 10:01
 */

namespace Metinet\Core\Authentication;

use Metinet\Core\Account\Account;

class InMemoryAuthenticationRepository implements AuthenticationRepository
{
    private $accounts = [];

    public function __construct()
    {
        //Remplissage du tableau
        $this->accounts[] = new Account('bguery', 'borisPassword');
        $this->accounts[] = new Account('nfos', 'nathanPassword');
        $this->accounts[] = new Account('ant', 'antoinePassword');
        $this->accounts[] = new Account('modz', 'xavierPassword');
    }

    /**
     * @param string $login
     * @return Account
     * @throws \Exception
     */
    public function findByLogin(string $login): Account
    {
        /** @var Account $account */
        foreach ($this->accounts as $account) {
            if ($account->getLogin() === $login) {
                return $account;
            }
        }
        throw new \Exception('Account not found');
    }
}