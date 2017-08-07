<?php
/**
 * DiningSeating
 */
class DiningSeating
{
    public $code;
    public $description;
    public $statusCode;
    
    public function __construct($seating) {
        $this->code = $seating['Code'];
        $this->description = $seating['Description'];
        $this->statusCode = $seating['StatusCode'];
    }
}
