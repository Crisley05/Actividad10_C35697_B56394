<?php

class RecalculadorICC implements IRegistroPesoObserver
{
    public function onPesoRegistrado(string $registro): void
    {
        echo "ICC recalculado.\n";
    }
}
