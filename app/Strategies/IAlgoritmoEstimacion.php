<?php

interface IAlgoritmoEstimacion
{
    public function ejecutar(array $datosEntrada): ResultadoEstimacion;
}
