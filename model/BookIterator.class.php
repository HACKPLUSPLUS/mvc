<?php

class BookIterator implements IIterator {
	private $i_position = 0;
	private $booksCollection;

	function __construct(BooksCollection $booksCollection)
	{
		$this->booksCollection = $booksCollection;
	}

	/*
	 * @param void
	* @return Boolean
	*/
	public function hasNext()
	{
		if ($this->i_position < count($this->booksCollection->getTitles())) {
			return true;
		}
		return false;
	}

	/*
	 * @param void
	* @return String
	*/
	public function next()
	{
		$m_titles = $this->booksCollection->getTitles();

		if ($this->hasNext()) {
			return $m_titles[$this->i_position++];
		} else {
			return null;
		}
	}
}