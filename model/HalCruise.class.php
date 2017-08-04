<?php

class HalCruise
{
    public $sailingId;
    public $sailingStatusCode;
    public $sailingDate;
    public $sailingDurationDays;
    public $sailingShipCode;
    public $sailingShipName;
    public $embarkPortCode;
    public $debarkPortCode;
    public $itineraryCode;
    public $itineraryPortCount;

    function __construct($cruise)
    {
        $this->sailingId = $cruise->SailingId;
        $this->sailingStatusCode = $cruise->SailingStatus['Code'];
        $this->sailingDate = $cruise->Sailing['Date'];
        $this->sailingDurationDays = $cruise->Sailing['DurationDays'];
        $this->sailingShipCode = $cruise->Sailing->Ship['Code'];
        $this->sailingShipName = $cruise->Sailing->Ship['Name'];
        $this->embarkPortCode = $cruise->EmbarkPort['Code'];
        $this->debarkPortCode = $cruise->DebarkPort['Code'];
        $this->itineraryCode = $cruise->Itinerary['Code'];
        $this->itineraryPortCount = $cruise->Itinerary['PortCnt'];
        var_dump($cruise->Itinerary['PortCnt']);
    }	
}