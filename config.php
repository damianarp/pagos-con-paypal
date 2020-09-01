<?php

require 'paypal/autoload.php';

define('URL_SITIO', 'http://localhost:8888/paypal');

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'ASnd6_MZHVjwXKfEqZ-dU41Ow_iSQ1MjwMTO0rafN4A5dN507BRzFWElFeXXg42ZpXBZ1T7S1zOCQk12', // Cliente ID
        'EM1q6xifV_R4iw8Cg7gMrzly60kiBDe5kDKaoEOFmedQOPTO5y-RR0zxvUR4RZzks_c2NieEn0N866lJ' // Secret
    )
);

