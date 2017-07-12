<?php
/**
 * HalApi class initiates SoapClient
 */
class HalApi
{
    CONST HAL_REAL_ADDRESS = 'https://b2b.halw.com/invoke/HalApi/Access';
    CONST HAL_TEST_ADDRESS = 'https://testb2b.halw.com/invoke/HalApi/Access';

    private $client = false;
    private $userName = 'CruiseReizen';
    private $passWord = 'CruiseReizen626';
    private $sslVerify = true;

    public function __construct()
    {
        $curl = curl_init();

        $this->client = $curl;
    }

    public function productAvailabilityRequest($departureDate, $returnDate, $durationDaysMin, $durationDaysMax, $shipCode, $numGuests, $method = "POST")
    {
        $xml = <<<EOF
<ProductAvailabilityRequest SegmentId="CCPROAV1">
    <DepDate From="{$departureDate}" To="{$returnDate}" />
    <DurationDays Minimum="{$durationDaysMin}" Maximum="{$durationDaysMax}" />
    <Ship Code="{$shipCode}" />
    <Destination Code="" />
    {$this->getGuestXml($numGuests)}
</ProductAvailabilityRequest>
EOF;

	return $this->executeCurl($this->wrapRequest('CCPROAV1', $xml), $method);
    }

    public function rateAvailabilityRequest($sailingId, $sailDate, $durationDays, $shipCode, $numberOfAdults, $numberOfChildren, $numberOfInfants, $method = "POST")
    {
        $xml = <<<EOF
<RateAvailabilityRequest SegmentId="RATAV1">
    <SailingId>{$sailingId}</SailingId>
    <SailDate>{$sailDate}</SailDate>
    <DurationDays>{$durationDays}</DurationDays>
    <Ship Code="{$shipCode}" />
    <Currency Code="EUR" />
    <Transportation Type="O" />
    <City Code="AMS" />
    <BestFareInd>Y</BestFareInd>
    <IncludeGroupsInd>Y</IncludeGroupsInd>
    {$this->getGuestXmlWithAgeCode($numberOfAdults, 'A')}
    {$this->getGuestXmlWithAgeCode($numberOfChildren, 'C')}
    {$this->getGuestXmlWithAgeCode($numberOfInfants, 'I')}
</RateAvailabilityRequest>
EOF;

	return $this->executeCurl($this->wrapRequest('CCRATAV1', $xml), $method);
    }

    public function categoryAvailabilityRequest($sailingId, $sailDate, $durationDays, $shipCode, $rateCode, $numberOfGuests, $numberOfAdults, $numberOfChildren, $numberOfInfants, $method = "POST")
    {
        $xml = <<<EOF
<CategoryAvailabilityRequest SegmentId="CATAV1">
    <SailingId>{$sailingId}</SailingId>
    <SailDate>{$sailDate}</SailDate>
    <DurationDays>{$durationDays}</DurationDays>
    <Ship Code="{$shipCode}" />
    <City Code="AMS" />
    <Currency Code="EUR" />
    <Transportation Type="O" />
    <Rate Code="{$rateCode}" />
    <NumberOfGuests>{$numberOfGuests}</NumberOfGuests>
    {$this->getGuestXmlWithAgeCode($numberOfAdults, 'A')}
    {$this->getGuestXmlWithAgeCode($numberOfChildren, 'C')}
    {$this->getGuestXmlWithAgeCode($numberOfInfants, 'I')}
    <IncludeGroupsInd>Y</IncludeGroupsInd>
</CategoryAvailabilityRequest>
EOF;

	return $this->executeCurl($this->wrapRequest('CCCATAV1', $xml), $method);
    }

    public function invoicePricingRequest($sailingId, $sailDate, $durationDays, $shipCode, $rateCode, $categoryCode, $numberOfAdults, $numberOfChildren, $numberOfInfants, $method = "POST")
    {
        $xml = <<<EOF
<InvoicePricingRequest SegmentId="INVPR1">
    <AgentGuestDetailInd>Y</AgentGuestDetailInd>
    <SailingId>{$sailingId}</SailingId>
    <SailDate>{$sailDate}</SailDate>
    <DurationDays>{$durationDays}</DurationDays>
    <Ship Code="{$shipCode}" />
    <Currency Code="EUR" />
    <Rate Code="{$rateCode}" />
    <Category Code="{$categoryCode}" />
    <Cabin Number="" />
    {$this->getGuestXmlComplete($numberOfAdults, 'Y')}
    {$this->getGuestXmlComplete($numberOfChildren, 'C')}
    {$this->getGuestXmlComplete($numberOfInfants, 'I')}
</InvoicePricingRequest>
EOF;

	return $this->executeCurl($this->wrapRequest('CCINVPR1', $xml), $method);
    }

    public function cabinHoldRequest($sailingId, $sailDate, $durationDays, $shipCode, $rateCode, $categoryCode, $numberOfGuests, $cabinNumber, $method = "POST")
    {
        $xml = <<<EOF
<CabinHoldRequest SegmentId="CABHD1">
    <HoldReleaseActionCode>H</HoldReleaseActionCode>
    <SailingId>{$sailingId}</SailingId>
    <SailDate>{$sailDate}</SailDate>
    <DurationDays>{$durationDays}</DurationDays>
    <Ship Code="{$shipCode}" />
    <Currency Code="EUR" />
    <Rate Code="{$rateCode}" />
    <Category Code="{$categoryCode}" />
    <NumberOfGuests>{$numberOfGuests}</NumberOfGuests>
    <Cabin Number="{$cabinNumber}" />
</CabinHoldRequest>
EOF;

	return $this->executeCurl($this->wrapRequest('CCCABHD1', $xml), $method);
    }

    public function createReviseRequest($sailingId, $sailDate, $durationDays, $shipCode, $rateCode, $categoryCode, $bedConfigurationCode, $cabinNumber, $diningSeatingCode, $diningSeatingTableCode, $guests, $method = "POST")
    {
        $xml = <<<EOF
<CreateReviseRequest SegmentId="BKCRV1">
    <SailingId>{$sailingId}</SailingId>
    <SailDate>{$sailDate}</SailDate>
    <DurationDays>{$durationDays}</DurationDays>
    <Ship Code="{$shipCode}" />
    <Currency Code="EUR" />
    <Rate Code="{$rateCode}" />
    <Category Code="{$categoryCode}"/>
    <BedConfiguration Code="{$bedConfigurationCode}" />
    <Cabin Number="{$cabinNumber}" />
    <DiningSeating Code="{$diningSeatingCode}" SmokingPrefCode="N" TableCode="{$diningSeatingTableCode}" />
    {$this->getGuestXmlBooking($guests)}
</CreateReviseRequest>
EOF;

	return $this->executeCurl($this->wrapRequest('CCNEWBK1', $xml), $method);
    }

    public function diningAvailabilityRequest($sailingId, $numberOfGuests, $messageId, $method = "POST")
    {
        $xml = <<<EOF
<DiningAvailabilityRequest SegmentId='DINAV1'>
    <SailingId>{$sailingId}</SailingId>
    <Rate Code='RH3' />
    <NumberOfGuests>{$numberOfGuests}</NumberOfGuests>
</DiningAvailabilityRequest>
EOF;

	return $this->executeCurl($this->wrapRequest($messageId, $xml), $method);
    }

    public function cabinAvailabilityRequest($sailingId, $sailDate, $durationDays, $shipCode, $categoryCode, $numberOfGuests, $messageId, $method = "POST")
    {
        $xml = <<<EOF
<CabinAvailabilityRequest SegmentId="CABAV1">
    <SailingId>{$sailingId}</SailingId>
    <SailDate>{$sailDate}</SailDate>
    <DurationDays>{$durationDays}</DurationDays>
    <Ship Code="{$shipCode}" />
    <Currency Code="EUR" />
    <Rate Code="FIT" />
    <Category Code="{$categoryCode}" />
    <NumberOfGuests>{$numberOfGuests}</NumberOfGuests>
    {$this->getGuestXmlWithCityCode($numberOfGuests)}
</CabinAvailabilityRequest>
EOF;

	return $this->executeCurl($this->wrapRequest($messageId, $xml), $method);
    }

    private function getGuestXml($numGuests)
    {
        $xml = '';
        for ($i = 1; $i<= $numGuests; $i++) {
            $xml .= '<Guest SeqNumber="' . $i . '" />';
        }

        return $xml;
    }

    private function getGuestXmlWithAgeCode($numGuests, $ageCode)
    {
        $xml = '';
        for($i = 1; $i<= $numGuests; $i++) {
            $xml .= '<Guest SeqNumber="' . $i . '" AgeCode="' . $ageCode . '" />';
        }

        return $xml;
    }

    private function getGuestXmlWithCityCode($numGuests)
    {
        $xml = '';
        for($i = 1; $i<= $numGuests; $i++) {
            $xml .= '<Guest SeqNumber="' . $i . '" TransportationType="O" CityCode="AMS" />';
        }

        return $xml;
    }

    private function getGuestXmlComplete($numGuests, $ageCode)
    {
        $xml = '';
        for ($i = 1; $i<= $numGuests; $i++) {
            $xml .= '<Guest ActionCode="N" SeqNumber="' . $i . '">';
            $xml .= '<Age Code="' . $ageCode . '" Amount="' . ($ageCode === 'Y') ? '35' : '0' . '" />';
            $xml .= '<FirstName>FIRST</FirstName>';
            $xml .= '<LastName>NAME</LastName>';
            $xml .= '<PastGuestInd>N</PastGuestInd>';
            $xml .= '<Gender Code="M" />';
            $xml .= '<Transportation TypeCode="O" CityCode="AMS" DirectionCode="R" />';
            $xml .= '<Package Code="B0TNOXFR" TypeCode="B"></Package>';
            $xml .= '<Package Code="A0TNOXFR" TypeCode="A"></Package>';
            $xml .= '<SpecialService TypeCode="UPG" Code="Y" />';
            $xml .= '<InsuranceInd>N</InsuranceInd>';
            $xml .= '</Guest>';
        }

        return $xml;
    }

    private function getGuestXmlBooking($guests)
    {
        $xml = '';

        foreach ($guests as $key => $guest) {
            $count = $key + 1;
            $xml .= '<Guest ActionCode="N" SeqNumber="' . $count . '">';
            $xml .= '<FirstName>' . $guest['firstName'] . '</FirstName>';
            $xml .= '<LastName>' . $guest['lastName'] . '</LastName>';
            $xml .= '<Title Code="' . $guest['titleCode'] . '" />';
            $xml .= '<PastGuestInd>' . $guest['pastGuestInd'] . '</PastGuestInd>';
            $xml .= '<BirthDate>' . $guest['birthDate'] . '</BirthDate>';
            $xml .= '<Age Code="Y" Amount="' . $guest['ageAmount'] . '" />';
            $xml .= '<Nationality Code="' . $guest['nationalityCode'] . '" />';
            $xml .= '<Gender Code="' . $guest['genderCode'] . '" />';
            $xml .= '<Transportation TypeCode="O" CityCode="AMS" DirectionCode="R" />';
            $xml .= '<Package Code="B0TNOXFR" TypeCode="B" />';
            $xml .= '<Package Code="A0TNOXFR" TypeCode="A" />';
            $xml .= '<SpecialService Code="Y" TypeCode="UPG" />';
            $xml .= '<InsuranceInd>N</InsuranceInd>';
            $xml .= '<ImmigrationDocInfo></ImmigrationDocInfo>';
            $xml .= '</Guest>';
        }

        return $xml;
    }

    private function wrapRequest($messageId, $xml)
    {
        $xmlEnvelop = <<<EOF
<CruiseLineRequest>
    <MessageHeader SegmentId="MSGHDR">
        <MessageId>{$messageId}</MessageId>
        <SessionId>3395</SessionId>
        <CruiseLineCode>HAL</CruiseLineCode>
        <SystemId>H1</SystemId>
        <UserName>CruiseReizen</UserName>
        <AgencyId>88204</AgencyId>
        <UICode>7</UICode>
        <VersionNum>3.0</VersionNum>
        <AttemptCnt>1</AttemptCnt>
        <SendDescriptionInd>Y</SendDescriptionInd>
        <Copyright>Copyright (C) 2000 Carnival Corporation. All rights reserved.</Copyright>
    </MessageHeader>
    {$xml}
</CruiseLineRequest>
EOF;

        return $xmlEnvelop;
    }

    private function executeCurl($postFields, $method)
    {
        curl_setopt_array(
            $this->client, [
                CURLOPT_URL => self::HAL_TEST_ADDRESS,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_SSL_VERIFYPEER => $this->sslVerify,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => $method,
                CURLOPT_POSTFIELDS => $postFields,
                CURLOPT_HTTPHEADER => [
                    "authorization: Basic ".base64_encode("$this->userName:$this->passWord"),
                    "cache-control: no-cache",
                    "content-type: text/xml"
                ],
            ]
        );

        $response = curl_exec($this->client);
	$err = curl_error($this->client);

	if ($err) {
	  return $err;
	} else {
	  return simplexml_load_string($response);
	}
    }

    public function getSailingIdsFromCruiseSearch($xml)
    {
        $sailingIds = [];
        if (isset($xml->ProductAvailabilityResponse)) {
            foreach ($xml->ProductAvailabilityResponse as $cruise) {
                array_push($sailingIds, $cruise->SailingId);
            }
        }

        return $sailingIds;
    }

    public function getRateCodesFromRateAvailabilityRequest($xml)
    {
        $rateCodes = [];
        if (isset($xml->RateAvailabilityResponse->RateCodeInformation)) {
            foreach ($xml->RateAvailabilityResponse->RateCodeInformation as $rateCode) {
                array_push($rateCodes, trim($rateCode->Rate['Code']));
            }
        }

        return $rateCodes;
    }

    public function getAvailableCategoriesFromRequest($xml)
    {
        $availableCategories = [];
        if (isset($xml->CategoryAvailabilityResponse->Category)) {
            foreach ($xml->CategoryAvailabilityResponse->Category as $categoryCode) {
                if ((string)$categoryCode->Status['Code'] === 'AV') {
                    array_push($availableCategories, trim($categoryCode['Code']));
                }
            }
        }

        return $availableCategories;
    }
    
    public function getAvailableCategoryObjectsFromRequest($xml)
    {
        $availableCategoryObjects = [];
        if (isset($xml->CategoryAvailabilityResponse->Category)) {
            foreach ($xml->CategoryAvailabilityResponse->Category as $categoryCode) {
                if ((string)$categoryCode->Status['Code'] === 'AV') {
                    $category = new stdClass;
                    $category->code = trim($categoryCode['Code']);
                    $category->statusCode = trim($categoryCode->Status['Code']);
                    $category->deckCode = $categoryCode->Deck['Code'];
                    $category->pricePp = (float)$categoryCode->GuestType->Transportation['Amount'];
                    $category->taxPp = (float)$categoryCode->GuestType->Transportation['TaxFeeAmount'];
                    array_push($availableCategoryObjects, $category);
                }
            }
        }

        return $availableCategoryObjects;
    }

    public function __destruct() {
        curl_close($this->client);
    }
}
