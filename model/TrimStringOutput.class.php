<?php

Class TrimStringOutput implements OutputInterface
{
	
	private $_data;
	
	public function __construct( $data   )
	{
	
		$this->_data = $data;
	}
	
	
	public function load()
	{
		
		return trim( $this->_data );
		
	}
	
}