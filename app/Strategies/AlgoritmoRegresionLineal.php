<?php

class AlgoritmoRegresionLineal implements IAlgoritmoEstimacion
{
    public function ejecutar(array $datosEntrada): ResultadoEstimacion
    {
        $peso = $datosEntrada["edad"] * 18;

        return new ResultadoEstimacion(
            $peso,
            82,
            "Regresión Lineal"
        );
    }
}