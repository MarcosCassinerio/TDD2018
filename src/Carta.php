<?php

namespace TDD;

class Carta {
  public $palo;
  public $numero;

	public function __construct($numero, $palo){
		$this->palo = $palo;
		$this->numero = $numero;
	}
}
