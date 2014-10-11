<?php

class SeveralBooks extends AbstractOnTheBookShelf
{
	
	private $_oneBooks = array();
	private $_bookCount;
	
	public function __construct()
	{
		
		$this->setBookCount( 0 );
		
	}
	
	public function getBookCount()
	{
		
		return $this->_bookCount;
		
	}
	
	public function setBookCount( $newCount )
	{
		
		$this->_bookCount = $newCount;
	
	}
	
	public function getBookInfo( $bookToGet )
	{
		
		if( $bookToGet <= $this->_bookCount )
		{
			
			return $this->_oneBooks[$bookToGet]->getBookInfo(1);
			
		} else {
			
			return FALSE;
			
		}
		
	}
	
	public function addBook( $oneBook )
	{
		
		$this->setBookCount( $this->getBookCount() + 1 );
		$this->_oneBooks[$this->getBookCount()] = $oneBook;
		return $this->getBookCount();
	
	}
	
	public function removeBook( $oneBook )
	{
		
		$counter = 0;
		while( ++$counter <= $this->getBookCount() )
		{
			
			if( $oneBook->getBookInfo( 1 ) == $this->_oneBooks[$counter]->getBookInfo( 1 ) )
			{
					
				for( $x = $counter; $x < $this->getBookCount(); $x++ )
				{
						
					$this->_oneBooks[$x] = $this->_oneBooks[$x + 1];
				}
				$this->setBookCount( $this->getBookCount() - 1 );
					
			}
			
		}
		
		return $this->getBookCount();
		
	}
	
}