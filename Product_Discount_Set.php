<?php

// প্রোডাক্টের মূল্য
// $productPrice = 1500; // উদাহরণস্বরূপ 1500 টাকা

echo "Type Your Amount: ";
$productPrice = (float) readline();

// ডিসকাউন্টের হার নির্ধারণ
if ($productPrice >= 2000) {
    $discountPercentage = 10;
} elseif ($productPrice >= 1000) {
    $discountPercentage = 5;
} else {
    $discountPercentage = 0; // কোনো ডিসকাউন্ট নেই
}

// ডিসকাউন্টের পরিমাণ হিসাব
$discountAmount = ($productPrice * $discountPercentage) / 100;

// পরিশোধযোগ্য মূল্য হিসাব
$payableAmount = $productPrice - $discountAmount;

// ফলাফল প্রদর্শন
echo "Product Price: " . $productPrice . " tk\n";
echo "Discount: " . $discountPercentage . "%\n";
echo "Discount Amount: " . $discountAmount . " tk\n";
echo "Payable Amount: " . $payableAmount . " tk\n";

?>