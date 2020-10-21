<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_51Fqp1bKz5UekSaLFIehOusr5xKAuuO6MbTuNqJOdmTW63Vpukk5CwHomU1bRQBIBdNeEqDcLUBbcIatqCXemR2ae00LUJAZMRI",
  "publishable_key" => "pk_test_n3kRlKTCTjDfAexAjEbzf3ME00M3I9CUEj"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>