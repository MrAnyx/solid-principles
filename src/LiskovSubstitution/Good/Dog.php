<?php

/**
 * @author Robin B
 */

class Dog extends LandAnimal
{
    /**
     * @inheritDoc
     * @return void
     */
    public function makeNoise(): void
    {
        echo "Waf !";
    }
}