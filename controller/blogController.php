<?php

Class blogController Extends baseController {

public function index() 
{
        
        $filepath = dirname(__DIR__) . '/jobfiles/first.txt';
        
        $file = fopen( $filepath, 'r' );
        
        $text = fread( $file, filesize( $filepath ) );
        
        $profiler = new Profiler( $text );
        
        $bullshit = array (
        		'php',
        		'lamp',
        		'drupal',
        		'typo3',
        		'magento',
        		'bootstrap',
        		'jenkins',
        		'javascript');

        var_dump( $profiler->bullshitMeter( $bullshit ) );
		
        $this->registry->template->blog_heading = 'This is the blog Index';
        $this->registry->template->show('blog_index');
}


public function view(){

	/*** should not have to call this here.... FIX ME ***/

	$this->registry->template->blog_heading = 'This is the blog heading';
	$this->registry->template->blog_content = 'This is the blog content';
	$this->registry->template->show('blog_view');
}

}
?>
