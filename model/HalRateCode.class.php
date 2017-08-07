<?php

class HalRateCode
{
    public $rateCode;
    public $rateName;
    public $statusCode;
    public $transportationType;
    public $transportationDescription;
    
    function __construct($rateCode)
    {
        $this->rateCode = trim($rateCode->Rate['Code']);
        $this->rateName = $rateCode->Rate['Name'];
        $this->statusCode = $rateCode->Status['Code'];
        $this->transportationType = $rateCode->Transportation['Type'];
        $this->transportationDescription = $rateCode->Transportation['Description'];
    }	
}