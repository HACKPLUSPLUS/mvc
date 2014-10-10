<?php

abstract class AbstractPromotion
{
	const GOLD = 0;
	const SILVER = 1;
	const BRONZE = 2;
	
	static public function create( $promotion )
	{
	
		if( $promotion == self::BRONZE )
		{
				
			return new BronzePromotion( $promotion );
	
		} elseif( $promotion == self::SILVER )
		{
				
			return new SilverPromotion( $promotion );
				
		} elseif( $promotion == self::GOLD )
		{
				
			return new GoldPromotion( $promotion );
				
		} else {
				
			throw new Exception( 'Invalid promotion' );
				
		}
	
	}
	
	abstract public function getCode();	
	
}