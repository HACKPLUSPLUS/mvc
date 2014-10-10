<?php

class HtmlPage
{
	
	private $_page = NULL;
	private $_page_title = NULL;
	private $_page_heading = NULL;
	private $_page_text = NULL;
	
	function __construct()
	{
		
	}
	
	function showPage()
	{
		
		return $this->_page;
		
	}
	
	function setTitle( $title_in )
	{
		
		$this->_page_title = $title_in;
		
	}
	
	function setHeading( $heading_in )
	{
		
		$this->_page_heading = $heading_in;
		
	}

	function setText( $text_in )
	{
		
		$this->_page_text = $text_in;
		
	}
	
	function pageFormat()
	{
		
		$this->_page  = '<html>';
		$this->_page .= '<head><title>'.$this->_page_title.'</title></head>';
		$this->_page .= '<body>';
		$this->_page .= '<h1>'.$this->_page_heading.'</h1>';
		$this->_page .= $this->_page_text;
		$this->_page .= '</body>';
		$this->_page .= '</html>';
		
	}
	
}