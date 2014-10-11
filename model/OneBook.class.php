<?php

class OneBook extends AbstractOnTheBookShelf
{
	
	private $_title;
	private $_author;
	
	function __construct( $title_in, $author_in )
	{
		
		$this->_title = $title_in;
		$this->_author = $author_in;
		
	}
	
	function getBookInfo( $bookToGet )
	{
		
		if( 1 == $bookToGet )
		{
			
			return $this->_title . ' by ' . $this->_author;
			
		} else {
			
			return false;
			
		}
	}
	
	function getBookCount()
	{
		
		return 1;
		
	}
	
	function setBookCount( $newCount )
	{
		
		return FALSE;
		
	}
	
	function addBook( $oneBook )
	{
		
		return FALSE;
		
	}
	
	function removeBook( $oneBook )
	{
		
		return FALSE;
		
	}

}