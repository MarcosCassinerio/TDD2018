<?php

namespace TDD;

class Carta {
  public $palo; 
  public $numero;
  public $tipo;
	public function __construct($numero, $palo, $tipo){
		$this->palo = $palo;
		settype($this->palo, "integer");
		$this->numero = $numero;
		$this->tipo = $tipo;
	}

	public function verNumero(){
		return $this->numero;
	}

	public function verPalo(){
		switch($this->tipo){
			case "poker":
				switch($this->palo){
					case 0:
					 return "Picas";
					break;
					case 1:
					 return "Diamantes";
					break;
					case 2:
					 return "Tréboles";
					break;
					case 3:
					 return "Corazones";
					break;
				}
			break;
			case "españolas":
				switch($this->palo){
					case 0:
					return "Espada";
					break;
					case 1:
					return "Basto";
					break;
					case 2:
					return "Copa";
					break;
					case 3:
					return "Oro";
					break;
				}
			break;
		}
	}
}
