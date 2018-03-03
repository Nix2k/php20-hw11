<?php
namespace mbokov;

require_once './autoload.php';

class Cart
{
	private $products = array();

	public function addToCart($prod)
	{
		if (isset($$prod)) {
			$products[] = $$prod;
		}
	}

	public function printCart()
	{
		if (isset($this->products)) {
			foreach ($this->products as $key => $value) {
				$value->printProductGeneral();
			}
		}
	}
}
?>