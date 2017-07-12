<?php
ini_set('max_execution_time', 300);
class halController Extends baseController
{
    public function index() 
    {   
        $halApi = new HalApi();
        
        $cruisesearch = $halApi->productAvailabilityRequest(
        '07222018',
        '07292018',
        '7',
        '7',
        'KO',
        2
    );
        
        //var_dump($cruisesearch);
        
        $sailingIds = $halApi->getSailingIdsFromCruiseSearch($cruisesearch);
        
        //var_dump($sailingIds[0]);
        
        $cabinType = 'Binnenhut';
        
        $rateXml = $halApi->rateAvailabilityRequest(
                                $sailingIds[0],
                                '07222018',
                                '7',
                                'KO',
                                2,
                                0,
                                0
                            );
        
        

        $rate_direct_full_pay = [];
        $rate_direct_full_pay[] = "FLL";
        $rate_direct_full_pay[] = "FLK";
        $rate_direct_full_pay[] = "FJM";
        $rate_direct_full_pay[] = "FJL";
        $rate_direct_full_pay[] = "FJK";
        
        var_dump($rateXml);
        
        $rateCodes = $halApi->getRateCodesFromRateAvailabilityRequest($rateXml);
        
        var_dump($rateCodes);
        
        $ignoreRates = ['BNN', 'NNN', 'BNP', 'NNP'];

        $usableRateCodes = array_values(array_diff($rateCodes, $ignoreRates));
        
        var_dump($usableRateCodes);

        $availableCategoriesXml = $halApi->categoryAvailabilityRequest(
                            $sailingIds[0],
                            '07222018',
                            '7',
                            'KO',
                            $usableRateCodes[1],
                            2,
                            2,
                            0,
                            0
                        );
        
        var_dump($availableCategoriesXml);
        
        $availableCategories = $halApi->getAvailableCategoriesFromRequest($availableCategoriesXml);
        
        var_dump($availableCategories);
        
        $availableCategoryObjects = $halApi->getAvailableCategoryObjectsFromRequest($availableCategoriesXml);
        
        
        var_dump($availableCategoryObjects);
        
        die();
        for ($j = 0; $j < $availableCategories; $j++) {
            $halApi->getAvailableCategoriesFromRequest();
            /*$cat_cabin_status = $availableCategoriesXml->CategoryAvailabilityResponse->Category[$j]->Status['Code'];
            var_dump($cat_cabin_status);
            $cat_code = (string) $availableCategoriesXml->CategoryAvailabilityResponse->Category[$j]['Code'];
            var_dump($cat_code);
            $dek = (int) $availableCategoriesXml->CategoryAvailabilityResponse->Category[$j]->Deck['Code'];
            var_dump($dek);
            $prijspp = ($availableCategoriesXml->CategoryAvailabilityResponse->Category[$j]->GuestType->Transportation['Amount']);
            var_dump($prijspp);
            $taxpp = (float) ($availableCategoriesXml->CategoryAvailabilityResponse->Category[$j]->GuestType->Transportation['TaxFeeAmount']);
            var_dump($taxpp);
            $dek_arr[] = $dek;

            $invoice_xml = $halApi->invoicePricingRequest(
                $sailingIds[0],
                '07222018',
                '7',
                'KO',
                $usableRateCodes[1],
                $cat_code,
                2,
                0,
                0
            );

            
            $agentinvoice_items_count = count($invoice_xml->InvoicePricingResponse->AgentInvoiceItem);

            var_dump($agentinvoice_items_count);
            
            if ($agentinvoice_items_count > 1) {
                for ($k = 0; $k < $agentinvoice_items_count; $k++) {
                    if ($invoice_xml->InvoicePricingResponse->AgentInvoiceItem[$k]['Code'] == "GRSS") {
                        $hut_totaalprijs = (float) $invoice_xml->InvoicePricingResponse->AgentInvoiceItem[$k]['Amount'];
                    }
                }
            } elseif ($agentinvoice_items_count == 1) {
                $hut_totaalprijs = (float) $invoice_xml->InvoicePricingResponse->AgentInvoiceItem['Amount'];
            }
            
            var_dump($hut_totaalprijs);*/
        }
        
        die();
        
        $dining_xml = $halApi->diningAvailabilityRequest($sailing_id, 2, "CCDINAV1");
        
        var_dump($dining_xml);
        
        $dining_seatings = $dining_xml->DiningAvailabilityResponse;
        foreach ($dining_seatings->DiningSeating as $dining_seating) {
            if ($dining_seating['StatusCode'] == "AV") {
                var_dump($dining_seating['Code']);
                var_dump($dining_seating['Description']);
            }
        }
        
        $cabinAvailability = $halApi->cabinAvailabilityRequest($sailing_id, '07222018', '7', 'KO', $cat_code, 2, 'CCCABAV1');
        
        $aantal_hutten = count($cabinAvailability->CabinAvailabilityResponse);
        
        var_dump($aantal_hutten);
        
        $hutnummer = [];
        if($aantal_hutten == 1) {
            $hutnummer[] = $cabinAvailability->CabinAvailabilityResponse['CabinNumber'];
        } elseif($aantal_hutten > 1) {
            for($j = 0; $j < $aantal_hutten; $j++) {
                $cabin_no = $cabinAvailability->CabinAvailabilityResponse[$j]['CabinNumber'];

                if(!in_array($cabin_no, $hutnummer) && $cabin_no != "WAITL") {
                    $hutnummer[] = $cabin_no;
                }
            }
        }
        
        var_dump($hutnummer);
        var_dump($sailing_id);
        $cabinHold = $halApi->cabinHoldRequest($sailing_id, '07222018', '7', 'KO', $rate_code, $cat_code, 2, '4008');
        
        var_dump($cabinHold);
        
        $guests = [];
        $guest = [
            'firstName' => 'Jesse',
            'lastName' => 'Test',
            'titleCode' => 'MR',
            'pastGuestInd' => '1',
            'birthDate' => '07111972',
            'ageAmount' => '45',
            'nationalityCode' => 'NL',
            'genderCode' => 'M'
        ];
        array_push($guests, $guest);
        $guest = [
            'firstName' => 'Charming',
            'lastName' => 'Test',
            'titleCode' => 'MS',
            'pastGuestInd' => '1',
            'birthDate' => '07111992',
            'ageAmount' => '25',
            'nationalityCode' => 'NL',
            'genderCode' => 'F'
        ];
        array_push($guests, $guest);
        
        $bookingXml = $halApi->createReviseRequest($sailing_id, '07222018', '7', 'KO', $rate_code, $cat_code, 'KG', '4008', 1, 2, $guests);
    
        var_dump($bookingXml);
        
        $bookingNum = $bookingXml->CreateReviseResponse->BookNum; //HH8MCR
        
        var_dump($bookingNum);
        /*$shipCode = 'MR';
        $departureDate = '2017-12-15';
        $arrivalDate = '2017-12-22';
        
        $sailingId = $mscApi->getSailingIdFromCruiseSearch(2, 0, $shipCode, $departureDate, $arrivalDate);
        
        echo '<pre>';
        var_dump($sailingId);
            
        $planCode = $mscApi->getPlanCodeFromRequestMessage($sailingId);
        
        var_dump($planCode);
            
        $categoryCode = $mscApi->getCategoriesFromRequestMessage($sailingId, $planCode);
        
        var_dump($categoryCode);
        
        $cabinNoRequest = $mscApi->cabinAvailabilityRequest($sailingId, $categoryCode);
        $cabinNo = $cabinNoRequest["AvailableCabins"]["AvailableCabin"]["CabinNo"];
        
        $categoryCode2 = $mscApi->categoryItemRequestMessage($sailingId, $categoryCode, $planCode); 
        
        $obs = $mscApi->parseCategoryItemRequestMessage($categoryCode2);
        var_dump($obs);
        $priceToBook = $mscApi->priceToBookRequestMessage($sailingId, $categoryCode);
        var_dump($priceToBook);
         
        $participants = [
            [1, 'Text', 'Mister', 'Test', 'A', 'M'],
            [2, 'Text', 'Madam', 'Test', 'A', 'F']
        ];
        
        $bookingXml = $mscApi->bookRequestMessage($participants, 'Q', $sailingId, $categoryCode, $cabinNo, $obs);
        die(var_dump($bookingXml));*/
    }
}