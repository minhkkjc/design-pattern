<?php

require_once './PaypalAdapter.php';

$paypal = new PaypalPayment();
$paypalAdapter = new PaypalAdapter($paypal);
$paypalAdapter->pay();