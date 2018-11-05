<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $mazo = new Mazo("poker");
        $this->assertTrue(isset($mazo));
    }

    public function testMezclable() {
        $mazo = new Mazo("poker");
        $this->assertTrue($mazo->mezclar());
    }

    public function testCrear(){
            
        $mazito =  new Mazo("poker");

        $this->assertEquals(54, $mazito->cantidad);

        $this->assertFalse(50, $mazito->cantidad);

        $mazito =  new Mazo("españolas");

        $this->assertEquals(50, $mazito->cantidad);

        $this->assertFalse(48, $mazito->cantidad);
    }

    public function testCortar(){
        $mazo = new Mazo("poker");
        $mazo2 = $mazo;
        $mazo->cortar();
        $this->assertNotEquals($mazo,$mazo2);
    }

    public function testObtener(){
        $mazo = new Mazo("poker");
        $this->assertTrue($mazo->obtenerCarta());
    }

    public function testTieneCartas(){
        $mazo = new Mazo("españolas");
        $this->assertEquals($mazo->obtenerCantidad, 50);
        for($i=0; $i<30; $i++){
            $mazo->obtenerCarta();
        }
        $this->assertEquals($mazo->obtenerCantidad, 20);
    }

    public function testAgregarCartas(){
        $mazo = new Mazo("españolas");
        $carta = $mazo->obtenerCarta();
        $mazo->agregar($carta);
        $mazo->agregar($carta);
        $this->assertEquals($mazo->obtenerCantidad(), 51);
    }
}
