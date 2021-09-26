<?php

/**
 * @author Robin B
 */

class Fish extends AquaticAnimal
{
    /**
     * @inheritDoc
     * @return void
     */
    public function swim(): void
    {
        echo "I'm swimming with my fins";
    }
}