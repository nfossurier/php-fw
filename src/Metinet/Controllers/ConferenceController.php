<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 17/01/18
 * Time: 14:45
 */

namespace Metinet\Controllers;

use Metinet\Core\Http\Request;
use Metinet\Domain\Conference;
use Metinet\Domain\DateOfBirth;
use Metinet\Domain\Person;
use Metinet\Domain\Room;
use Metinet\Domain\Student;

class ConferenceController
{
    public function createConferenceAction(Request $request)
    {
        //TODO récupérer les données de la requête
        $room = new Room('test', 60, 'Principal', 0, '71 Rue Peter Fink', 'Bour-en-Bresse', 01000);

        /** @var Student $student */
        $student = $request->getQuery()->get('student');

        $conference = new Conference('PHP OOP',
            'PHP OOP',
            ['progrès', 'objet', 'concepts'],
            new \DateTime(), 60,
            $student,
            $room, false);
    }

    public function addGuest(Request $request)
    {
        //TODO simplification pour mettre en place squelette

        /** @var Conference $conference */
        $conference = $request->getQuery()->get('conf');

        /** @var Person $person */
        $person = $request->getQuery()->get('personToAdd');

        $conference->addGuest($person);
    }
}