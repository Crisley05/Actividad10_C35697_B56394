<?php

class WebhookSenasa implements IRegistroPesoObserver
{
    public function onPesoRegistrado(string $registro): void
    {
        echo "Webhook enviado a SENASA.\n";
    }
}
