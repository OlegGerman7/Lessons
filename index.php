<?php

interface ISource{
    public function getData();
}

class Mysql implements ISource
{
    public function getData()
    {
        return 'some data from database';
    }
}

class Controller
{
    private $adapter;

    public function __construct(ISource $mysql)
    {
        $this->adapter = $mysql;
    }

    function getData()
    {
        $this->adapter->getData();
    }
}