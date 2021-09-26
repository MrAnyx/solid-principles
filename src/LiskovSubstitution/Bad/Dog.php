<?php

/**
 * @author Robin B
 */

class Dog extends Animal
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