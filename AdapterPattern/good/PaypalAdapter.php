<?php

require_once './PaymentAdapterInterface.php';
require_once './PaypalPayment.php';

class PaypalAdapter implements PaymentAdapterInterface {

    private $_paypal;

    public function __construct(PaypalPayment $paypal) {
        $this->_paypal = $paypal;
    }

    public function pay() {
        $this->_paypal->payment();
    }

}