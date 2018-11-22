<?php

namespace TDD;

class Mazo {
	
	protected $cartas;
	public $cantidad;

	public function __construct($tipo){
		switch($tipo){
			case "poker":
				$this->cantidad = 54;
				array_push($this->cartas, new Carta("A", 0));
				array_push($this->cartas, new Carta("A", 1));
				array_push($this->cartas, new Carta("A", 2));
				array_push($this->cartas, new Carta("A", 3));
				for($i=0;$i<36;$i++){
					array_push($this->cartas, new Carta(($i%9)+2,i/9));
				}
				array_push($this->cartas, new Carta("J", 0));
				array_push($this->cartas, new Carta("J", 1));
				array_push($this->cartas, new Carta("J", 2));
				array_push($this->cartas, new Carta("J", 3));
				array_push($this->cartas, new Carta("Q", 0));
				array_push($this->cartas, new Carta("Q", 1));
				array_push($this->cartas, new Carta("Q", 2));
				array_push($this->cartas, new Carta("Q", 3));
				array_push($this->cartas, new Carta("K", 0));
				array_push($this->cartas, new Carta("K", 1));
				array_push($this->cartas, new Carta("K", 2));
				array_push($this->cartas, new Carta("K", 3));
				array_push($this->cartas, new Carta("Joker", NULL), new Carta("Joker", NULL));
			break;
			case "españolas":
				$this->cantidad = 50;
				for($i=0;$i<48;$i++){
					array_push($this->cartas, new Carta(($i%12)+1,$i/12));
				}
				array_push($this->cartas, new Carta("Comodin",NULL), new Carta("Comodin",NULL));
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
