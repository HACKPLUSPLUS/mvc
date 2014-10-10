<?php

class BookTitleStarDecorator extends BookTitleDecorator
{
	
	private $_btd;
	
	public function __construct( BookTitleDecorator $btd_in )
	{
		
		$this->_btd = $btd_in;
		
	}
	
	public function starTitle()
	{
		
		$this->_btd->_title = '**' . $this->_btd->_title . '**';
		
	}
	
}