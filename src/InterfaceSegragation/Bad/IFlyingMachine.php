<?php

/**
 * @author Robin B
 */

interface IFlyingMachine
{
    /**
     * @return void
     */
    public function startEngines(): void;

    /**
     * @return void
     */
    public function fly(): void;
}