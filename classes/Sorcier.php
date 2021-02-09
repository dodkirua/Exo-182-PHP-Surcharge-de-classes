<?php


class sorcier extends Personnage
{

    /**
     * sorcier constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->x = 125;
        $this->y = 125;
    }
}