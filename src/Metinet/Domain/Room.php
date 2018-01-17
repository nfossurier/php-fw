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
     * @param int    $id
     * @param int    $capacity
     * @param string $building
     * @param int    $floor
     * @param string $address
     * @param string $city
     * @param int    $zipCode
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

    /**
     * @param int $nbGuest
     * @return bool
     */
    public function checkRoomCapacity(int $nbGuest): bool
    {
        return $this->capacity > $nbGuest;
    }
}