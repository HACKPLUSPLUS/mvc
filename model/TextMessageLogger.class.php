<?php

class TextMessageLogger extends LoggerDecorator
{
	
	public function log( $msg )
	{
		
		$this->_logger->log( $msg );
		echo "<p>Logging  to <b>SMS</b>: {$msg}</p>";
	}
	
}