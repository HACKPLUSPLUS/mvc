<?php

interface IPriceCalculator
{
	
	function negativeDiscount( $price );
	function calculateTaxes( $price );
	function convertCurrency( $price );
	
}