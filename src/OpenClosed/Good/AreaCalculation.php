<?php

/**
 * @author Robin B
 */

class AreaCalculation
{
    /**
     * @param Shape[] $shapes
     */
    public function getAreaSum(array $shapes): float
    {
        $sum = 0;
        foreach ($shapes as $shape) {
            $sum += $shape->getArea();
        }
        return $sum;
    }
}