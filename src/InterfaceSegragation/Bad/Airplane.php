<?php

/**
 * @author Robin B
 */

class Airplane implements IFlyingMachine
{
    /**
     * @inheritDoc
     * @return void
     */
    public function startEngines(): void
    {
        echo "I start all the engines";
    }

    /**
     * @inheritDoc
     * @return void
     */
    public function fly(): void
    {
        echo "The airplane is flying above the sea";
    }
}