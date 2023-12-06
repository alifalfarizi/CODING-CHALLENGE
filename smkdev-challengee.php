<?php
// Fungsi untuk mencari jumlah maksimum subarray
function maxSubArraySum($arr, $size) {
    $maxSum = PHP_INT_MIN;  // Inisialisasi nilai maksimum dengan nilai PHP_INT_MIN
    $currentSum = 0;

    for ($i = 0; $i < $size; $i++) {
        $currentSum = max($arr[$i], $currentSum + $arr[$i]);
        $maxSum = max($maxSum, $currentSum);
    }

    return $maxSum;
}

// Input
$N = intval(readline());
$array = array_map('intval', explode(' ', readline()));

// Menghitung jumlah maksimum subarray
$result = maxSubArraySum($array, $N);

// Output
echo "Output: Maximum Sum: $result\n";
?>
