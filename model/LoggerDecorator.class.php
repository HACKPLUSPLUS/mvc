<?php

abstract class LoggerDecorator implements ILogger
{
	
	protected $_logger;
	
	public function __construct( ILogger $logger)
	{
		
		$this->_logger = $logger;
		
	}
	
	public function log( $msg )
	{
		
		
		$this->_logger->log( $msg );
		
	}
	
}