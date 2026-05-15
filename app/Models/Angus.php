<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Angus extends Model
{

    public function getNombre(): string
    {
        return 'Angus';
    }

    public function excelenteMarmoleo(): bool
    {
        return true;
    }
}

