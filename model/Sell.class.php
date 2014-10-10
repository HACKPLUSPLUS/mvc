<?php

abstract class Sell
{
	
	private $_inventory;
	private $_paymentProvider;
	private $_price;
	
	public function removeFromInventory()
	{
		
		$this->_inventory->remove( $this );
	}
	
	public function retreivePayment()
	{
		
		$this->paymentProvider->retreive( $this->_price );
		
	}
	
}