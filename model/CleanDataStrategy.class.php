<?php

Class CleanDataStrategy
{
	private $_output;
	
	public function setOutput( OutputInterface $outputType )
	{
		
		$this->_output = $outputType;
		
	}
	
	public function loadOutput()
	{
		
		return $this->_output->load();
	}
	
}