<?php

use PHPUnit\Framework\TestCase;
use App\Models\Pokemon;
use App\Models\Player;

class Test extends TestCase
{
    public $player;
    public function setUp(): void
    {
        $this->player = new Player;
        $this->player->setName('yoga');
    }
    // cek playernya
    public function testPlayerName()
    {
        // method untuk menyamakan
        $this->assertEquals($this->player->name, 'yoga');
    }
    // default pokemonya tuh kosong
    public function testDefaultPokemon()
    {
        // method untuk check kosong apa engga si array
        $this->assertEmpty($this->player->pokemons);
    }
    // coba si player tangkap 1 pokemon
    public function testCatchPokemon()
    {
        $this->player->catchPokemon('pikachu');
        // method untuk cek total yang ada di array
        $this->assertCount(1, $this->player->pokemons);
    }
    // cek ada engga pokemonnya di daftar
    public function testCheckPokemon()
    {
        $this->player->catchPokemon('pikachu');
        // method untuk cek ada ngga di array
        $this->assertContains('pikachu', $this->player->pokemons);
    }
    // cek pokemon yang ngga ada di daftar
    public function testCheckUnCatchPokemon()
    {
        $this->player->catchPokemon('charmender');
        // method untuk cek ketidak adaan di array
        $this->assertNotContains('pikachu', $this->player->pokemons);
    }
}
