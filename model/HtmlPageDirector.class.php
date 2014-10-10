<?php

class HtmlPageDirector extends AbstractPageDirector
{
	
	private $_builder = NULL;
	
	public function __construct( AbstractPageBuilder $builder_in )
	{
		
		$this->_builder = $builder_in;
		
	}
	
	public  function buildPage()
	{
		
		$this->_builder->setTitle('Testing the HTML page');
		$this->_builder->setHeading('Testing the HTML page');
		$this->_builder->setText('bla bla bla');
		$this->_builder->setText('bla bla bla or');
		$this->_builder->setText('bla bla bla more even so');
		$this->_builder->formatPage();
		
	}
	
	public function getPage()
	{
		
		return $this->_builder->getPage();
		
	}
	
}