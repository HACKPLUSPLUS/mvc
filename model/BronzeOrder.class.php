<?php

class BronzeOrder extends Order
{
	
	public function getPromotion()
	{
		
		return Order::BRONZE;
		
	}
	
}