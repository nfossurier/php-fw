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
    private $name;
    private $capacity;
    private $building;
    private $floor;
    private $address;
    private $city;
    private $zipCode;

    /**
     * Room constructor.
     * @param string $name
     * @param int    $capacity
     * @param string $building
     * @param int    $floor
     * @param string $address
     * @param string $city
     * @param int    $zipCode
     * @throws \Exception
     */
    public function __construct(
        string $name,
        int $capacity,
        string $building,
        int $floor,
        string $address,
        string $city,
        int $zipCode
    ) {

        if (!$capacity > 0) {
            throw new \Exception('Capacity cannot be null');
        }

        $this->name     = $name;
        $this->capacity = $capacity;
        $this->building = $building;
        $this->floor    = $floor;
        $this->address  = $address;
        $this->city     = $city;
        $this->zipCode  = $zipCode;
    }

    /**
     * @param int $nbGuest
     * @return bool
     */
    public function checkRoomCapacity(int $nbGuest): bool
    {
        return $this->capacity > $nbGuest;
    }
}