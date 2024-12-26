<?php

echo "Enter a Number: ";
$number = (int) readline();

if ($number >0) {
    echo "This number is Positive";
}elseif ($number <0) {
    echo "This number is Negative";
}elseif ($number =0) {
    echo "This number is Zero";
}else {
    echo "Unknown Value";
}