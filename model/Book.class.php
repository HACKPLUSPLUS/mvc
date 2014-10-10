<?php

class Book
{
	
	private $_author;
	private $_title;
	
	public function __construct( $title_in, $author_in )
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
	
	function getAuthorAndTitle()
	{
		
		return $this->getTitle() . ' by ' . $this->getAuthor();
		
	}
}