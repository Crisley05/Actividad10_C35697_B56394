<?php

interface IRegistroPesoObserver
{
    public function onPesoRegistrado(string $registro): void;
}
