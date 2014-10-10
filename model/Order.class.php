<?php

class Order
{
	
	private $_price = 100;	
	private $_promotion;
	
	public function __construct( $promotion )
	{
		
		$this->setPromotion( $promotion );
	
	}
	
	public function getPromotion()
	{
	
		return $this->_promotion->getCode();
	
	}

	public function setPromotion( $promotion )
	{
	
		$this->_promotion = AbstractPromotion::create( $promotion );
		/*switch( $promotion )
			{
			
		case self::GOLD:
		$this->_promotion = new GoldPromotion();
		break;
		case self::SILVER:
		$this->_promotion = new SilverPromotion();
		break;
		case self::BRONZE:
		$this->_promotion = new BronzePromotion();
		default:
		throw new Exception('Invalid promotion code');
		}*/
	
	}
	
	public function getFinalPrice()
	{
		
		$price = $this->_price;
		
		switch( $this->getPromotion() )
		{
			
			case AbstractPromotion::GOLD:
				$price *= 0.7;
				break;
			case AbstractPromotion::SILVER:
				$price *= 0.8;
				break;
			case AbstractPromotion::BRONZE:
				$price *= 0.9;
			default:
				$price *= 1;
		}
		
		return $price;
		
	}
	
}