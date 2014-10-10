<?php

class BookReader
{
	
	private $_title;
	private $_page;
	
	function __construct( $title_in, $page_in )
	{
		
		$this->setPage( $page_in );
		$this->setTitle( $title_in );
		
	}
	
	public function getPage()
	{
		
		return $this->_page;

	}
	
	public function setPage( $page_in )
	{
		
		$this->_page = $page_in;

	}
	
	public function getTitle()
	{
		
		return $this->_title;
	
	}
	
	public function setTitle( $title_in )
	{
		
		$this->_title = $title_in;
		
		
	}

}