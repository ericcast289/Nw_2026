<?php

namespace oop_hotel\src;

class Hotel
{
    private array $reservas;

    public function __construct()
    {
        $this->reservas = [];
    }

    public function agregarReserva(Reserva $reserva)
    {
        $this->reservas[] = $reserva;
    }

    public function obtenerReservas(): array
    {
        return $this->reservas;
    }
}