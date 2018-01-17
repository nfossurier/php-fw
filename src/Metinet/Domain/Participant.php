<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 17/01/18
 * Time: 16:40
 */

namespace Metinet\Domain;

class Participant implements Person
{

    private $nom;
    private $prenom;
    private $email;
    private $phone;

    /**
     * Participant constructor.
     * @param $nom
     * @param $prenom
     * @param $email
     * @param $phone
     */
    public function __construct(string $nom, string $prenom, string $email, string $phone)
    {
        //TODO checkEmail
        //TODO checkPhone

        $this->nom    = $nom;
        $this->prenom = $prenom;
        $this->email  = $email;
        $this->phone  = $phone;
    }

    public function checkEmail(): bool
    {
        return true;// TODO: Implement checkEmail() method.
    }

    public function checkPhone(): bool
    {
        return true;// TODO: Implement checkPhone() method.
    }
}