<?php

class OldRobotBuilder implements IRobotBuilder
{
	
	private $_robot;
	
	public function __construct()
	{
		
		$this->_robot = new Robot();
		
	}
	
	public function buildRobotHead()
	{
		
		$this->_robot->setRobotHead( 'Tin head' );
		
	}
	
	public function buildRobotTorso()
	{
		
		$this->_robot->setRobotTorso( 'Tin torso' );
		
	}
	
	public function buildRobotArms()
	{
		
		$this->_robot->setRobotArms( 'Tin arms' );
		
	}
	
	public function buildRobotLegs()
	{
		
		$this->_robot->setRobotLegs( 'Tin legs' );
		
	}
	
	public function getRobot()
	{

		return $this->_robot;
		
	}
	
}