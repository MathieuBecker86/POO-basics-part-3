<?php

// HighWay.php
abstract class HighWay
{
    /**
     * @var array
     */
    protected $currentVehicles;
    /**
     * @var integer
     */
    protected $nbLane;

    /**
     * @var integer
     */
    protected $maxSpeed;

    public function setCurrentVehicles(int $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles . "<br/>";
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    abstract public function addVehicle(vehicle $vehicle);


    public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed)
    {
        $this->currentVehicles = $currentVehicles;
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }


}

