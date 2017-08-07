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
        
        //$sailingId = $mscApi->getSailingIdFromCruiseSearch(2, 0, $shipCode, $departureDate, $arrivalDate);
        
        //echo '<pre>';
        //var_dump($sailingId);
        
        //var_dump($mscApi->getHandShake());

        //$planCode = $mscApi->getPlanCodeFromRequestMessage($sailingId);
        
        //var_dump($planCode);
            
        //$categoryCode = $mscApi->getCategoriesFromRequestMessage($sailingId, $planCode);
        
        //var_dump($categoryCode);
        
        //$cabinNoRequest = $mscApi->cabinAvailabilityRequest($sailingId, $categoryCode);
        //$cabinNo = $cabinNoRequest["AvailableCabins"]["AvailableCabin"]["CabinNo"];
        
        //$categoryCode2 = $mscApi->categoryItemRequestMessage($sailingId, $categoryCode, $planCode); 
        
        //$obs = $mscApi->parseCategoryItemRequestMessage($categoryCode2);
        //var_dump($obs);
        //$priceToBook = $mscApi->priceToBookRequestMessage($sailingId, $categoryCode);
        //var_dump($priceToBook);
         
        //$participants = [
            //[1, 'Text', 'Mister', 'Test', 'A', 'M'],
            //[2, 'Text', 'Madam', 'Test', 'A', 'F']
        //];
        
        //$bookingXml = $mscApi->bookRequestMessage($participants, 'Q', $sailingId, $categoryCode, $cabinNo, $obs);
        //die(var_dump($bookingXml));
        
        $booking = $mscApi->retrieveBookingRequestMessage('26973223');
        
        echo '<pre>';
        
        $bkng = new MscBooking($booking);
        
        //$confirmation = $mscApi->confirmQuoteRequestMessage('26973223');
        
        //echo '<pre>';
        
        //var_dump($confirmation);
        
    }
}