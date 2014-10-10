<?php

class GrandPrice
{
	
	function calculate( $price, IPriceCalculator $pricingStrategy )
	{
		
		$grandPrice = $price;
		$grandPrice += $pricingStrategy->negativeDiscount( $price );
		$grandPrice += $pricingStrategy->calculateTaxes( $price );
		$grandPrice += $pricingStrategy->convertCurrency( $price );
		return $grandPrice;
	
	}
	
}