<?php

namespace TDD;

class Mazo {
	
	protected $cartas = [];
	public $cantidad;

	public function __construct($tipo){
		switch($tipo){
			case "poker":
				$this->cantidad = 54;
				array_push($this->cartas, new Carta("A", 0, $tipo));
				array_push($this->cartas, new Carta("A", 1, $tipo));
				array_push($this->cartas, new Carta("A", 2, $tipo));
				array_push($this->cartas, new Carta("A", 3, $tipo));
				for($i=0;$i<36;$i++){
					array_push($this->cartas, new Carta(($i%9)+2,$i/9, $tipo));
				}
				array_push($this->cartas, new Carta("J", 0, $tipo));
				array_push($this->cartas, new Carta("J", 1, $tipo));
				array_push($this->cartas, new Carta("J", 2, $tipo));
				array_push($this->cartas, new Carta("J", 3, $tipo));
				array_push($this->cartas, new Carta("Q", 0, $tipo));
				array_push($this->cartas, new Carta("Q", 1, $tipo));
				array_push($this->cartas, new Carta("Q", 2, $tipo));
				array_push($this->cartas, new Carta("Q", 3, $tipo));
				array_push($this->cartas, new Carta("K", 0, $tipo));
				array_push($this->cartas, new Carta("K", 1, $tipo));
				array_push($this->cartas, new Carta("K", 2, $tipo));
				array_push($this->cartas, new Carta("K", 3, $tipo));
				array_push($this->cartas, new Carta("Joker", NULL, $tipo));
				array_push($this->cartas, new Carta("Joker", NULL, $tipo));
			break;
			case "españolas":
				$this->cantidad = 50;
				for($i=0;$i<48;$i++){
					array_push($this->cartas, new Carta(($i%12)+1,$i/12, $tipo));
				}
				array_push($this->cartas, new Carta("Comodin",NULL, $tipo), new Carta("Comodin",NULL, $tipo));
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
		if($this->obtenerCantidad() == 0){
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
