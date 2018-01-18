<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 17/01/18
 * Time: 11:26
 */

namespace Metinet\Domain;

class Event
{
    private $description;
    private $objectives;
    private $date;
    private $guests;
    private $duration;
    private $organizer;
    private $room;
    private $isPrivate;

    /**
     * Event constructor.
     * @param string    $description
     * @param array     $objectives
     * @param \DateTime $date
     * @param array     $guests
     * @param float     $duration
     * @param Student   $organizer
     * @param Room      $room
     * @param bool      $isPrivate
     * @throws \Exception
     */
    public function __construct(
        string $description,
        array $objectives,
        \DateTime $date,
        array $guests,
        float $duration,
        Student $organizer,
        Room $room,
        bool $isPrivate
    ) {

        // Gestion des dates passées de l'event
        if ($date < new \DateTimeImmutable('now')) {
            //TODO throw InvalidEventDateTime::mustNotBeInTheFuture();
            throw new \Exception('InvalidEventDateTime::mustNotBeInTheFuture()');
        }

        // Gestion de la capacité de la salle
        $room->checkRoomCapacity(count($guests));

        $this->description = $description;
        $this->objectives  = $objectives;
        $this->date        = $date;
        $this->guests      = $guests;
        $this->duration    = $duration;
        $this->organizer   = $organizer;
        $this->room        = $room;
        $this->isPrivate   = $isPrivate;
    }

}