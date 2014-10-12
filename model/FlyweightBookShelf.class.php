<?php

class FlyweightBookShelf
{
	
	private $_books =  array();
	
	function addBook( $book )
	{
		
		$this->_books[] = $book;
	
	}
	
	function showBooks()
	{
		
		$return_string = NULL;
		
		foreach( $this->_books as $book )
		{
			
			$return_string = 'tilte' . $book->getAuthor() . ' by ' . $book->getTitle();
		
		}
		
		return $return_string;
	
	}

}