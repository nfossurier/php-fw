<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 17/01/18
 * Time: 11:36
 */

namespace Metinet\Domain;

class Room
{
    private $id;
    private $capacity;
    private $building;
    private $floor;
    private $address;
    private $city;
    private $zipCode;

    /**
     * Room constructor.
     * @param $id
     * @param $capacity
     * @param $building
     * @param $floor
     * @param $address
     * @param $city
     * @param $zipCode
     */
    public function __construct(
        int $id,
        int $capacity,
        string $building,
        int $floor,
        string $address,
        string $city,
        int $zipCode
    ) {
        $this->id       = $id;
        $this->capacity = $capacity;
        $this->building = $building;
        $this->floor    = $floor;
        $this->address  = $address;
        $this->city     = $city;
        $this->zipCode  = $zipCode;
    }

    public static function retrieveRoomList()
    {
        //Équivalent de BDD
        $rooms = [
            ['id' => 'Demie Lune'],
            ['id' => 'Metinet'],
            ['id' => 'Amphi']
        ];

        return $rooms;
    }

    /**
     * @param int $nbGuest
     * @return void
     * @throws \Exception
     */
    public function checkRoomCapacity(int $nbGuest): void
    {
        if ($this->capacity < $nbGuest) {
            //TODO throw InvalidRoomCapacity::roomCapacityIsNotSuffisant();
            throw new \Exception('InvalidRoomCapacity::roomCapacityisNotSuffisant()');
        }
    }
}