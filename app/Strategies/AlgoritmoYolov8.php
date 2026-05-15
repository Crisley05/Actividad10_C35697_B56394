<?php

class AlgoritmoYolov8 implements IAlgoritmoEstimacion
{
    public function ejecutar(array $datosEntrada): ResultadoEstimacion
    {
        return new ResultadoEstimacion(
            520,
            96,
            "YOLOv8"
        );
    }
}