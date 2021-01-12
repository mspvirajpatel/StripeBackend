
<?php


require_once('./stripe-php/init.php');
\Stripe\Stripe::setApiKey('sk_test_51I8K5DBBoSUZao984DJFdmwcyjxLS52iypstXjb3Vw7rB7y1HKV2C66ljujEpYeKDdHTysaHfIkLjIM9aDsbw9aW00a3tFBRgT');


$email =  $_POST['email'] ;
$fullName = $_POST['name'];
$phone	= $_POST['phone'];

$key = \Stripe\Customer::create([
  'description' => 'testing','email'=>"$email",'phone'=>"$phone", 'name'=>$fullName
]);


echo json_encode($key);

?>
