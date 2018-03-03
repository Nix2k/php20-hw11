<?php
	require_once './autoload.php';

	$toy1 = new \mbokov\Toy('Кубики',500,0.2);
	$toy1->setAges(0,5);
	$toy2 = new \mbokov\Toy('Кукла',2500,0.5);
	$toy2->setAges(2,7);
	$drink1 = new \mbokov\Drink('CocaCola',50,0.05);
	$drink1->setVolume(0.33);
	$drink1->setAlc(0);
	$drink2 = new \mbokov\Drink('Fanta',45,0.05);
	$drink2->setVolume(0.33);
	$drink2->setAlc(0);
	$drink3 = new \mbokov\Drink('Ром Bacardi Superior',1500,1.1);
	$drink3->setVolume(0.5);
	$drink3->setAlc(40);
	$mo1 = new \mbokov\MotorOil('Mobil1',2000,5.2);
	$mo1->setVolume(5);
	$mo1->setViscosity('5w30');
	$mo2 = new \mbokov\MotorOil('Shell',2500,4.2);
	$mo2->setVolume(4);
	$mo2->setViscosity('0w40');
	$tire1 = new \mbokov\Tires('Nokian',4000,6);
	$tire2 = new \mbokov\Tires('Dunlop',3500,7);
	$tire3 = new \mbokov\Tires('Brigestone',3800,5);
	$vege1 = new \mbokov\Vege('Картофель',500,20);
	$vege2 = new \mbokov\Vege('Капуста',100,4);
	$vege3 = new \mbokov\Vege('Морковь',300,5);
	$vege4 = new \mbokov\Vege('Салат',200,0.5);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Катадог товаров</title>
</head>
<body>

<h2>Игрушки</h2>
<?php 
	$toy1->printProductGeneral();
	$toy1->printAges();
	$toy2->printProductGeneral();
	$toy2->printAges();
?>
<h2>Напитки</h2>
<?php
	$drink1->printProductGeneral();
	$drink1->printVolume();
	$drink1->printAlc();
	$drink2->printProductGeneral();
	$drink2->printVolume();
	$drink2->printAlc();
	$drink3->printProductGeneral();
	$drink3->printVolume();
	$drink3->printAlc();
?>
<h2>Моторные масла</h2>
<?php
	$mo1->printProductGeneral();
	$mo1->printVolume();
	$mo1->printViscosity();
	$mo2->printProductGeneral();
	$mo2->printVolume();
	$mo2->printViscosity();
?>
<h2>Шины</h2>
<?php
	$tire1->printProductGeneral();
	$tire2->printProductGeneral();
	$tire3->printProductGeneral();
?>
<h2>Овощи</h2>
<?php
	$vege1->printProductGeneral();
	$vege2->printProductGeneral();
	$vege3->printProductGeneral();
	$vege4->printProductGeneral();
?>

</body>
</html>
