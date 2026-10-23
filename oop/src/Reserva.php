<?php

namespace oop_hotel\src;

class Reserva
{
    private string $cliente;
    private string $habitacion;
    private string $fechaEntrada;
    private string $fechaSalida;

    public function __construct(
        string $cliente,
        string $habitacion,
        string $fechaEntrada,
        string $fechaSalida
    ) {
        $this->cliente = $cliente;
        $this->habitacion = $habitacion;
        $this->fechaEntrada = $fechaEntrada;
        $this->fechaSalida = $fechaSalida;
    }

    public function getCliente(): string
    {
        return $this->cliente;
    }

    public function getHabitacion(): string
    {
        return $this->habitacion;
    }

    public function getFechaEntrada(): string
    {
        return $this->fechaEntrada;
    }

    public function getFechaSalida(): string
    {
        return $this->fechaSalida;
    }
}