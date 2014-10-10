<?php

class FacebookAdapter implements ISocialMediaAdapter
{
	
	private $_facebook;
	
	public function __construct( Facebook $facebook )
	{
		
		$this->_facebook = $facebook;
		
	}
	
	public function post( $msg )
	{
		
		$this->_facebook->post( $msg );
		
	}
	
}