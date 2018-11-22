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
    }

		public function testCrear(){
				
                $mazito =  new Mazo("poker");
                
				$this->assertEquals(54, $mazito->obtenerCantidad());

				$this->assertFalse(50, $mazito->obtenerCantidad());

				$mazito =  new Mazo("españolas");

				$this->assertEquals(50, $mazito->obtenerCantidad());

				$this->assertFalse(48, $mazito->obtenerCantidad());

		}
}
