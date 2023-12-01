<?php

interface ITaxi {
    public function getModel(): string;
    public function getCost(): int;
}

class EconomTaxi implements ITaxi{
    private $model = 'Econom Taxi';
    private $cost = 50;

    public function getModel(): string
    {
        return $this->model;
    }
    public function getCost(): int
    {
        return $this->cost;
    }
}

class StandartTaxi implements ITaxi{
    private $model = 'Standart Taxi';
    private $cost = 100;

    public function getModel(): string
    {
        return $this->model;
    }
    public function getCost(): int
    {
        return $this->cost;
    }
}

class LuxTaxi implements ITaxi{
    private $model = 'Lux Taxi';
    private $cost = 150;

    public function getModel(): string
    {
        return $this->model;
    }
    public function getCost(): int
    {
        return $this->cost;
    }
}

abstract class creatorTaxi
{
    public abstract function ConcreteTaxi(): ITaxi;

    public function taxi(): string
    {
        $Taxi = $this->ConcreteTaxi();
        return 'Model: ' . $Taxi->getModel() . ', Cost: ' . $Taxi->getCost();
    }
}

class creatorEconomTaxi extends creatorTaxi
{
    public function ConcreteTaxi(): ITaxi
    {
        return new EconomTaxi;
    }
}

class creatorStandartTaxi extends creatorTaxi
{
    public function ConcreteTaxi(): ITaxi
    {
        return new StandartTaxi;
    }
}

class creatorLuxTaxi extends creatorTaxi
{
    public function ConcreteTaxi(): ITaxi
    {
        return new LuxTaxi;
    }
}


function clientCode(creatorTaxi $creator){
    return $creator->taxi();
}

echo clientCode(new creatorEconomTaxi) . '<br>';
echo clientCode(new creatorStandartTaxi) . '<br>';
echo clientCode(new creatorLuxTaxi) . '<br>';
