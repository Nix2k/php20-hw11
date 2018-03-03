<?php
namespace mbokov;

require_once './autoload.php';

abstract class Product implements Prices
{
	protected $name;
	protected $price;
	protected $discount = 10;
	protected $weight;
	protected $shipping;

	public function __construct($name, $price, $weight)
	{
		$this->name = $name;
		$this->price = $price;
		$this->weight = $weight;
	}

	public function setPrice($price)
	{
		$this->price = $price;
	}

	public function setShipping($shipping)
	{
		$this->shipping = $shipping;
	}

	public function setDiscount($discount)
	{
		$this->discount = $discount;
	}

	public function setWeight($weight)
	{
		$this->weight = $weight;
	}

	public function getPrice()
	{
		if ((isset($this->discount))&&($this->discount)){
			$this->shipping = 300;
			return round($this->price*(100-$this->discount)/100,2);
		}
		else {
			$this->shipping = 250;
			return $this->price;
		}
	}

	public function getShipping()
	{
		$this->getPrice();
		return $this->shipping;
	}

	public function getDiscount()
	{
		return $this->discount;
	}

	public function getWeight()
	{
		return $this->weight;
	}

	public function printPrice()
	{
		echo '<p>Цена: '.$this->getPrice().' руб.</p>';
	}

	public function printShipping()
	{
		echo '<p>Доставка: '.$this->getShipping().' руб.</p>';
	}

	public function printProductGeneral()
	{
		echo "<h3>$this->name</h3>";
		$this->printPrice();
		$this->printShipping();
	}	
}
?>
