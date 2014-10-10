<?php

class RobotEngineer
{
	
	private $_robotBuilder;
	
	public function __construct( IRobotBuilder $robotBuilder_in )
	{
		
		$this->_robotBuilder = $robotBuilder_in;
		
	}
	
	public function getRobot()
	{
		
		return $this->_robotBuilder->getRobot();
		
	}
	
	public function makeRobot()
	{
		
		$this->_robotBuilder->buildRobotHead();
		$this->_robotBuilder->buildRobotTorso();
		$this->_robotBuilder->buildRobotArms();
		$this->_robotBuilder->buildRobotLegs();
		
	}
	
}