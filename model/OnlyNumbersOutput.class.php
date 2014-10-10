<?php

Class OnlyNumbersOutput implements OutputInterface
{
	
	private $_data;
	
	public function __construct( String $data )
	{

		$this->_data = $data;
	}
	
	public function load()
	{
		
		return preg_replace( '/[^0-9]/', '', $this->_data );
		
	}
	
}