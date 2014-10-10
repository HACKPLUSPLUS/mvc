<?php

Class Car
{
	
	private $_vehicleMake;
	private $_vehicleModel;
	
	public function __construct( $make, $model )
	{

		$this->_vehicleMake = $make;
		$this->_vehicleModel = $model;
		
	}
	
	public function getMakeAndModel()
	{
		
		return $this->_vehicleMake . ' ' . $this->_vehicleModel;
		
	}
	
}