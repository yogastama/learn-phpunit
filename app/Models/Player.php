<?php

namespace App\Models;

class Player
{
    // properties
    public $name;
    public $pokemons = [];
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function checkPokemons()
    {
        return $this->pokemons;
    }
    public function catchPokemon($pokemonName)
    {
        $this->pokemons[] = $pokemonName;
    }
}
