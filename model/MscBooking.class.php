<?php

class MscBooking
{
    public $statusCode;
    public $statusDescription;
    public $paymentStatusCode;
    public $paymentStatusDescription;
    public $bookingType;
    public $bookedDate;
    public $lastChangedDate;
    public $lastChangedBy;
    public $chargesTotalGrossPrice;
    public $chargesTotalNetPrice;
    public $chargesDepositAmountDue;
    public $chargesDepositDueDate;
    public $chargesTotalPaymentsReceived;
    public $chargesGrossBalanceDue;
    public $chargesNetBalanceDue;
    public $chargesOptionExpiresDate;
    public $chargesFinalPaymentDate;
    public $chargesDepositDays;

    function __construct($booking)
    {
        $this->statusCode = $booking['BookingInfo']['BookingStatus']['BookingStatusCode'];
        $this->statusDescription = $booking['BookingInfo']['BookingStatus']['BookingStatusDesc'];
        $this->paymentStatusDescription = $booking['BookingInfo']['BookingStatus']['PaymentStatusDescription'];
        $this->bookingType = $booking['BookingInfo']['BookingStatus']['BookingType'];
        $this->bookedDate = $booking['BookingInfo']['BookingStatus']['BookedDate'];
        $this->lastChangedDate = $booking['BookingInfo']['BookingStatus']['LastChangedDate'];
        $this->lastChangedBy = $booking['BookingInfo']['BookingStatus']['LastChangedBy'];
        $this->chargesTotalGrossPrice = $booking['BookingInfo']['BookingCharges']['TotalGrossPrice'];
        $this->chargesTotalNetPrice = $booking['BookingInfo']['BookingCharges']['TotalNetPrice'];
        $this->chargesDepositAmountDue = $booking['BookingInfo']['BookingCharges']['DepositAmountDue'];
        $this->chargesDepositDueDate = $booking['BookingInfo']['BookingCharges']['DepositDueDate'];
        $this->chargesTotalPaymentsReceived = $booking['BookingInfo']['BookingCharges']['TotalPaymentsReceived'];
        $this->chargesGrossBalanceDue = $booking['BookingInfo']['BookingCharges']['GrossBalanceDue'];
        $this->chargesNetBalanceDue = $booking['BookingInfo']['BookingCharges']['NetBalanceDue'];
        $this->chargesOptionExpiresDate = $booking['BookingInfo']['BookingCharges']['OptionExpiresDate'];
        $this->chargesFinalPaymentDate = $booking['BookingInfo']['BookingCharges']['FinalPaymentDate'];
        $this->chargesDepositDays = $booking['BookingInfo']['BookingCharges']['DepositDays'];
        if (!empty($booking['ParticipantList'])) {
            foreach ($booking['ParticipantList']['ParticipantData'] as $participant) {
                $mscParticipant = new MscBookingParticipant($participant);
            }
        }
    }	
}