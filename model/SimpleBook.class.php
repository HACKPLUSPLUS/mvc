<?php

class SimpleBook
{
	
	private $_author;
	private $_title;
	
	function __construct( $author_in, $title_in )
	{
		
		$this->_author = $author_in;
		$this->_title = $title_in;
		
	}
	
	function getAuthor()
	{
		
		return $this->_author;
		
	}
	
	function getTitle()
	{
		
		return $this->_title;
	}

}