<?php
/**
 * MscApi class initiates SoapClient
 */
class MscApi
{
    CONST MSC_REAL_ADDRESS = 'https://wsrv.msccruises.com/upp/proxy/push/65d3e6dc6d0d2ab3';
    CONST MSC_TEST_ADDRESS = 'https://wsrv.msccruises.com/upp/proxy/push/9ed867470315c6c3';

    public $client = false;
    public $handShake;
    private $agencyId = 'NL005138';
    private $agentId = 'B2B2C-NL005138';
    private $agentPassword = 'msc123!';

    public function __construct()
    {
        try {
            $this->client = new SoapClient(
                "http://www.msconline.com/mscws_wsdl.xml",
                [
                    "trace" => 1,
                    "exception" => 1
                ]
            );
            $this->client->__setLocation(self::MSC_TEST_ADDRESS);
        } catch (SoapFault $fault) {
            error_log("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
        }
    }

    private function xmlRequest($xml)
    {
        if (false !== $this->client) {
            $pars = array(
                'ipcInvocationName' => 'wsinvokeservice',
                'ipcMethodNamespace' => 'svcmsgxml.bldximsgin',
                'ttIn' => array(
                    'ttInRow' => array(
                        array(
                            'ParPos' => '0',
                            'ParNam' => 'MethodName',
                            'ParVal' => 'POST'
                        ),
                        array(
                            'ParPos' => '1',
                            'ParNam' => 'XMLDocumentIn',
                            'ParVal' => $xml
                        )
                    )
                ),
                'ttOut' => array(
                    'ttOutRow' => array(
                        array(
                            'ParPos' => '0',
                            'ParNam' => 'ContentType',
                            'ParVal' => ''
                        ),
                        array(
                            'ParPos' => '1',
                            'ParNam' => 'Result',
                            'ParVal' => ''
                        ),
                        array(
                            'ParPos' => '2',
                            'ParNam' => 'XMLDocumentOut',
                            'ParVal' => ''
                        )
                    )
                )
            );

            $return = $this->client->wssigateway($pars);

            @$return_xml = simplexml_load_string($return->ttOut->ttOutRow[2]->ParVal);
            @$return_json = json_encode($return_xml);
            @$return_array = json_decode($return_json, true);

            return $return_array;
        }
    }

    public function login()
    {
        $xml = <<<EOF
<DtsAgencyLoginMessage>
    <LoginInfo>
        <AgencyID>{$this->agencyId}</AgencyID>
        <AgentID>{$this->agentId}</AgentID>
        <AgentPassword>{$this->agentPassword}</AgentPassword>
    </LoginInfo>
</DtsAgencyLoginMessage>
EOF;

        $handShakeXml = $this->xmlRequest($xml);
        $this->handShake = $handShakeXml['SessionInfo']['SessionID'];
    }

    public function cruiseSearch($cruiseShipCode, $cruiseDepartureDate, $cruiseArrivalDate)
    {
        $cruisesearchXml = <<<EOF
<DtsShopRequestMessage>
    <SessionInfo>
        <Profile>A</Profile>
        <Language>ENG</Language>
        <Version>1.0</Version>
        <SessionID>{$this->handShake}</SessionID>
    </SessionInfo>
    <BookingContext>
        <BookingContactName>CRUREI TEST</BookingContactName>
        <OfficeCode>NLD</OfficeCode>
        <BookingCurrencyCode>EUR</BookingCurrencyCode>
    </BookingContext>
    <PricingShopInfo>
        <NoAdults>2</NoAdults>
        <NoChildren>0</NoChildren>
        <ChildInfo>
            <ChildAge></ChildAge>
        </ChildInfo>
    </PricingShopInfo>
    <CruiseShop>
        <ShipCode>{$cruiseShipCode}</ShipCode>
        <SailingsFromDate>{$cruiseDepartureDate}</SailingsFromDate>
        <SailingsToDate>{$cruiseArrivalDate}</SailingsToDate>
    </CruiseShop>
</DtsShopRequestMessage>
EOF;

        error_log($cruisesearchXml);

        return $this->xmlRequest($cruisesearchXml);
    }

    public function cruisePricingAvailability($componentId)
    {
        $cruisePricingAvailabilityXml = <<<EOF
<DtsCruisePricingAvailabilityRequest>
    <SessionInfo>
        <Profile>A</Profile>
        <Language>ENG</Language>
        <Version>1.0</Version>
        <SessionID>{$this->handShake}</SessionID>
    </SessionInfo>
    <BookingContext>
        <BookingContactName>CRUREI TEST</BookingContactName>
        <OfficeCode>NLD</OfficeCode>
        <BookingCurrencyCode>EUR</BookingCurrencyCode>
    </BookingContext>
    <CruiseComponent>
        <ComponentID>{$componentId}</ComponentID>
    </CruiseComponent>
</DtsCruisePricingAvailabilityRequest>
EOF;
        error_log($cruisePricingAvailabilityXml);

        return $this->xmlRequest($cruisePricingAvailabilityXml);
    }

    public function planListRequestMessage($componentId)
    {
        $planListRequestMessageXml = <<<EOF
<DtsPlanListRequestMessage>
    <SessionInfo>
        <Profile>A</Profile>
        <Language>ENG</Language>
        <Version>1.0</Version>
        <SessionID>{$this->handShake}</SessionID>
    </SessionInfo>
    <BookingContext>
        <BookingContactName>CRUREI TEST</BookingContactName>
        <OfficeCode>NLD</OfficeCode>
    </BookingContext>
    <ComponentID>{$componentId}</ComponentID>
</DtsPlanListRequestMessage>
EOF;
        error_log($planListRequestMessageXml);

        return $this->xmlRequest($planListRequestMessageXml);
    }

    public function cruiseCategoryAvailabilityRequest($componentId, $promotionCode)
    {
        $cruiseCategoryAvailabilityRequestXml = <<<EOF
<DtsCruiseCategoryAvailabilityRequest>
    <SessionInfo>
        <Profile>A</Profile>
        <Language>ENG</Language>
        <Version>1.0</Version>
        <SessionID>{$this->handShake}</SessionID>
    </SessionInfo>
    <BookingContext>
        <BookingContactName>CRUREI TEST</BookingContactName>
        <OfficeCode>NLD</OfficeCode>
    </BookingContext>
    <CruiseComponent>
        <ComponentID>{$componentId}</ComponentID>
        <PromotionCode>{$promotionCode}</PromotionCode>
    </CruiseComponent>
</DtsCruiseCategoryAvailabilityRequest>
EOF;
        error_log($cruiseCategoryAvailabilityRequestXml);

        return $this->xmlRequest($cruiseCategoryAvailabilityRequestXml);
    }

    public function cabinAvailabilityRequest($componentId, $categoryCode)
    {
        $cabinAvailabilityRequestXml = <<<EOF
<DtsCruiseCabinAvailabilityRequest>
    <SessionInfo>
        <Profile>A</Profile>
        <Language>ENG</Language>
        <Version>1.0</Version>
        <SessionID>{$this->handShake}</SessionID>
    </SessionInfo>
    <BookingContext>
        <BookingContactName>CRUREI TEST</BookingContactName>
        <OfficeCode>NLD</OfficeCode>
    </BookingContext>
    <CruiseComponent>
        <ComponentID>{$componentId}</ComponentID>
        <CategoryCode>{$categoryCode}</CategoryCode>
    </CruiseComponent>
</DtsCruiseCabinAvailabilityRequest>
EOF;

        return $this->xmlRequest($cabinAvailabilityRequestXml);
    }

    public function codeDescriptionsRequestMessage($codeType)
    {
        $codeDescriptionsRequestMessageXml = <<<EOF
<DtsCodeDescriptionsRequestMessage>
    <SessionInfo>
        <SessionID>{$this->handShake}</SessionID>
        <Profile>A</Profile>
        <Language>ENG</Language>
        <Version>1</Version>
    </SessionInfo>
    <RequestedTypes>
        <CodeType>{$codeType}</CodeType>
    </RequestedTypes>
</DtsCodeDescriptionsRequestMessage>
EOF;

        return $this->xmlRequest($codeDescriptionsRequestMessageXml);
    }

    public function specialServiceShopRequestMessage()
    {
        $specialServiceShopRequestMessageXml = <<<EOF
<DtsShopRequestMessage>
    <SessionInfo>
        <SessionID>{$this->handShake}</SessionID>
        <Profile>A</Profile>
        <Language>ENG</Language>
        <Version>1</Version>
    </SessionInfo>
    <BookingContext>
        <BookingContactName>CRUREI TEST</BookingContactName>
        <OfficeCode>NLD</OfficeCode>
    </BookingContext>
    <PricingShopInfo>
        <NoAdults>2</NoAdults>
        <NoChildren>2</NoChildren>
        <ChildInfo>
            <ChildAge>10,12</ChildAge>
        </ChildInfo>
    </PricingShopInfo>
    <!-- SSV - SPECIAL SERVICE -->
    <SpecialServiceShop>
        <ServiceTypeCode>FORFAI</ServiceTypeCode>
        <DeliveryDate>2017-11-24</DeliveryDate>
        <CruiseComponentID>Z316764</CruiseComponentID>
    </SpecialServiceShop>
    <!-- ASSOCIATED ITEMS -->
    <AssociatedItemShop>
        <AssociatedWithComponentID>Z316764</AssociatedWithComponentID>
    </AssociatedItemShop>
</DtsShopRequestMessage>
EOF;
    }

    public function retrieveBookingRequestMessage($bookingNo)
    {
        $retrieveBookingRequestMessageXml = <<<EOF
<DtsRetrieveBookingRequestMessage>
    <SessionInfo>
        <SessionID>{$this->handShake}</SessionID>
        <Profile>A</Profile>
        <Language>NLD</Language>
        <Version>1.0</Version>
    </SessionInfo>
    <BookingContext>
        <AgencyID>NL005138</AgencyID>
        <AgentID>B2B2C-NL005138</AgentID>
        <BookingContactName>CRUREI TEST</BookingContactName>
        <BookingCurrencyCode>EUR</BookingCurrencyCode>
        <LanguageCode>NLD</LanguageCode>
        <OfficeCode>NLD</OfficeCode>
        <MarketCode>NLD</MarketCode>
        <BookingNo>{$bookingNo}</BookingNo>
    </BookingContext>
</DtsRetrieveBookingRequestMessage>
EOF;

        return $this->xmlRequest($retrieveBookingRequestMessageXml);
    }

    public function priceToBookRequestMessage($componentId, $categoryCode)
    {
        $priceToBookRequestMessageXml = <<<EOF
<DtsPriceToBookRequestMessage>
    <SessionInfo>
        <SessionID>{$this->handShake}</SessionID>
        <Profile>A</Profile>
        <Language>NLD</Language>
        <Version>1.0</Version>
    </SessionInfo>
    <BookingContext>
        <BookingContactName>CRUREI TEST</BookingContactName>
        <OfficeCode>NLD</OfficeCode>
    </BookingContext>
    <ComponentsToPrice>
        <ComponentDetails>
            <ComponentID>{$componentId}</ComponentID>
            <CategoryCode>{$categoryCode}</CategoryCode>
        </ComponentDetails>
    </ComponentsToPrice>
</DtsPriceToBookRequestMessage>
EOF;

        return $this->xmlRequest($priceToBookRequestMessageXml);
    }

    public function bookRequestMessage($componentId, $categoryCode, $cabinNo, $obs)
    {
        $bookRequestMessageXml = <<<EOF
<DtsBookRequestMessage>
    <SessionInfo>
        <SessionID>{$this->handShake}</SessionID>
        <Profile>A</Profile>
        <Language>NLD</Language>
        <Version>1.0</Version>
    </SessionInfo>
    <BookingAction>
        <BookOrQuote>Q</BookOrQuote>
    </BookingAction>
    <BookingContext>
        <BookingContactName>CRUREI TEST</BookingContactName>
        <OfficeCode>NLD</OfficeCode>
    </BookingContext>
    <ParticipantList>
        <ParticipantData>
            <PersonNo>1</PersonNo>
            <PassengerNo>Text</PassengerNo>
            <LastName>Test</LastName>
            <FirstName>Test</FirstName>
            <PersonType>A</PersonType>
            <Gender>M</Gender>
        </ParticipantData>
        <ParticipantData>
            <PersonNo>2</PersonNo>
            <PassengerNo>Text</PassengerNo>
            <LastName>Test</LastName>
            <FirstName>Test</FirstName>
            <PersonType>A</PersonType>
            <Gender>F</Gender>
        </ParticipantData>
    </ParticipantList>
    <ComponentsToBook>
        <ComponentDetails>
            <ComponentID>{$componentId}</ComponentID>
            <CategoryCode>{$categoryCode}</CategoryCode>
            <CabinNo>{$cabinNo}</CabinNo>
        </ComponentDetails>
        <ComponentDetails>
            <ComponentID>{$obs}</ComponentID>
        </ComponentDetails>
    </ComponentsToBook>
</DtsBookRequestMessage>
EOF;

        return $this->xmlRequest($bookRequestMessageXml);
    }

    public function confirmQuoteRequestMessage()
    {
        $confirmQuoteMessageXml = <<<EOF
<DtsConfirmQuoteRequestMessage>
    <SessionInfo>
        <SessionID>{$this->handShake}</SessionID>
        <Profile>A</Profile>
        <Language>NLD</Language>
        <Version>1.0</Version>
    </SessionInfo>
    <BookingContext>
        <AgencyID>YYYYYYYY</AgencyID>
        <BookingContactName>CRUREI TEST</BookingContactName>
        <BookingNo>7158475</BookingNo>
	</BookingContext>
</DtsConfirmQuoteRequestMessage>
EOF;

        return $this->xmlRequest($confirmQuoteMessageXml);
    }

    public function confirmBookingRequestMessage()
    {
        $confirmBookingMessageXml = <<<EOF
<DtsConfirmBookingRequestMessage>
    <SessionInfo>
        <SessionID>{$this->handShake}</SessionID>
        <Profile>A</Profile>
        <Language>NLD</Language>
        <Version>1.0</Version>
    </SessionInfo>
    <BookingContext>
        <AgencyID>XXXXXXXX</AgencyID>
        <AgentID>YYYYYYYY</AgentID>
        <BookingContactName>CRUREI TEST</BookingContactName>
        <BookingCurrencyCode>EUR</BookingCurrencyCode>
        <LanguageCode>ITA</LanguageCode>
        <OfficeCode>ITA</OfficeCode>
        <MarketCode>ITA</MarketCode>
        <BookingNo>7158475</BookingNo>
    </BookingContext>
</DtsConfirmBookingRequestMessage>
EOF;

        return $this->xmlRequest($confirmBookingMessageXml);
    }

    public function categoryItemRequestMessage($componentId, $categoryCode, $dynamicPriceCode)
    {
        $categoryItemRequestMessageXml = <<<EOF
<DtsCategoryItemRequestMessage>
    <SessionInfo>
        <Profile>A</Profile>
        <Language>NLD</Language>
        <Version>1.0</Version>
        <SessionID>{$this->handShake}</SessionID>
    </SessionInfo>
    <BookingContext>
        <BookingContactName>CRUREI TEST</BookingContactName>
        <OfficeCode>NLD</OfficeCode>
    </BookingContext>
    <CruiseComponent>
        <ComponentID>{$componentId}</ComponentID>
        <CategoryCode>{$categoryCode}</CategoryCode>
        <DynamicPriceCode>{$dynamicPriceCode}</DynamicPriceCode>
    </CruiseComponent>
</DtsCategoryItemRequestMessage>
EOF;

        return $this->xmlRequest($categoryItemRequestMessageXml);
    }

    public function getSailingIdFromCruiseSearch($shipCode, $departureDate, $arrivalDate)
    {
        $cruiseSearch = $this->cruiseSearch($shipCode, $departureDate, $arrivalDate);

        $aantal_cruises = count($cruiseSearch['CruiseProducts']['CruiseSailing']);

        if ($aantal_cruises <= 1) {

            return $cruiseSearch['CruiseProducts']['CruiseSailing']['ComponentInfo']['ComponentID'];
        } elseif ($aantal_cruises > 1) {
            foreach ($cruiseSearch['CruiseProducts']['CruiseSailing'] as $cruise_result) {
                if ($cruise_result['CruiseInfo']['SailingDate'] === $departureDate && $cruise_result['CruiseInfo']['ReturnDate'] === $arrivalDate) {

                    return $cruise_result['ComponentInfo']['ComponentID'];
                }
            }
        }
    }

    public function getPlanCodeFromRequestMessage($sailingId)
    {
        $planListRequestXml = $this->planListRequestMessage($sailingId);

        return $planListRequestXml['PlanCodes'][1]['PlanCode'];
    }

    public function getCategoriesFromRequestMessage($sailingId, $planCode)
    {
        $availability = $this->cruiseCategoryAvailabilityRequest($sailingId, $planCode);

        return $availability['AvailableCategories']['AvailableCategory'][0]['CategoryCode'];
    }

    public function parseCabinAvailabilityRequest($xml)
    {
        if (is_array($xml["AvailableCabins"]["AvailableCabin"])) {
            $roomNumbers = [];
            foreach ($xml["AvailableCabins"]["AvailableCabin"] as $cabin) {
                array_push($roomNumbers, $cabin["CabinNo"]);
            }

            return $roomNumbers;
        }

        return [$xml["AvailableCabins"]["AvailableCabin"]["CabinNo"]];
    }

    public function parseCodeDescriptionsRequestMessage($xml)
    {
        if (empty($xml['AdvisoryInfo'])) {
            return $xml['CodeDescriptions']['CodeDetail'][0]['CodeDescription'];
        }

        return false;
    }

    public function parseCategoryItemRequestMessage($xml)
    {
        return $xml["ComponentDetails"]["ItemDetails"]["ComponentID"];
    }
}
