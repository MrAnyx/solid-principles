<?php

/**
 * @author Robin B
 */

class AreaCalculation
{
    /**
     * @param Triangle[]|Circle[] $shapes
     */
    public function getAreaSum(array $shapes): float
    {
        $sum = 0;
        foreach ($shapes as $shape) {
            if ($shape instanceof Triangle) {
                $sum += ($shape->getBaseLength() * $shape->getHeight()) / 2;
            } else if ($shape instanceof Circle) {
                $sum += pi() * ($shape->getRadius() ** 2);
            }
        }
        return $sum;
    }
}