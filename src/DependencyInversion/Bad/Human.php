<?php

/**
 * @author Robin B
 */

class Human implements IPerson
{

    private string $name;
    private int $age;

    /**
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Human
     */
    public function setName(string $name): Human
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     * @return Human
     */
    public function setAge(int $age): Human
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @inheritDoc
     * @return void
     */
    public function walk(): void
    {
        echo "I walk";
    }

    /**
     * @inheritDoc
     * @return void
     */
    public function speak(): void
    {
        echo "I speak";
    }
}