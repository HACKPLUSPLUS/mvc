<?php

class BookTitleDecorator
{
	
	protected $_book;
	protected $_title;
	
	public function __construct( Book $book_in )
	{
		
		$this->_book = $book_in;
		$this->resetTitle();
		
	}
	
	//doing this so the original object is not altered
	function resetTitle()
	{
		
		$this->_title = $this->_book->getTitle();
		
	}
	
	function showTitle()
	{
		
		return $this->_title;
		
	}
	
}