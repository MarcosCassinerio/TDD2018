<?php

namespace TDD;

class Mazo {
	
	protected $cartas;
	public $cantidad;

	public function __construct($tipo){
		switch($tipo){
			case "poker":
				$this->cantidad = 54;
				array_push($this->cartas, new Carta("A", 0, "poker"));
				array_push($this->cartas, new Carta("A", 1, "poker"));
				array_push($this->cartas, new Carta("A", 2, "poker"));
				array_push($this->cartas, new Carta("A", 3, "poker"));
				for($i=0;$i<36;$i++){
					array_push($this->cartas, new Carta(($i%9)+2,i/9, "poker"));
				}
				array_push($this->cartas, new Carta("J", 0, "poker"));
				array_push($this->cartas, new Carta("J", 1, "poker"));
				array_push($this->cartas, new Carta("J", 2, "poker"));
				array_push($this->cartas, new Carta("J", 3, "poker"));
				array_push($this->cartas, new Carta("Q", 0, "poker"));
				array_push($this->cartas, new Carta("Q", 1, "poker"));
				array_push($this->cartas, new Carta("Q", 2, "poker"));
				array_push($this->cartas, new Carta("Q", 3, "poker"));
				array_push($this->cartas, new Carta("K", 0, "poker"));
				array_push($this->cartas, new Carta("K", 1, "poker"));
				array_push($this->cartas, new Carta("K", 2, "poker"));
				array_push($this->cartas, new Carta("K", 3, "poker"));
				array_push($this->cartas, new Carta("Joker", NULL, "poker"));
				array_push($this->cartas, new Carta("Joker", NULL, "poker"));
			break;
			case "españolas":
				$this->cantidad = 50;
				for($i=0;$i<48;$i++){
					array_push($this->cartas, new Carta(($i%12)+1,$i/12, "españolas"));
				}
				array_push($this->cartas, new Carta("Comodin",NULL, "españolas"), new Carta("Comodin",NULL, "españolas"));
			break;
		}
		$this->mezclar();
	}

	public function mezclar(){
		shuffle($this->cartas);
	}

	public function agregar($badchur){
		array_push($this->cartas,$badchur);
		$this->cantidad++;
	}
	
	public function obtenerCantidad(){
		return $this->cantidad;
	}

	public function obtenerCarta(){
		$this->cantidad --;
		return array_pop($this->cartas);
	}

	public function vacio(){
		if(cantidad == 0){
			return True;
		}
		else{
			return False;
		}
	}

	public function cortar(){
		$rando=rand(0,$this->cantidad);
		for($i=0;$i<$rando;$i++){
			$this->agregar($this->obtenerCarta());
		}
	}
}
