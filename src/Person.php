<?php

namespace App;

class Person
{
    public $name;

    public $age;

    public $job;

    public $money;

    public function __construct($name, $age, $job, $money)
    {
        $this
            ->setName($name)
            ->setAge($age)
            ->setJob($job)
            ->setMoney($money);
    }

    public function setName($name)
    {
        $this->name = (string) $name;
        return $this;
    }

    public function setAge($age)
    {
        $this->age = (int) $age;
        return $this;
    }

    public function setJob($job)
    {
        $this->job = (string) $job;
        return $this;
    }

    public function setMoney($money)
    {
        $this->money = (float) $money;
        return $this;
    }
}
