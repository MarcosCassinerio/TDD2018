<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase {
    public function testPalo(){
        $carta = new Carta(3, 0, "españolas");
        $this->assertEquals($carta->verPalo(), "Espada");
    }

    public function testNumero(){
        $carta = new Carta(3, 0, "poker");
        $this->assertEquals($carta->verNumero(), 3);
    }
}
