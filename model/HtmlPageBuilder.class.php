<?php

class HtmlPageBuilder extends AbstractPageBuilder
{
	
	private $_page = NULL;
	
	function __construct()
	{
		
		$this->_page = new HtmlPage();
		
	}
	
	function setTitle( $title_in )
	{
		
		$this->_page->setTitle( $title_in );
		
	}
	
	function setHeading( $heading_in )
	{
		
		$this->_page->setHeading( $heading_in );
		
	}
	
	function setText( $text_in )
	{
		
		$this->_page->setText( $text_in );
		
	}
	
	function formatPage()
	{
		
		$this->_page->pageFormat();
		
	}
	
	function getPage()
	{
		
		return $this->_page;
	
	}

}