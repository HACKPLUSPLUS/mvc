<?php

class MscBookingParticipant
{
    public $personNo;
    public $passengerNo;
    public $lastName;
    public $firstName;
    public $personType;
    public $gender;
    public $leadPax;
    public $passportData;
    public $participantAddress;
    public $frequentTravelerNumbers;
    public $insuranceInformation;
    public $couponCodeList;
                
    function __construct($participant)
    {
        $this->personNo = $participant['PersonNo'];
        $this->passengerNo = $participant['PassengerNo'];
        $this->lastName = $participant['LastName'];
        $this->firstName = $participant['FirstName'];
        $this->personType = $participant['PersonType'];
        $this->gender = $participant['Gender'];
        $this->leadPax = $participant['LeadPax'];
        $this->passportData = $participant['PassportData'];
        $this->participantAddress = $participant['ParticipantAddress'];
        $this->frequentTravelerNumbers = $participant['FrequentTravelerNumbers'];
        $this->insuranceInformation = $participant['InsuranceInformation'];
        $this->couponCodeList = $participant['CouponCodeList'];
    }	
}