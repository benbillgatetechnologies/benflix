<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AQT12ag4aNqPALw6-Y_n33ZQ9uVSwPX_kHwgFPSfjacnYbO2rtrtPGlyyAg7ee1bxdAcRaaNFnrNCtbX',     // ClientID
        'EBL5sXo8CF27de3PextBnnL5ryB5jnTR55wyHYLNAy8viia_c_p9Ah6lTheyoTLLa9HwLQwptQtHtfG5'      // ClientSecret
    )
);
?>