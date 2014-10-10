<?php

Class AutomobileFactory
{
			
	public static function create( $make, $model )
	{
		
		return new Car( $make, $model );
		
	}
	
}