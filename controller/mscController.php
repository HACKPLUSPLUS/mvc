<?php

class mscController Extends baseController
{
    public function index() 
    {   
        $mscApi = new MscApi();
        $mscApi->login();
        
        /*$getBooking = $mscApi->retrieveBookingRequestMessage('26800155'); //26800155 //26798485
        var_dump($getBooking);*/
        
        //$shipCode = 'MR';
        //$departureDate = '2017-12-15';
        //$arrivalDate = '2017-12-22';
        
        $shipCode = 'AR';
        $departureDate = '2017-11-28';
        $arrivalDate = '2017-12-02';
        
        $sailingId = $mscApi->getSailingIdFromCruiseSearch(2, 0, $shipCode, $departureDate, $arrivalDate);
        
        //var_dump($mscApi->getHandShake());

        $planCodes = $mscApi->getPlanCodeFromRequestMessage($sailingId);
        var_dump($planCodes);
        
        foreach ($planCodes as $planCode) {
            $categoryCode = $mscApi->getCategoriesFromRequestMessage($sailingId, $planCode['planCode']);
            //var_dump($categoryCode);
        }
            
        //$categoryCode = $mscApi->getCategoriesFromRequestMessage($sailingId, $planCode);
        
        var_dump($categoryCode);
        
        $cabinNoRequest = $mscApi->cabinAvailabilityRequest($sailingId, $categoryCode);
        //$cabinNo = $cabinNoRequest["AvailableCabins"]["AvailableCabin"]["CabinNo"];
        $cabinNo = $mscApi->parseCabinAvailabilityRequest($cabinNoRequest);
        var_dump($cabinNo[0]);
        
        $categoryCode2 = $mscApi->categoryItemRequestMessage($sailingId, $categoryCode, $planCodes[0]['planCode']);
        
        //var_dump($categoryCode2);
        
        $obs = $mscApi->parseCategoryItemRequestMessage($categoryCode2);
        var_dump($obs);
        $priceToBook = $mscApi->priceToBookRequestMessage($sailingId, $categoryCode);
        var_dump($priceToBook["BookingPrice"]);
         
        $participants = [
            [1, 'Text', 'Mister', 'Test', 'A', 'M'],
            [2, 'Text', 'Madam', 'Test', 'A', 'F']
        ];
        
        $bookingXml = $mscApi->bookRequestMessage($participants, 'Q', $sailingId, $categoryCode, $cabinNo[0], $obs);
        die(var_dump($bookingXml));
        
        //$booking = $mscApi->retrieveBookingRequestMessage('26973223');
        
        //echo '<pre>';
        
        //$bkng = new MscBooking($booking);
        
        //$confirmation = $mscApi->confirmQuoteRequestMessage('26973223');
        
        //echo '<pre>';
        
        //var_dump($confirmation);
        
    }
}