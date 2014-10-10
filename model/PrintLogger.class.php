<?php

class PrintLogger extends LoggerDecorator
{
	
	public function log( $msg )
	{
		
		$this->_logger->log( $msg );
		echo "<p>Logging  to <b>PRINT</b>: {$msg}</p>";
	}
	
}