<?php
class ColeccionLibros
{

    private $coste;
    private $libros = [];
    private $cantidad;
    private $puntos;

    public function __construct($coste, $cantidad)
    {
        $this->libros = [];
        $this->cantidad = $cantidad;
        for ($i = 0; $i < $cantidad; $i++) {
            array_push($this->libros, $coste);
        }
    }

    public function getCoste($libro)
    {
        return $this->libros[$libro];
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function aplicarDescuento()
    {
        $total = 8;
        if ($this->cantidad > 1 && $this->cantidad < 6) {
            $totalSin = 8 * $this->cantidad;
            $descuento = (100 - ($this->cantidad) * 5) / 100;
            $total = $totalSin * $descuento;
        }
        if ($this->cantidad >= 6) {
            $totalSin = 8 * $this->cantidad;
            $descuento = 0.75;
            $total = $totalSin * $descuento;
        }
        $this->puntos = round($total * 0.9);
        return $total;
    }

    public function getPuntos()
    {
        return $this->puntos;
    }
}
