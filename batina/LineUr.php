<?php
namespace batina;
class LineUr
{
	protected $x;

	function lineUr($a, $b)
	{
        MyLog::log("Equation: $a*x + $b = 0");
		if ($a != 0) 
		{
			$x = -1*$b/$a;
			$this->x = $x;
            MyLog::log("This is line ur");

			return array($x);
		}
		throw new BatinaException("The equation is not");
	}
}
