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
        $mazo2 = $mazo->mezclar();
        $this->assertNotEquals($mazo,$mazo2);
    }

    public function testCrear(){
            
        $mazito =  new Mazo("poker");

        $this->assertEquals(54, $mazito->cantidad);

        $this->assertNotEquals(50, $mazito->cantidad);

        $mazito =  new Mazo("españolas");

        $this->assertEquals(50, $mazito->cantidad);

        $this->assertNotEquals(48, $mazito->cantidad);
    }

    public function testCortar(){
        $mazo = new Mazo("poker");
        $mazo2 = $mazo->cortar();
        $this->assertNotEquals($mazo,$mazo2);
    }

    public function testObtener(){
        $mazo = new Mazo("poker");
        $this->assertTrue(($mazo->obtenerCarta())!=null);
    }

    public function testTieneCartas(){
        $mazo = new Mazo("españolas");
        $this->assertEquals($mazo->cantidad, 50);
        for($i=0; $i<30; $i++){
            $mazo->obtenerCarta();
        }
        $this->assertEquals($mazo->cantidad, 20);
    }

    public function testAgregarCartas(){
        $mazo = new Mazo("españolas");
        $carta = $mazo->obtenerCarta();
        $mazo->agregar($carta);
        $mazo->agregar($carta);
        $this->assertEquals($mazo->cantidad, 51);
    }

    public function testEsVacio(){
        $mazo = new Mazo("españolas");
        $this->assertFalse($mazo->vacio());
        /**
         *  El mazo tiene 50 cartas asi que despues de hacer esto tendra 0
         */
        for($i=0; $i<50; $i++){
            $mazo->obtenerCarta();
        }
        $this->assertTrue($mazo->vacio());
    }
}
