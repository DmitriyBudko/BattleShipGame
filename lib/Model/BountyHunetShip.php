<?php

namespace Model;


class BountyHunetShip extends AbstractShip
{
    use SettableJediFactorTrait;

    public function getType()
    {
        return 'Bounty Hunter';
    }

    public function isFunctional()
    {
        return true;
    }



}