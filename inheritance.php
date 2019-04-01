<?php

interface Bird
{
    public function layEgg(): Egg;
}

class Chicken implements bird
{
    private $birdType = "Chicken";

    public function getBirdType()
    {
        return $this->birdType;
    }

    public function layEgg(): Egg
    {
        return new Egg($this->birdType);
    }
}

class Egg
{
    private $birdType;
    private $haveHatched = false;

    public function __construct($birdType)
    {
        $this->birdType = $birdType;
    }

    public function hatch(): ?Bird
    {
        if ($this->haveHatched) {
            throw new Exception("Have hatched!");
        }
        $this->haveHatched = true;
        return new $this->birdType;
    }
}

