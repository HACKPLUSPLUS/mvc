<?php

Class strategyPatternController Extends baseController
{

	public function index() {
		
		$client = new SomeClient();
		
		//Want an array?
		$client->setOutput( new ArrayOutput() );
		$data = $client->loadOutput();
		
		//Want some JSON?
		$client->setOutput( new JsonStringOutput() );
		$data = $client->loadOutput();
		
	}

}