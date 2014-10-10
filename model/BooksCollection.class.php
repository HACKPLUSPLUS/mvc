<?php

class BooksCollection implements IContainer {
	private $a_titles = array();

	/*
	 * @param void
	* @return IIterator
	*/
	public function createIterator()
	{
		return new BookIterator($this);
	}

	/*
	 * @param string
	* @return void
	*/
	public function setTitle($string)
	{
		$this->a_titles[] = $string;
	}

	/*
	 * @param void
	* @return Array
	*/
	public function getTitles(){
		return $this->a_titles;
	}
}