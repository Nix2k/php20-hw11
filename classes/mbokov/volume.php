<?php
namespace mbokov;

trait volume
{
	public function setVolume($volume)
	{
		$this->volume = $volume;
	}
	
	public function getVolume()
	{
		return $this->volume;
	}

	public function printVolume()
	{
		echo '<p>Объем: '.$this->volume.' л</p>';
	}
}
?>
