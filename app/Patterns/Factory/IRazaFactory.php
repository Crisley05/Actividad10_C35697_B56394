<?php

namespace App\Patterns\Factory;

interface IRazaFactory
{


 public function create(string $nombreRaza): Raza;
}
