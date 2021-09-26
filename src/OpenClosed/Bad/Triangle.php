<?php

/**
 * @author Robin B
 */

class Triangle
{
    private float $baseLength;
    private float $height;

    /**
     * @param float $baseLength
     * @param float $height
     */
    public function __construct(float $baseLength, float $height)
    {
        $this->baseLength = $baseLength;
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function getBaseLength(): float
    {
        return $this->baseLength;
    }

    /**
     * @param float $baseLength
     * @return Triangle
     */
    public function setBaseLength(float $baseLength): Triangle
    {
        $this->baseLength = $baseLength;
        return $this;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @param float $height
     * @return Triangle
     */
    public function setHeight(float $height): Triangle
    {
        $this->height = $height;
        return $this;
    }


}