<?php

class AlgoritmoTablaReferencia implements IAlgoritmoEstimacion
{
    public function ejecutar(array $datosEntrada): ResultadoEstimacion
    {
        return new ResultadoEstimacion(
            470,
            75,
            "Tabla Referencia"
        );
    }
}