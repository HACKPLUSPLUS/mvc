<?php

class VisaPayment implements PaymentMethod
{
	
	public function execute()
	{
		
		echo 'Doing all the stuff to pay with VISA';
	}
	
	public function __toString()
	{
	
		return 'Visa';
	
	}
	
}