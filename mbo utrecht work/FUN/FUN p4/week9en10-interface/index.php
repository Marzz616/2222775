<?php

require_once 'CreditCardPayment.php';
require_once 'PayPalPayment.php';
require_once 'ApplePayPayment.php';
require_once 'Transaction.php';

// Create instances of each payment method
$creditCardPayment = new CreditCardPayment();
$payPalPayment = new PayPalPayment();
$applePayPayment = new ApplePayPayment();

// Create transaction objects for each payment method
$creditCardTransaction = new Transaction(100.0, $creditCardPayment, "CC123");
$payPalTransaction = new Transaction(200.0, $payPalPayment, "PP456");
$applePayTransaction = new Transaction(300.0, $applePayPayment, "AP789");

// Execute and cancel transactions to test
$creditCardTransaction->executeTransaction();
echo $creditCardTransaction->getTransactionDetails() . "\n";

$payPalTransaction->executeTransaction();
echo $payPalTransaction->getTransactionDetails() . "\n";

$applePayTransaction->executeTransaction();
echo $applePayTransaction->getTransactionDetails() . "\n";

// Cancel a transaction to test cancellation
$applePayTransaction->cancelTransaction();
echo $applePayTransaction->getTransactionDetails() . "\n";

?>
