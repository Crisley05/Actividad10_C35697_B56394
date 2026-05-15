<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class Raza extends Model
{ 
    
    abstract public function getNombre(): string;


    public function obtenerDescripcionCompleta(): string
    {
        return "Clasificación bovina de tipo pura: " . $this->getNombre();
    }
}
