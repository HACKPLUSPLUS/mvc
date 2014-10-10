<?php

class EuropePricingStrategy implements IPriceCalculator
{
	
	function negativeDiscount( $price )
	{
		
		if ( $price > 1000 )
			return $price - 100;
		return $price - 10;
	
	}
	
	function calculateTaxes( $price )
	{

		return $price * 20 / 100;
	
	}
	
	function convertCurrency( $price )
	{

		return $price * 1;
	
	}
	
}