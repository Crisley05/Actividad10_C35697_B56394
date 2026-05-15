<?php

class NotificadorPropietario implements IRegistroPesoObserver
{
    public function onPesoRegistrado(string $registro): void
    {
        echo "Email enviado al propietario.\n";
    }
}
