<?php

class USAPricingStrategy implements IPriceCalculator
{
	
	function negativeDiscount( $price )
	{
		
		if ( $price > 1000 )
			return $price - 80;
		return $price - 8;
	
	}
	
	function calculateTaxes( $price )
	{

		return $price * 10 / 100;
	
	}
	
	function convertCurrency( $price )
	{

		return $price * 1.10;
	
	}
	
}