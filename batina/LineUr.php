<?php
namespace batina;
class LineUr
{
	protected $x;

	function lineUr($a, $b)
	{
        
		if ($a != 0) 
		{
			$x = -1*$b/$a;
			$this->x = $x;
            

			return array($x);
		}
		throw new BatinaException("The equation is not");
	}
}
