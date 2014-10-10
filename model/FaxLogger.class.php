<?php

class FaxLogger extends LoggerDecorator
{
	
	public function log( $msg )
	{
		
		$this->_logger->log( $msg );
		echo "<p>Logging  to <b>FAX</b>: {$msg}</p>";
	}
	
}