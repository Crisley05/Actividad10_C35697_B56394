<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nelore extends Model
{

    public function getNombre(): string
    {
        return 'Nelore';
    }

    public function tieneInstintoMaternoFuerte(): bool
    {
        return true;
    }
}
 
