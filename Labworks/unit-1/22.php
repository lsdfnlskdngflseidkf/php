<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Electricity Bill Calculator</title>
</head>
<body>
<h2>Electricity Bill Calculator</h2>

<?php
function calculateElectricityBill($units) {
    $totalBill = 0;

    if ($units <= 50) {
        $totalBill = $units * 3.50;
    } elseif ($units <= 150) {
        $totalBill = (50 * 3.50) + (($units - 50) * 4.00);
    } elseif ($units <= 250) {
        $totalBill = (50 * 3.50) + (100 * 4.00) + (($units - 150) * 5.20);
    } else {
        $totalBill = (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + (($units - 250) * 6.50);
    }

    return $totalBill;
}
if(isset($_POST["units"])){

    $units = $_POST["units"];
    $electricityBill = calculateElectricityBill($units);
    echo "<p>Units Consumed: $units</p>";
    echo "<p>Total Bill Amount: Rs. $electricityBill</p>";
}
?>

<form method="post" action="">
    <label for="units">Enter Units Consumed:</label>
    <input type="number" id="units" name="units" required>
    <button type="submit">Calculate Bill</button>
</form>

</body>
</html>
