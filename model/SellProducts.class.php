<?php

class SellProducts extends Sell
{
	
	private $_provider;
	
	public function orderNewItem()
	{
		
		$this->provider->orderNewItem( $this );
		
	}
}