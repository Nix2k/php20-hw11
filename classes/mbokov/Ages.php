<?php
namespace mbokov;

interface Ages
{
	public function setAges($minAge, $maxAge);
	public function getMinAge();
	public function getMaxAge();
	public function printAges();
}
?>
