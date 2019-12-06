class A{
}
class B extends A{
	public a;
	function __construct($a){
		$this->a=$a;
}
class Ñ extends B{
	public b;
	public c;
	function __construct($a, $b, $c){
		parent:: __construct($a);
		$this->b=$b;
		$this->c=$c;
}
}
$a= new B(new A(),new A(), new B(new A()));