<?php

define("USDRATE", "125");
define("EURRATE", "110");

    echo "Type Your Amount: ";
        $amount = (float) readline();
    
    echo "Convert To (1: USD, 2: EUR): ";
        $choice = (int) readline();

switch ($choice){
    case 1: $result = $amount * USDRATE;
    echo "USD Rate is $$result";
    break;
    case 2: $result = $amount * EURRATE;
    echo "EURO Rate is €$result";
    break;
    default:
    echo "Invalid Choice";
}