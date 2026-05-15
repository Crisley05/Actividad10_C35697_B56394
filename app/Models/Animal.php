<?php

namespace App\Models;

class Animal
{
    public ?int $id = null;
    public string $arete;
    public int $rancho_id;
    public string $nombre;
    public float $peso_inicial;
    
    // Array en memoria para simular los pesajes del animal
    public array $registrosPeso = []; 

    public function __construct(string $arete, int $rancho_id, string $nombre, float $peso_inicial)
    {
        $this->arete = $arete;
        $this->rancho_id = $rancho_id;
        $this->nombre = $nombre;
        $this->peso_inicial = $peso_inicial;
    }
} 