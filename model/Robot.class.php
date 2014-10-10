<?php

class Robot implements IRobotPlan
{
	
	private $_robotHead;
	private $_robotTorso;
	private $_robotArms;
	private $_robotLegs;
	
	public function setRobotHead( $head_in )
	{

		$this->_robotHead = $head_in;
		
	}
	
	public function getRobotHead()
	{
		
		return $this->_robotHead;
		
	}
	
	public function setRobotTorso( $torso_in )
	{
		
		$this->_robotTorso = $torso_in;
		
	}
	
	public function getRobotTorso()
	{
		
		return $this->_robotTorso;
		
	}
	
	public function setRobotArms( $arms_in )
	{
		
		$this->_robotArms = $arms_in;
		
	}
	
	public function getRobotArms()
	{
		
		return $this->_robotArms;
		
	}
	
	public function setRobotLegs( $legs_in )
	{
		
		$this->_robotLegs = $legs_in;
		
	}
	
	public function getRobotLegs()
	{
		
		return $this->_robotLegs;
		
	}
	
}