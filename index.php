<?php
class A{
    protected $x;
	// aX+b = 0
	function solve($a, $b){
	    if ($a == 0) {
		   return false;
		}
	    $x = -$b/$a;
		$this->x = $x;
		return $x;
	}
}
class B extends A{
	// ax2 + bx + c = 0
	protected $x2;
	protected function discr($a, $b, $c) {
		$discr = $b*$b - 4*$a*$c;
		return $discr;
	}
	function myaw($a, $b, $c){
		if ($a == 0) {
		   return false;
		}
		$x = (-1*$b + sqrt($discr))/(2*$a);
		$x2 = (-1*$b - sqrt($discr))/(2*$a)
		$this->x = $x;
		$this->x2 = $x2;
	}
}