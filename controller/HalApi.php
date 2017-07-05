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

    private function getGuestXmlComplete($numGuests, $ageCode)
    {
        $xml = '';
        for($i = 1; $i<= $numGuests; $i++) {
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
                CURLOPT_URL => self::HAL_REAL_ADDRESS,
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

	//curl_close($this->client);

	if ($err) {
	  return $err;
	} else {
	  return simplexml_load_string($response);
	}
    }

    public function __destruct() {
        curl_close($this->client);
    }
}
