<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 17/01/18
 * Time: 13:51
 */

namespace Metinet\Domain;

interface Person
{
    public function checkEmail(): bool;

    public function checkPhone(): bool;

}