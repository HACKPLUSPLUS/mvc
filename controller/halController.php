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
        
        $aantal_cruises = count($cruisesearch->ProductAvailabilityResponse);
        
        //var_dump($aantal_cruises);
        
        if ($aantal_cruises == 1) {
            $sailing_id = $cruisesearch->ProductAvailabilityResponse->SailingId;
        } elseif($aantal_cruises > 1) {
            $sailing_id = $cruisesearch->ProductAvailabilityResponse[0]->SailingId;
        }
        
        //var_dump($sailing_id);
        
        $cabinType = 'Binnenhut';
        
        $rate_xml = $halApi->rateAvailabilityRequest(
                                $sailing_id,
                                '07222018',
                                '7',
                                'KO',
                                2,
                                0,
                                0
                            );
        
        $rate_ignore = [];
        $rate_ignore[] = "BNN";
        $rate_ignore[] = "NNN";
        $rate_ignore[] = "BNP";
        $rate_ignore[] = "NNP";

        $rate_direct_full_pay = [];
        $rate_direct_full_pay[] = "FLL";
        $rate_direct_full_pay[] = "FLK";
        $rate_direct_full_pay[] = "FJM";
        $rate_direct_full_pay[] = "FJL";
        $rate_direct_full_pay[] = "FJK";
        
        //var_dump($rate_xml);
        
        $aantal_rates = count($rate_xml->RateAvailabilityResponse->RateCodeInformation);
        
        //var_dump($aantal_rates);
        
        if ($aantal_rates == 1) {
            $rate_code = (string) $rate_xml->RateAvailabilityResponse->RateCodeInformation->Rate['Code'];
        } elseif ($aantal_rates > 1) {
            $rate_code = (string) $rate_xml->RateAvailabilityResponse->RateCodeInformation[0]->Rate['Code'];
        }
        $rate_code = trim($rate_code);
        
        if (in_array($rate_code, $rate_ignore)) {
            $rate_code = "FIT";
        }
        //var_dump($rate_code);
        
        $categories_xml = $halApi->categoryAvailabilityRequest(
                            $sailing_id,
                            '07222018',
                            '7',
                            'KO',
                            'FIT',
                            2,
                            2,
                            0,
                            0
                        );
        
        //var_dump($categories_xml);
        
        $aantal_cats = count($categories_xml->CategoryAvailabilityResponse->Category);
        
        //var_dump($aantal_cats);
        
        for ($j = 0; $j < $aantal_cats; $j++) {
            $cat_cabin_status = $categories_xml->CategoryAvailabilityResponse->Category[$j]->Status['Code'];
            var_dump($cat_cabin_status);
            $cat_code = (string) $categories_xml->CategoryAvailabilityResponse->Category[$j]['Code'];
            var_dump($cat_code);
            $dek = (int) $categories_xml->CategoryAvailabilityResponse->Category[$j]->Deck['Code'];
            var_dump($dek);
            $prijspp = ($categories_xml->CategoryAvailabilityResponse->Category[$j]->GuestType->Transportation['Amount']);
            var_dump($prijspp);
            $taxpp = (float) ($categories_xml->CategoryAvailabilityResponse->Category[$j]->GuestType->Transportation['TaxFeeAmount']);
            var_dump($taxpp);
            $dek_arr[] = $dek;

            $invoice_xml = $halApi->invoicePricingRequest(
                $sailing_id,
                '07222018',
                '7',
                'KO',
                'FIT',
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
            
            var_dump($hut_totaalprijs);
        }
        
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