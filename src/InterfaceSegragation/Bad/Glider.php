<?php

/**
 * @author Robin B
 */

class Glider implements IFlyingMachine
{
    /**
     * @inheritDoc
     * @return void
     * @throws Exception
     */
    public function startEngines(): void
    {
        throw new Exception("Sorry, I don't have engines");
    }

    /**
     * @inheritDoc
     * @return void
     */
    public function fly(): void
    {
        echo "The glider is flying above the sea";
    }
}