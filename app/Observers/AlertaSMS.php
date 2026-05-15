<?php

class AlertaSMS implements IRegistroPesoObserver
{
    public function onPesoRegistrado(string $registro): void
    {
        echo "SMS enviado.\n";
    }
}
