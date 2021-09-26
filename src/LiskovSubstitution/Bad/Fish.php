<?php

/**
 * @author Robin B
 */

class Fish extends Animal
{
    /**
     * @return void
     * @inheritDoc
     * @throws Exception
     */
    public function makeNoise(): void
    {
        throw new Exception("A fish can't make a noise under water");
    }
}