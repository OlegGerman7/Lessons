<?php

interface BirdEat
{
    public function eat();
}
interface BirdFly
{
    public function fly();
}

class Swallow implements BirdEat, BirdFly
{
    public function eat()
    {

    }
    public function fly()
    {

    }
}

class Ostrich implements BirdEat
{
    public function eat()
    {

    }
}