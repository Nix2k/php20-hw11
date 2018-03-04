<?php
	require_once './autoload.php';

	$toy1 = new \mbokov\Toy('Кубики',500,0.2,'toy1');
	$toy1->setAges(0,5);
	$toy2 = new \mbokov\Toy('Кукла',2500,0.5,'toy2');
	$toy2->setAges(2,7);
	$drink1 = new \mbokov\Drink('CocaCola',50,0.05,'drink1');
	$drink1->setVolume(0.33);
	$drink1->setAlc(0);
	$drink2 = new \mbokov\Drink('Fanta',45,0.05,'drink2');
	$drink2->setVolume(0.33);
	$drink2->setAlc(0);
	$drink3 = new \mbokov\Drink('Ром Bacardi Superior',1500,1.1,'drink3');
	$drink3->setVolume(0.5);
	$drink3->setAlc(40);
	$mo1 = new \mbokov\MotorOil('Mobil1',2000,5.2,'mo1');
	$mo1->setVolume(5);
	$mo1->setViscosity('5w30');
	$mo2 = new \mbokov\MotorOil('Shell',2500,4.2,'mo2');
	$mo2->setVolume(4);
	$mo2->setViscosity('0w40');
	$tire1 = new \mbokov\Tires('Nokian',4000,6,'tire1');
	$tire2 = new \mbokov\Tires('Dunlop',3500,7,'tire2');
	$tire3 = new \mbokov\Tires('Brigestone',3800,5,'tire3');
	$vege1 = new \mbokov\Vege('Картофель',500,20,'vege1');
	$vege2 = new \mbokov\Vege('Капуста',100,4,'vege2');
	$vege3 = new \mbokov\Vege('Морковь',300,5,'vege3');
	$vege4 = new \mbokov\Vege('Салат',200,0.5,'vege4');
?>
