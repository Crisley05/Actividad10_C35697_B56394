<?php

namespace App\Repositories;

use App\Models\Animal;

class InMemoryAnimalRepository implements IAnimalRepository
{
    
    private array $animales = [];
    public function findByArete(string $arete): ?Animal
    {
        foreach ($this->animales as $animal) {
            if ($animal->arete === $arete) {
                return $animal;
            }
        }
        return null; // Si no lo encuentra, devuelve null
    }

    public function findAllByRancho(int $ranchoId): array
    {
        return array_filter($this->animales, fn($animal) => $animal->rancho_id === $ranchoId);
    }

    public function save(Animal $animal): void
    {
        // Si el animal no tiene ID, simulamos el autoincrementable de una BD
        if (!$animal->id) {
            $animal->id = rand(1, 10000);
        }
        
        $this->animales[$animal->id] = $animal;
    }

    public function delete(int $id): void
    {
        unset($this->animales[$id]);
    }
}