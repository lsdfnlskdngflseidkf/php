<?php
$nameError = $emailError = $addressError = $phoneError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    if (empty($name) || !preg_match("/^[a-zA-Z ]*$/", $name)) {
        $nameError = "Please enter a valid name (letters and spaces only)";
    }

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "Please enter a valid email address";
    }

    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    if (empty($address)) {
        $addressError = "Please enter your address";
    }

    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
    $pattern = "/^\d{10}$/"; 
    if (empty($phone) || !preg_match($pattern, $phone)) {
        $phoneError = "Please enter a valid 10-digit phone number";
    }

    if (empty($nameError) && empty($emailError) && empty($addressError) && empty($phoneError)) {
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameError;?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailError;?></span>
    <br><br>
    Address: <textarea name="address"><?php echo $address;?></textarea>
    <span class="error">* <?php echo $addressError;?></span>
    <br><br>
    Phone Number: <input type="text" name="phone" value="<?php echo $phone;?>">
    <span class="error">* <?php echo $phoneError;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>