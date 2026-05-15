<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RegistroPeso extends Model
{
    protected $table = 'registros_peso';

    // Campos habilitados para asignación masiva
    protected $fillable = [
        'animal_id',
        'peso_kg',
        'fecha_pesaje',
    ];

    public function animal(): BelongsTo
    {
        return $this->belongsTo(Animal::class, 'animal_id');
    }
}