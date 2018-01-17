<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 17/01/18
 * Time: 11:26
 */

namespace Metinet\Domain;

class Conference
{
    private $title;
    private $description;
    private $objectives;
    private $date;
    private $guests;
    private $duration;
    private $organizer;
    private $room;
    private $isAllowedToExternalPeople;

    /**
     * Conference constructor.
     * @param string    $title
     * @param string    $description
     * @param array     $objectives
     * @param \DateTime $date
     * @param float     $duration
     * @param Student   $organizer
     * @param Room      $room
     * @param bool      $isAllowedToExternalPeople
     * @throws \Exception
     */
    public function __construct(
        string $title,
        string $description,
        array $objectives,
        \DateTime $date,
        float $duration,
        Student $organizer,
        Room $room,
        bool $isAllowedToExternalPeople
    ) {

        // Gestion des dates passées de l'event
        if ($date < new \DateTimeImmutable('now')) {
            //TODO throw InvalidEventDateTime::mustNotBeInTheFuture();
            throw new \Exception('InvalidEventDateTime::mustNotBeInTheFuture()');
        }

        $this->title                     = $title;
        $this->description               = $description;
        $this->objectives                = $objectives;
        $this->date                      = $date;
        $this->duration                  = $duration;
        $this->organizer                 = $organizer;
        $this->room                      = $room;
        $this->isAllowedToExternalPeople = $isAllowedToExternalPeople;
    }

    public function addGuest(Person $person): array
    {
        //Check si il reste une place
        if ($this->room->checkRoomCapacity(count($this->guests))) {
            //Check de conférence privée et de personne externe (non student)
            if (!$this->isAllowedToExternalPeople && !$person instanceof Student) {
                return ['success' => false, 'message' => 'Only authorized persons can register'];
            } else {
                array_push($this->guests, $person);
            }
        } else {
            return ['success' => false, 'message' => 'Room is full'];
        }

        return ['success' => true, 'message' => null];
    }

}