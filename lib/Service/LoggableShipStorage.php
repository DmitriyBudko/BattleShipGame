<?php

namespace Service;


class LoggableShipStorage implements ShipStorageInterface
{
    private $pdoShipStorage;

    public function __construct(PdoShipStorage $pdoShipStorage)
    {
        $this->pdoShipStorage = $pdoShipStorage;
    }

    public function fetchAllShipsData()
    {
        $ships = $this->pdoShipStorage->fetchAllShipsData();

        $this->log(sprintf('Just fetched %s ships', count($ships)));

        return $ships;
    }

    public function fetchSingleShipData($id)
    {
        return $this->pdoShipStorage->fetchSingleShipData($id);
    }

    private function log($message)
    {
        // do more intellectual

        echo $message;
    }

}