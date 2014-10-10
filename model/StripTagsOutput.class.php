<?php

Class StripTagsOutput implements OutputInterface
{
	
	private $_data;
	
	public function __construct( String $data )
	{
	
		$this->_data = $data;
	}
	
	public function load()
	{
		
		return strip_tags( $this->_data );
		
	}
	
}