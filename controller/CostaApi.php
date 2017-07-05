<?php
/**
 * CostaApi class initiates SoapClient
 */
class CostaApi
{

    /*  PartnerName: CruiseReizen 
        Password:    CruiseReizen 
        AgencyCode:  24271993
        http://training.costaclick.net/WAWS_1_9/Availability.asmx
    */

    public $client = false;

    public function __construct()
    {
        try {
            $this->client = new SoapClient("http://training.costaclick.net/WAWS_1_9/Availability.asmx?WSDL", array("trace" => 1, "exception" => 1));
            $headerParams1 = array('Code' => '24271993', 'Culture' => 'nl-BE');
            $headerParams2 = array('Name' => 'CruiseReizen', 'Password' => 'CruiseReizen');
            $header[] = new SoapHeader('http://schemas.costacrociere.com/WebAffiliation', 'Agency', $headerParams1, false);
            $header[] = new SoapHeader('http://schemas.costacrociere.com/WebAffiliation', 'Partner', $headerParams2, false);
            $this->client->__setSoapHeaders($header);
        } catch (SoapFault $fault) {
            error_log("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
        }
    }

    public function getCruise($cruiseCode)
    {
        if (false !== $this->client) {
            $export = $this->client->GetCruise(array("CruiseCode"=>$cruiseCode));
        }
        return $export;
   }

    public function listFares($cruiseCode)
    {
        if (false !== $this->client) {
            $export = $this->client->ListFares(array("cruiseCode"=>$cruiseCode)); // let op api verwacht nu ineens een kleine c-ruiseCode
        }
        return $export;
   }

    public function listAutomaticDiscounts($cruiseCode)
    {
        if (false !== $this->client) {
            $export = $this->client->ListAutomaticDiscounts(array("cruiseCode"=>$cruiseCode)); // let op api verwacht nu ineens een kleine c-ruiseCode
        }
        return $export;
   }

    public function listAvailableCategories($cruiseCode)
    {
        if (false !== $this->client) {
            $export = $this->client->ListAvailableCategories(array("cruiseCode"=>$cruiseCode)); // let op api verwacht nu ineens een kleine c-ruiseCode
        }
        return $export;
   }

    public function listDocuments($cruiseCode)
    {
        if (false !== $this->client) {
            $export = $this->client->ListDocuments(array("guests"=>array("guest"=>array("FirstName"=>"Naam","LastName"=>"Achternaam")))); // let op api verwacht nu ineens een kleine c-uiseCode
        }
        return $export;
   }

    public function ListComponents($cruiseCode)
    {
        if (false !== $this->client) {
            $export = $this->client->ListComponents(
                array(
                    "cruiseCode" => $cruiseCode,
                    "componentType" => 'All',
                    "guests" => array(
                        44
                    ),
                    "pax" => 'A'
                )
            ); // let op api verwacht nu ineens een kleine c-uiseCode
        }
        return $export;
   }
   
   public function ListAllDestinations()
    {
        if (false !== $this->client) {
            $export = $this->client->ListAllDestinations();
        }
        return $export;
   }
   
   public function ListAllPorts()
    {
        if (false !== $this->client) {
            $export = $this->client->ListAllPorts();
        }
        return $export;
   }
   
   public function ListAllShips()
    {
        if (false !== $this->client) {
            $export = $this->client->ListAllShips();
        }
        return $export;
   }
   
   public function ListAvailableCabins($cruiseCode)
    {
        if (false !== $this->client) {
            $export = $this->client->ListAvailableCabins(
                array(
                    "cruiseCode" => $cruiseCode,
                    "guests" => array(
                        [
                            'age' => 44,
                            'pax type' => 'Individual',
                            'Gender' => 'Male',
                            'BirthDate' => '1972-07-11T13:46:00',
                            'GuestType' => 'Adult'
                        ]
                    )
                )
            ); // let op api verwacht nu ineens een kleine c-ruiseCode
        }
        return $export;
   }
   
    public function ListAvailableCruises()
    {
        if (false !== $this->client) {
            $export = $this->client->ListAvailableCruises(
                [
                    'from' => '2017-08-01',
                    'to' => '2017-09-01',
                    'destinationCode' => 'Mediterranean',
                    'shipCode' => 'DI',
                    'portCode' => 'CIV'
                ]
            ); // let op api verwacht nu ineens een kleine c-ruiseCode
        }
        return $export;
    }
}


$costaApi = new CostaApi();

//$cruise = $costaApi->getCruise("DE04180328");
//print_r($cruise);
//print_r($cruise->GetCruiseResult->Code);
//print_r($costaApi->ListAllDestinations());
//print_r($costaApi->ListAllPorts());
//print_r($costaApi->ListAllShips());
//print_r($costaApi->listFares("DE04180328"));
//print_r($costaApi->ListComponents("DE04180328"));
//print_r($costaApi->listAutomaticDiscounts("DE04180328"));
//print_r($costaApi->ListDocuments("DE04180328"));
//print_r($costaApi->listAvailableCategories("DE04180328"));
//print_r($costaApi->ListAvailableCruises());
print_r($costaApi->ListAvailableCabins("DE04180328"));

