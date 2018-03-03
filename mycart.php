<?php
	require_once './autoload.php';
	session_start();

	if (!isset($_SESSION['cart'])) {
		$cart = new \mbokov\Cart();
		$_SESSION['cart'] = $cart;
	}
	else {
		$cart = $_SESSION['cart'];
	}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Корзина</title>
</head>
<body>
<a href="./index.php">Каталог</a><br>
<a href="./clearcart.php">Очистить корзину</a><br>

<?php
	$cart->printCart();
?>

</body>
</html>
