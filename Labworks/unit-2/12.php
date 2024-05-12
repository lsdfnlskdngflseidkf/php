<?php
function getCarrier($mobileNumber) {
    $patterns = [
        '/^985\d{7}$/' => 'NT Postpaid',
        '/^984\d{7}$/' => 'NT Prepaid',
        '/^980\d{7}$/' => 'Ncell',
        // Add more patterns for other carriers
    ];

    foreach ($patterns as $pattern => $carrier) {
        if (preg_match($pattern, $mobileNumber)) {
            return $carrier;
        }
    }

    return 'Unknown Carrier';
}

// Example usage
$mobileNumber1 = '9851123123';
$mobileNumber2 = '9841123123';
$mobileNumber3 = '9801123123';

echo "Input: $mobileNumber1 Output: " . getCarrier($mobileNumber1) . "\n"; // Output: Input: 9851123123 Output: NT Postpaid
echo "Input: $mobileNumber2 Output: " . getCarrier($mobileNumber2) . "\n"; // Output: Input: 9841123123 Output: NT Prepaid
echo "Input: $mobileNumber3 Output: " . getCarrier($mobileNumber3) . "\n"; // Output: Input: 9801123123 Output: Ncel
?>