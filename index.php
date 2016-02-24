<?php
namespace GlobalEAPI\Api;
require 'vendor/autoload.php';

$customer_keyword = isset($_GET['customer'])?$_GET['customer']:null;
if($customer_keyword !== null)
{
    $customer = new Customer;
    echo $customer->search($customer_keyword);
}
