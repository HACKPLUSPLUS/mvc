<?php

class BookAdapter
{
	
	private $_book;
	
	function __construct( SimpleBook $book_in )
	{
		
		$this->_book = $book_in;
		
	}
	
	function getAuthorAndTitle()
	{
		
		return $this->_book->getTitle() . ' by ' . $this->_book->getAuthor();
		
	}

}