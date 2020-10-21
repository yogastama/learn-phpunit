<?php

namespace App\Models;

class Pokemon
{
    public $name;
    public function setFirstName($name)
    {
        $this->name = $name;
    }
    public function getFirstName()
    {
        return $this->name;
    }
}
