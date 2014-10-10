<?php

class FileLogger implements ILogger
{
	
	public function log( $msg )
	{
		
		echo "<p>Logging  to <b>FILE</b>: {$msg}</p>";
		
	}
	
}