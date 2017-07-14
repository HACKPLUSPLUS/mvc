<?php
ini_set('max_execution_time', 300);
class costaController Extends baseController
{
    public function index() 
    {   
        $costaApi = new CostaApi();
        
        $cruiseCode = "DE04180328";
$guests[] = $costaApi->createGuestObject("TestFirstName", "TestLastName");
$guests[] = $costaApi->createGuestObject("Test2FirstName", "Test2LastName");

//echo "GetCruise:";
//print_r($costaApi->getCruise($cruiseCode ));
//echo "Listfares<hr>";
//print_r($costaApi->listFares($cruiseCode ));
//echo "ListAutomaticDiscounts<hr>";
//print_r($costaApi->listAutomaticDiscounts($cruiseCode));
//echo "ListDocuments<hr>";
//print_r($costaApi->ListDocuments($cruiseCode ));
//echo "List available Cat<hr>";
//print_r($costaApi->listAvailableCategories($cruiseCode));



echo "listAvailableCategoriesWithGroupBooking:". "<br>" . PHP_EOL;
$result = $costaApi->listAvailableCategoriesWithGroupBooking($cruiseCode, $guests, "EP", "COSTA");
echo "<pre>";
print_r($result);
echo "</pre><hr>";
/*
foreach ($result->ListAvailableCategoriesWithGroupBookingResult->Category as $cat) {
    echo "CabinCode: " . $cat->Code . "<br>" . PHP_EOL;
    echo "StatusCode: " . $cat->StatusCode . "<br>" . PHP_EOL;
    echo "Amount: " . $cat->Price->GuestPrice->Amount . "<br>" . PHP_EOL;
    echo "PortChgAmount: " . $cat->Price->GuestPrice->PortChgAmount . "<br>" . PHP_EOL;
    //echo "<pre>". print_r($cat, true) . "</pre>" . PHP_EOL;
    echo "<hr>";
}
*/

echo "listAvailableCabinsWithGroupBooking:". "<br>" . PHP_EOL;
$result = $costaApi->listAvailableCabinsWithGroupBooking($cruiseCode, $guests, "EP", "COSTA");
echo "<pre>";
print_r($result);
echo "</pre><hr>";
/*
foreach ($result->ListAvailableCabinsWithGroupBookingResult->Cabin as $cab) {
    echo "Number: " . $cab->Number . "<br>" . PHP_EOL;
    echo "Code: " . $cab->Category->Code . "<br>" . PHP_EOL;
    echo "MinOccupancy: " . $cab->MinOccupancy . "<br>" . PHP_EOL;
    echo "MaxOccupancy: " . $cab->MaxOccupancy . "<br>" . PHP_EOL;
    echo "Status: " . $cab->Status . "<br>" . PHP_EOL;
    echo "DeckName: " . $cab->DeckName . "<br>" . PHP_EOL;
    echo "DeckCode: " . $cab->DeckCode . "<br>" . PHP_EOL;
    //echo "<pre>". print_r($cab, true) . "</pre>" . PHP_EOL;
    echo "<hr>";
}
*/

echo "holdCabin:". "<br>" . PHP_EOL;
$result = $costaApi->holdCabin($cruiseCode, $guests, "7203");
echo "<pre>";
print_r($result);
echo "</pre>";
/*
foreach ($result->HoldCabinResult->Cabin as $cab) {
    echo "Number: " . $cab->Number . "<br>" . PHP_EOL;
    echo "Code: " . $cab->Category->Code . "<br>" . PHP_EOL;
    echo "MinOccupancy: " . $cab->MinOccupancy . "<br>" . PHP_EOL;
    echo "MaxOccupancy: " . $cab->MaxOccupancy . "<br>" . PHP_EOL;
    echo "Status: " . $cab->Status . "<br>" . PHP_EOL;
    echo "DeckName: " . $cab->DeckName . "<br>" . PHP_EOL;
    echo "DeckCode: " . $cab->DeckCode . "<br>" . PHP_EOL;
    echo "<pre>". print_r($cab, true) . "</pre>" . PHP_EOL;
    echo "<hr>";
}
*/

echo "CreateAndReviseBookingComplete:". "<br>" . PHP_EOL;
$result = $costaApi->createAndReviseBookingComplete($cruiseCode, $guests, "1277");
$bookingNumber = $result->BookingNumber;
echo "Boekings Nummer:" . $bookingNumber;
echo "<pre>";
print_r($result);
echo "</pre>";

    }
}