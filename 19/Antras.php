<?php

abstract class Antras extends Stogas implements Planas {

    public function doAntras()
    {
        $k1 = $this->getKampas1();
        $k2 = $this->getKampas2();
        $k3 = $this->getKampas3();
        $k4 = $this->getKampas4();
        
        return $k1 * $k2 * $k3 * $k4;
    }

    // public abstract function getKampas1();
    // public abstract function getKampas2();
    // public abstract function getKampas3();
    // public abstract function getKampas4();

}