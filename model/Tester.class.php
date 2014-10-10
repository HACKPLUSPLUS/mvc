<?php

class Tester {
	static function Main() {
		$booksCollection = new BooksCollection();

		$booksCollection->setTitle("Design Patterns");
		$booksCollection->setTitle("1");
		$booksCollection->setTitle("2");
		$booksCollection->setTitle("3");

		$iterator = $booksCollection->createIterator();
		while ($iterator->hasNext()) {
			echo $iterator->next() . '<br />';
		}
	}
}