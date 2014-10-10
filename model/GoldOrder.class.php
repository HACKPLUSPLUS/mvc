<?php

class GoldOrder extends Order
{
	
	public function getPromotion()
	{
		
		return Order::GOLD;
		
	}
	
}