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
        
        //$shipCode = 'AR';
        //$departureDate = '2017-11-28';
        //$arrivalDate = '2017-12-02';
        
        //$sailingId = $mscApi->getSailingIdFromCruiseSearch(2, 0, $shipCode, $departureDate, $arrivalDate);
        
        //var_dump($mscApi->getHandShake());

        //$planCodes = $mscApi->getPlanCodeFromRequestMessage($sailingId);
        //var_dump($planCodes);
        
        //foreach ($planCodes as $planCode) {
            //$categoryCode = $mscApi->getCategoriesFromRequestMessage($sailingId, $planCode['planCode']);
            //var_dump($categoryCode);
        //}
            
        //$categoryCode = $mscApi->getCategoriesFromRequestMessage($sailingId, $planCode);
        
        //var_dump($categoryCode);
        
        //$cabinNoRequest = $mscApi->cabinAvailabilityRequest($sailingId, $categoryCode[0]);
        //$cabinNo = $cabinNoRequest["AvailableCabins"]["AvailableCabin"]["CabinNo"];
        //$cabinNo = $mscApi->parseCabinAvailabilityRequest($cabinNoRequest);
        //var_dump($cabinNo[0]);
        
        //$categoryCode2 = $mscApi->categoryItemRequestMessage($sailingId, $categoryCode[0], $planCodes[0]['planCode']);
        
        //var_dump($categoryCode2);
        
        //$obs = $mscApi->parseCategoryItemRequestMessage($categoryCode2);
        //var_dump($obs);
        //$priceToBook = $mscApi->priceToBookRequestMessage($sailingId, $categoryCode[0]);
        //var_dump($priceToBook["BookingPrice"]);
         
        //$participants = [
            //[1, 'Text', 'Mister', 'Test', 'A', 'M'],
            //[2, 'Text', 'Madam', 'Test', 'A', 'F']
        //];
        
        //$bookingXml = $mscApi->bookRequestMessage($participants, 'Q', $sailingId, $categoryCode[0], $cabinNo[0], $obs);
        //die(var_dump($bookingXml));
        
        $booking = $mscApi->retrieveBookingRequestMessage('26999770'); //26999770 //26973223
        
        echo '<pre>';
        
        $bkng = new MscBooking($booking);
        
        var_dump($bkng);
        //$confirmation = $mscApi->confirmQuoteRequestMessage('26973223');
        
        //echo '<pre>';
        
        //var_dump($confirmation);
        
    }
    
    public function show()
    {
        $db = new PDO("mysql:host=localhost;dbname=models", 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $cruiseId = $_GET['cruiseId'];
	
        $sql = $db->prepare("SELECT * FROM cruises INNER JOIN brokers ON cruises.broker_id = brokers.id WHERE cruises.id = :cruiseId");
        $sql->bindParam(':cruiseId', $cruiseId, PDO::PARAM_INT);
        $sql->execute();
        $cruise = $sql->fetchObject('stdClass');
        
        echo 'Broker : ' . $cruise->name . '<br />';
        echo 'From : ' . $cruise->begindatum . ' To : ' . '<br />';
        echo 'Duration : ' . $cruise->duration . '<br />';
        echo 'Broker ID : ' . $cruise->broker_id . '<br />';
        echo 'Ship ID : ' . $cruise->ship_id . '<br />';
                
        $sql = $db->prepare("SELECT `prices`.`prijs` AS prijs,
   `prices`.`singleprijs` AS singleprijs,
   `prices`.`kindprijs` AS kindprijs,
   `prices`.`babyprijs` AS babyprijs,
   `prices`.`derdeprijs` AS derdeprijs,
   `prices`.`cruise_id` AS cruise_id,
   `prices`.`brochure` AS brochure,
   `prices`.`brochure_auto` AS brochure_auto,
   `prices`.`prijs_manual` AS prijs_manual,
   `prices`.`rate` AS rate,
   `cabin_codes`.`id` AS categorie_id,
   `cabin_codes`.`code` AS categorie_code,
   `cabin_codes`.`naam` AS categorie_naam,
   `cabin_codes`.`groep` AS categorie_groep,
   `cabin_codes`.`img_url` AS img_url,
   `cabin_codes`.`min_bezetting` AS bezetting
   FROM `prices`
   INNER JOIN `cabin_codes` ON `cabin_codes`.`id`=`prices`.`hut_id`
   WHERE `prices`.`cruise_id`=:cruiseId
   AND `cabin_codes`.`schip_id`=:shipId
   AND `groep`!=''
   AND (`prices`.`prijs`!=0.00 OR `prices`.`prijs_manual`!=0.00)
   AND `cabin_codes`.`naam`!='(BAK)'
   AND `cabin_codes`.`min_bezetting`>=2
   GROUP BY `cabin_codes`.`groep`
   ORDER BY `prices`.`prijs` ASC");
        $sql->bindParam(':cruiseId', $cruiseId, PDO::PARAM_INT);
        $sql->bindParam(':shipId', $cruise->ship_id, PDO::PARAM_INT);
        $sql->execute();
        $prices = $sql->fetchAll(PDO::FETCH_OBJ);
        
        echo '<pre>';
        foreach ($prices as $price) {
            echo 'Huttype : ' . $price->categorie_groep . '<br />';
            echo 'Hut naam : ' . $price->categorie_naam . '<br />';
            echo 'Categorie code : ' . $price->categorie_code . '<br />';
            echo 'Prijs : ' . $price->prijs . '<br />';
        }
    
        $sql = $db->prepare("SELECT id, begindatum FROM cruises
            WHERE `cruises`.`broker_id`=:brokerId
            AND `cruises`.`ship_id`=:shipId
            AND `cruises`.`port_id`=:portId
            AND `cruises`.`bestemming_id`=:destinationId
            AND `cruises`.`duration`=:duration
            AND `cruises`.`vaarroute`=:navigationalRoute
            AND `cruises`.`begindatum`>NOW()
            AND `cruises`.`published`='Y'
            ORDER BY `begindatum` ASC");
        $sql->bindParam(':shipId', $cruise->ship_id, PDO::PARAM_INT);
        $sql->bindParam(':brokerId', $cruise->broker_id, PDO::PARAM_INT);
        $sql->bindParam(':portId', $cruise->port_id, PDO::PARAM_INT);
        $sql->bindParam(':destinationId', $cruise->bestemming_id, PDO::PARAM_INT);
        $sql->bindParam(':duration', $cruise->duration, PDO::PARAM_INT);
        $sql->bindParam(':navigationalRoute', $cruise->vaarroute, PDO::PARAM_INT);
        $sql->execute();

        $dates = $sql->fetchAll(PDO::FETCH_OBJ);

        echo '<pre>';
        foreach($dates as $key => $date) {
            echo $key;
            var_dump($date);
        }
    }
}