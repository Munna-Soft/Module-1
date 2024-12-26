<?php

//0-100 unit 10tk, 101-250 unit 15tk, 251-500 unit 20tk, avobe 500 unit 25tk

    echo "Input Your Consumed Units: ";
        $units = (float) readline();

    if ($units <=100){
        $bill = $units * 10;
    }elseif ($units <=250){
        $bill = 100 * 10 + ($units - 100) * 15;
    }elseif ($units <=500){
        $bill = 100 * 10 + 150 * 15 + ($units - 250) *20;
    }else {
        $bill = 100 * 10 + 150 * 15 + 250 * 20 + ($units - 500) * 25;
    }

    echo "Your Total Bill: ৳$bill";