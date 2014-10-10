<?php

interface IRobotBuilder
{
	
	public function buildRobotHead();
	public function buildRobotTorso();
	public function buildRobotArms();
	public function buildRobotLegs();
	public function getRobot();
	
}