<?php

class User
{
	
	private $_paymentMethod;
	
	public function getPaymentMethod()
	{
		
		$this->_paymentMethod = new PaypalPayment();
		return $this->_paymentMethod;
		
	}
}