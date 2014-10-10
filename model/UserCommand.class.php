<?php

Class UserCommand implements ICommand
{
			
	public function onCommand( $name, $args )
	{
		
		echo '--------------------inside usercommand---------------';
		
		if ( $name != 'addUser' )
		{
			
			return FALSE;
			
		}
		
		echo ( "UserCommand handling 'addUser'\n" );
		
		return TRUE;
	
	}

}