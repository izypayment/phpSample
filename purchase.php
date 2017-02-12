<?php
require_once('Izypayment.php');

$secret = $_POST['secret'];
$key = '7ZYE@HLw@uWeW3ZoFlE0eshU02uLx30sQNYQkzbjTYnEQbTlnmarFhcu@y7xpXP6';

$izypayment = new Izypayment($key);
$response = $izypayment->pay([
    'secret'        => $secret,
    'amount'        => 325,
    'description'   => 'Transaction description',
    'lang'          => 'fr'
]);

var_dump($response);

?>
