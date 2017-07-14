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
        http://training.costaclick.net/WAWS_1_9/Booking.asmx
    */

    public $clientAvailability = false;
    public $clientBooking = false;

    public function __construct()
    {
        $headerParams1 = array('Code' => '24271993', 'Culture' => 'nl-BE');
        $headerParams2 = array('Name' => 'CruiseReizen', 'Password' => 'CruiseReizen');

        try {
            $this->clientAvailability = new SoapClient("http://training.costaclick.net/WAWS_1_9/Availability.asmx?WSDL", array("trace" => 1, "exception" => 1));
            $header[] = new SoapHeader('http://schemas.costacrociere.com/WebAffiliation', 'Agency', $headerParams1, false);
            $header[] = new SoapHeader('http://schemas.costacrociere.com/WebAffiliation', 'Partner', $headerParams2, false);
            $this->clientAvailability->__setSoapHeaders($header);
        } catch (SoapFault $fault) {
            error_log("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
        }

        try {
            $this->clientBooking = new SoapClient("http://training.costaclick.net/WAWS_1_9/Booking.asmx?WSDL", array("trace" => 1, "exception" => 1));
            $header[] = new SoapHeader('http://schemas.costacrociere.com/WebAffiliation', 'Agency', $headerParams1, false);
            $header[] = new SoapHeader('http://schemas.costacrociere.com/WebAffiliation', 'Partner', $headerParams2, false);
            $this->clientBooking->__setSoapHeaders($header);
        } catch (SoapFault $fault) {
            error_log("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
        }

    }

    public function getCruise($cruiseCode)
    {
        if (false !== $this->clientAvailability) {
            $export = $this->clientAvailability->GetCruise(array("CruiseCode"=>$cruiseCode));
        }
        return $export;
    }

    public function listFares($cruiseCode)
    {
        if (false !== $this->clientAvailability) {
            $export = $this->clientAvailability->ListFares(array("cruiseCode"=>$cruiseCode)); // let op api verwacht nu ineens een kleine c-ruiseCode
        }
        return $export;
    }

    public function listAutomaticDiscounts($cruiseCode)
    {
        if (false !== $this->clientAvailability) {
            $export = $this->clientAvailability->ListAutomaticDiscounts(array("cruiseCode"=>$cruiseCode)); // let op api verwacht nu ineens een kleine c-ruiseCode
        }
        return $export;
    }

    public function listAvailableCategoriesWithGroupBooking($cruiseCode, $guests, $cabinCode = "EP", $rateCode = "COSTA", $cabinType = "Inside", $isSingleCabin = "false")
    {
        $params = array("components" => array("Component" => array("Type" => "Cruise",
                                                                   "Code" => $cruiseCode,
                                                                   "Fare" => array("Code" => $rateCode),
                                                                   "Category" => array("Code" => $cabinCode,
                                                                                       "Availability" => "false",
                                                                                       "CabinLocation" => $cabinType,
                                                                                       "IsSingleCabin" => $isSingleCabin,
                                                                                       "MaxOccupancy" => "0",
                                                                                       "MinOccupancy" => "0",
                                                                                       "Order" => "0"),
                                                                   "Cabin" => array("MinOccupancy" => "0",
                                                                                    "MaxOccupancy" => "0",
                                                                                    "Facility" => "true",
                                                                                    "DiningPreference" => "Unspecified"),
                                                                   "Insurance" => "false",
                                                                   "InsuranceAvailableInd" => "false",
                                                                   "Mandatory" => "false",
                                                                   "Direction" => "None")),
                                                                   "guests" => $guests);
        if (false !== $this->clientAvailability) {
            $export = $this->clientAvailability->ListAvailableCategoriesWithGroupBooking($params);
        }
        return $export;
    }

    public function listAvailableCabinsWithGroupBooking($cruiseCode, $guests, $cabinCode = "EP", $rateCode = "COSTA", $cabinType = "Inside", $isSingleCabin = "false")
    {
        $params = array("components" => array("Component" => array("Type" => "Cruise",
                                                                   "Code" => $cruiseCode,
                                                                   "Fare" => array("Code" => $rateCode),
                                                                   "Category" => array("Code" => $cabinCode,
                                                                                       "Availability" => "false",
                                                                                       "CabinLocation" => $cabinType,
                                                                                       "IsSingleCabin" => $isSingleCabin,
                                                                                       "MaxOccupancy" => "0",
                                                                                       "MinOccupancy" => "0",
                                                                                       "Order" => "0"),
                                                                   "Cabin" => array("MinOccupancy" => "0",
                                                                                    "MaxOccupancy" => "0",
                                                                                    "Facility" => "true",
                                                                                    "DiningPreference" => "Unspecified"),
                                                                   "Insurance" => "false",
                                                                   "InsuranceAvailableInd" => "false",
                                                                   "Mandatory" => "false",
                                                                   "Direction" => "None")),
                                                                   "guests" => $guests);
        if (false !== $this->clientAvailability) {
            $export = $this->clientAvailability->ListAvailableCabinsWithGroupBooking($params);
        }
        return $export;
    }

    public function holdCabin($cruiseCode, $guests, $cabinNumber = "1271",  $cabinCode = "EP", $rateCode = "COSTA", $cabinType = "Inside", $isSingleCabin = "false")
    {
        $params = array("components" => array("Component" => array("Type" => "Cruise",
                                                                   "Code" => $cruiseCode,
                                                                   "Fare" => array("Code" => $rateCode),
                                                                   "Category" => array("Code" => $cabinCode,
                                                                                       "Availability" => "false",
                                                                                       "CabinLocation" => $cabinType,
                                                                                       "IsSingleCabin" => $isSingleCabin,
                                                                                       "MaxOccupancy" => "0",
                                                                                       "MinOccupancy" => "0",
                                                                                       "Order" => "0"),
                                                                   "Cabin" => array("Number" => $cabinNumber,
                                                                                    "MinOccupancy" => "0",
                                                                                    "MaxOccupancy" => "0",
                                                                                    "Facility" => "true",
                                                                                    "DiningPreference" => "Unspecified"),
                                                                   "Insurance" => "false",
                                                                   "InsuranceAvailableInd" => "false",
                                                                   "Mandatory" => "false",
                                                                   "Direction" => "None")),
                                                                   "guests" => $guests);
        if (false !== $this->clientBooking) {
            $export = $this->clientBooking->HoldCabin($params);
        }
        return $export;
    }

    public function createAndReviseBookingComplete($cruiseCode, $guests, $cabinNumber = "1271",  $cabinCode = "EP", $rateCode = "COSTA", $isSingleCabin = "false")
    {
        $params = array("bookingStatus" => "OPT",
                        "components" => array("Component" => array("Type" => "Cruise",
                                                                   "Code" => $cruiseCode,
                                                                   "Fare" => array("Code" => $rateCode),
                                                                   "Category" => array("Code" => $cabinCode),
                                                                   "Cabin" => array("Number" => $cabinNumber))),
                                                                   "guests" => $guests);
        if (false !== $this->clientBooking) {
            $export = $this->clientBooking->CreateAndReviseBookingComplete($params);
        }
        return $export;
    }

    public function cancelBooking($bookingNumber){
        $params = array("bookingNumber" => $bookingNumber);

        if (false !== $this->clientBooking) {
            $export = $this->clientBooking->CancelBooking($params);
        }
        return $export;
    }

    public static function createGuestObject($guestFirstName, $guestLastName, $guestBirthDate = "1971-01-01" , $guestGender = "Male", $guestType = "Adult") {
        return array("FirstName" => $guestFirstName,
                    "LastName" => $guestLastName,
                    "Gender" => $guestGender,
                    "BirthDate" => $guestBirthDate . "T00:00:00.0000000+01:00",
                    "Residence" => "",
                    "Document" => array("ExpirationDate"=>"0001-01-01T00:00:00",
                                        "IssueDate"=>"0001-01-01T00:00:00"),
                    "Phone" => array("Type" => "Home",
                                    "Number" => "+31107200500"),
                    "GuestType" => $guestType,
                    "WebCheckIn"  => array("SendAdvertising" => "false",
                                            "EmergencyInfo" => "")
                    );
    }

    public function listDocuments($cruiseCode)
    {
        if (false !== $this->clientAvailability) {
            $export = $this->clientAvailability->ListDocuments(array("guests"=>array("guest"=>array("FirstName"=>"Naam","LastName"=>"Achternaam")))); 
        }
        return $export;
   }

    public function ListComponents($cruiseCode)
    {
        if (false !== $this->clientAvailability) {
            $export = $this->clientAvailability->ListDocuments(array("guests"=>array("guest"=>array("FirstName"=>"Naam","LastName"=>"Achternaam")))); 
        }
        return $export;
   }
}

