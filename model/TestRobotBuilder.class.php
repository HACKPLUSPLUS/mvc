<?php

class TestRobotBuilder
{
	
	public function __construct()
	{
		
		$oldStyleRobot = new OldRobotBuilder();
		
		$robotEngineer = new RobotEngineer( $oldStyleRobot );
		
		$robotEngineer->makeRobot();
		
		$firstRobot = $robotEngineer->getRobot();
		
	}
	
}