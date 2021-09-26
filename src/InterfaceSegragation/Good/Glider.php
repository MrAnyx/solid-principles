<?php

/**
 * @author Robin B
 */

class Glider implements IFlyingMachine
{
    /**
     * @inheritDoc
     * @return void
     */
    public function fly(): void
    {
        echo "The glider is flying above the sea";
    }
}