<?php

require_once './PaypalPayment.php';

$paypal = new PaypalPayment();
$paypal->payment();