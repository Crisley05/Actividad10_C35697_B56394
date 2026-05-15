<?php

class RegistroPesoSubject
{
    private array $observers = [];

    public function suscribir(IRegistroPesoObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    public function desuscribir(IRegistroPesoObserver $observer): void
    {
        $this->observers = array_filter(
            $this->observers,
            fn($o) => $o !== $observer
        );
    }

    public function registrarPeso(string $registro): void
    {
        echo "Peso registrado: $registro\n";
        $this->notificar($registro);
    }

    private function notificar(string $registro): void
    {
        foreach ($this->observers as $observer) {
            $observer->onPesoRegistrado($registro);
        }
    }
}