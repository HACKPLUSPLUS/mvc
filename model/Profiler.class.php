<?php

class Profiler
{
	
	private $_text;
	private $_textLength;
	private $_numberOfWords;
	private $_matchCount = 0;
	private $_percentage;
	
	public function __construct( $text_in )
	{
		
		$this->setText( $text_in );
		$this->setTextLength();
		$this->setNumberOfWords();
		
	}
	
	private function setText( $text_in )
	{
		
		$this->_text = $text_in;
		
	}
	
	private function getText()
	{
		
		return $this->_text;
		
	}
	
	private function setTextLength()
	{
		
		$this->_textLength = strlen( $this->getText() );
		
	}
	
	private function getTextLength()
	{
		
		return $this->_textLength;
		
	}
	
	private function setNumberOfWords()
	{
		
		$this->_numberOfWords = str_word_count( $this->getText() );
		
	}
	
	private function getNumberOfWords()
	{
		
		return $this->_numberOfWords;
	
	}
	
	private function setMatchCount( $count_in )
	{
		
		$this->_matchCount += $count_in;
		
	}
	
	private function getMatchCount()
	{
		
		return $this->_matchCount;
	
	}
	
	private function formatText( $text_in )
	{
		
		return strtolower( $text_in );
		
	}
	
	private function setPercentage()
	{
		
		$this->_percentage = (int) $this->getMatchCount() / (int) $this->getTextLength() * 100;
	
	}
	
	private function getPercentage()
	{
		
		return $this->_percentage;
		
	}
	
	/**
	 *
	 * Function to measure bs in a string
	 *
	 * @param    string     $string
	 * @return    float
	 *
	 */
	function bullshitMeter( $bullshit_in )
	{
		
		foreach( $bullshit_in as $word )
		{
			
			/*** get the number of occurances ***/
			$occurances = substr_count( $this->formatText( $this->getText() ), $word );
			
			/*** get the lenth of the bs ***/
			$this->setMatchCount( strlen( $word ) * $occurances );
			
		}
	
		$this->setPercentage();
		
		/*** round to two places ***/
		return round( $this->getPercentage(), 2 );
	
	}
	
}