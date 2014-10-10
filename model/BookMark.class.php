<?php

class BookMark
{
	
	private $_title;
	private $_page;
	
	function __construct( BookReader $bookReader )
	{
		
		$this->setPage( $bookReader );
		$this->setTitle( $bookReader );
		
	}
	
	public function getPage( BookReader $bookReader )
	{
		
		$bookReader->setPage( $this->_page );
	
	}
	
	public function setPage( BookReader $bookReader )
	{
		
		$this->_page = $bookReader->getPage();
	
	}
	
	public function getTitle( BookReader $bookReader  )
	{
		
		$bookReader->setTitle( $this->_title );
		
	}
	
	public function setTitle( BookReader $bookReader )
	{
		
		$this->_title = $bookReader->getTitle();
	
	}

}