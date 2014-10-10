<?php

class SellServices extends Sell
{

	private $_humanResources;
	
	public function markHumanResourcesAsOccupied()
	{
		
		$this->_humanResources->mark(2);
		
	}
	
}