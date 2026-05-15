<?php

namespace App\Models;

// Debe ser una clase normal (concreta) que HEREDA (extends) de Raza
class Brahman extends Raza
{
    
    public function getNombre(): string
    {
        return 'Brahman';
    }

    public function esResistenteAlCalor(): bool
    {
        return true;
    }
}