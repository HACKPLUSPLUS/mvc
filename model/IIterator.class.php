<?php

interface IIterator {
	/*
	 * @param void
	* @return Boolean
	*/
	public function hasNext();

	/*
	 * @param void
	* @return String
	*/
	public function next();
}