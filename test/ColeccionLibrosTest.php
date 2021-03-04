<?php

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertSame;

require __DIR__ . "/../src/ColeccionLibros.php";
class ColeccionLlibrosTest extends TestCase
{
    private $coleccion;

    protected function setUp(): void
    {
        $this->coleccion = new ColeccionLibros(8, 2);
    }

    protected function tearDown(): void
    {
    }

    /**
     * @covers ColeccionLibros:getCoste()
     * @covers ColeccionLibros:aplicarDescuento()     
     * @covers ColeccionLibros:getPuntos()     
     */
    public function testParaComprobarQueSeCreaBienElObjeto()
    {
        $coste = $this->coleccion->getCoste(1);
        $cantidad = $this->coleccion->getCantidad();
        $this->assertSame(8, $coste);
        $this->assertNotEquals(3, $cantidad);
    }

    /**
     * @covers ColeccionLibros:getCoste()
     * @covers ColeccionLibros:aplicarDescuento()     
     * @covers ColeccionLibros:getPuntos()     
     */
    public function testPrecioUnSoloLibro()
    {
        $this->coleccion = new ColeccionLibros(8, 1);
        $precio = $this->coleccion->aplicarDescuento();
        $cantidad = $this->coleccion->getCantidad();
        $puntos = $this->coleccion->getPuntos();
        $this->assertSame(8, $precio);
        $this->assertSame(1, $cantidad);
        $this->assertSame(7.0, $puntos);
    }

    /**
     * @covers ColeccionLibros:getCoste()
     * @covers ColeccionLibros:aplicarDescuento()     
     * @covers ColeccionLibros:getPuntos()     
     */
    public function testPrecioUnDosLibros()
    {
        $precio = $this->coleccion->aplicarDescuento();
        $cantidad = $this->coleccion->getCantidad();
        $puntos = $this->coleccion->getPuntos();
        $this->assertSame(14.4, $precio);
        $this->assertSame(2, $cantidad);
        $this->assertSame(13.0, $puntos);
    }

    /**
     * @covers ColeccionLibros:getCoste()
     * @covers ColeccionLibros:aplicarDescuento()     
     * @covers ColeccionLibros:getPuntos()     
     */
    public function testPrecioUnTresLibros()
    {
        $this->coleccion = new ColeccionLibros(8, 3);
        $precio = $this->coleccion->aplicarDescuento();
        $cantidad = $this->coleccion->getCantidad();
        $puntos = $this->coleccion->getPuntos();
        $this->assertSame(20.4, $precio);
        $this->assertSame(3, $cantidad);
        $this->assertSame(18.0, $puntos);
    }

    /**
     * @covers ColeccionLibros:getCoste()
     * @covers ColeccionLibros:aplicarDescuento()     
     * @covers ColeccionLibros:getPuntos()     
     */
    public function testPrecioUnSeisLibros()
    {
        $this->coleccion = new ColeccionLibros(8, 6);
        $precio = $this->coleccion->aplicarDescuento();
        $cantidad = $this->coleccion->getCantidad();
        $puntos = $this->coleccion->getPuntos();
        $this->assertSame(36.0, $precio);
        $this->assertSame(6, $cantidad);
        $this->assertSame(32.0, $puntos);
    }

    /**
     * @covers ColeccionLibros:getCoste()
     * @covers ColeccionLibros:aplicarDescuento()     
     * @covers ColeccionLibros:getPuntos()     
     */
    public function testPrecioUnSieteLibros()
    {
        $this->coleccion = new ColeccionLibros(8, 7);
        $precio = $this->coleccion->aplicarDescuento();
        $cantidad = $this->coleccion->getCantidad();
        $puntos = $this->coleccion->getPuntos();
        $this->assertSame(42.0, $precio);
        $this->assertSame(7, $cantidad);
        $this->assertSame(38.0, $puntos);
    }
}
