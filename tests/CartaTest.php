<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase {
    public function testPalo(){
        $carta0 = new Carta(0, 0, "españolas");
        $carta1 = new Carta(1, 0, "españolas");
        $carta2 = new Carta(2, 0, "españolas");
        $carta3 = new Carta(3, 0, "españolas");
        $this->assertEquals($carta0->verPalo(), "Espada");
        $this->assertEquals($carta1->verPalo(), "Basto");
        $this->assertEquals($carta2->verPalo(), "Copa");
        $this->assertEquals($carta3->verPalo(), "Oro");
        $carta4 = new Carta(0, "A", "poker");
        $carta5 = new Carta(1, "A", "poker");
        $carta6 = new Carta(2, "A", "poker");
        $carta7 = new Carta(3, "A", "poker");
        $this->assertEquals($carta4->verPalo(), "Picas");
        $this->assertEquals($carta5->verPalo(), "Diamantes");
        $this->assertEquals($carta6->verPalo(), "Tréboles");
        $this->assertEquals($carta7->verPalo(), "Corazones");
    }

    public function testNumero(){
        $carta0 = new Carta(0, 1, "españolas");
        $this->assertEquals($carta0->verNumero(), 1);
    }
}
