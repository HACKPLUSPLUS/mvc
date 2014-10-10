<?php

Class MailCommand implements ICommand
{
			
	public function onCommand( $name, $args )
	{
		
		echo '---------------inside mailcommand-------------';
		
		if ( $name != 'mail' )
		{
			
			return FALSE;
			
		}
		
		echo ( "MailCommand handling 'mail'\n" );
		
		return TRUE;
	
	}

}