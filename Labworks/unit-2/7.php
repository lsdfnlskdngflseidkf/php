<?php
$personDetails = array(
    "name" => "Ujwal Parajuli",
    "age" => 19,
    "email" => "par@ujwalp.com.np"
);

// Display the person's details using a foreach loop
echo "Person's Details:\n";
foreach ($personDetails as $key => $value) {
    echo $key . ": " . $value . "\n";
}
?>