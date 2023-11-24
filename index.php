<?php

interface IFormat
{
    public function setFormat(string $string);
}

interface IDeliver
{
    public function setDeliver(string $string);
}

class RawFormat implements IFormat
{
    public function setFormat(string $string)
    {
        return $string;
    }
}

class RawWithDateFormat implements IFormat
{
    public function setFormat(string $string)
    {
        return date('Y-m-d H:i:s') . $string;
    }
}

class RawWithDateDetailsFormat implements IFormat
{
    public function setFormat(string $string)
    {
        return date('Y-m-d H:i:s') . $string . ' - With some details';
    }
}

class DeliverByEmail implements IDeliver
{
    public function setDeliver(string $format)
    {
        echo 'Format ' . $format . ' by email';
    }
}

class DeliverBySMS implements IDeliver
{
    public function setDeliver(string $format)
    {
        echo 'Format ' . $format . ' by SMS';
    }
}

class DeliverToConsole implements IDeliver
{
    public function setDeliver(string $format)
    {
        echo 'Format ' . $format . ' to console';
    }
}

class Logger
{
    private $format;
    private $delivery;

    public function __construct(IFormat $format, IDeliver $delivery)
    {
        $this->format   = $format;
        $this->delivery = $delivery;
    }

    public function log(string $string)
    {
        $this->delivery->setDeliver($this->format->setFormat($string));
    }
}

$format  = new RawFormat();
$deliver = new DeliverBySMS();
$logger  = new Logger($format, $deliver);
$logger->log('RAW');