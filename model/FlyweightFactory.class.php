<?php

class FlyweightFactory
{
	
	private $_books = array();
	
	public function __construct()
	{
		
		$this->_books[1] = NULL;
		$this->_books[2] = NULL;
		$this->_books[3] = NULL;
		
	}
	
	function getBook( $bookKey )
	{
		
		if( NULL == $this->_books[$bookKey] )
		{
			
			$makeFunction = 'makeBook' .$bookKey;
			$this->_books[$bookKey] = $this->$makeFunction();
			
		}
		
		return $this->_books[$bookKey];
	}
	
	function makeBook1()
	{
		
		$book = new FlyweightBook( 'Missy Bangster',  'Get a life!!' );
		
		return $book;
	
	}
	
	function makeBook2()
	{
	
		$book = new FlyweightBook( 'Missy Bangster',  'Get a life!!' );
	
		return $book;
	
	}
	
	function makeBook3()
	{
	
		$book = new FlyweightBook( 'Missy Bangster',  'Get a life!!' );
	
		return $book;
	
	}
	
}