<?php
require_once('Izypayment.php');

$secret = $_POST['secret'];
$key = 'your-application-key';

$izypayment = new Izypayment($key);
$response = $izypayment->pay([
    'secret'        => $secret,
    'amount'        => 325,
    'description'   => 'Transaction description',
    'lang'          => 'fr'
]);

var_dump($response);

?>
