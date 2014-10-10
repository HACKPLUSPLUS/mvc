<?php

class PaypalPayment implements PaymentMethod
{
	
	public function execute()
	{

		echo 'Doing all the PayPal payment stuff';
		
	}
	
	public function __toString()
	{
		
		return 'PayPal';
		
	}
	
}