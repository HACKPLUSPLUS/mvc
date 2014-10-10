<?php

class SilverOrder extends Order
{
	
	public function getPromotion()
	{
		
		return Order::SILVER;
		
	}
	
}