<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Initialize error flags
    $nameError = $ageError = $hobbiesError = $commentError = '';

    // Validate name
    $name = trim($_POST['name']);
    if (empty($name) || strlen($name) < 2 || strlen($name) > 10 || !ctype_alpha(str_replace(' ', '', $name))) {
        $nameError = 'Name should be between 2 to 10 characters and should contain characters only.';
    }

    // Validate age
    $age = trim($_POST['age']);
    if (empty($age) || !is_numeric($age) || $age < 16 || $age > 55) {
        $ageError = 'Age should be a number between 16 and 55.';
    }

    // Validate hobbies
    $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : array();
    if (empty($hobbies)) {
        $hobbiesError = 'At least one hobby should be selected.';
    }

    // Validate comment
    $comment = trim($_POST['comment']);
    if (empty($comment)) {
        $commentError = 'Comment is required.';
    }

    // If no errors, process the form data
    if (empty($nameError) && empty($ageError) && empty($hobbiesError) && empty($commentError)) {
        // Process the form data (e.g., store in a database, send an email, etc.)
        // ...
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration Form</title>
</head>
<body>
    <h2>User Registration Form</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
        <span style="color: red;"><?php echo $nameError; ?></span>
        <br><br>

        <label for="age">Age:</label>
        <input type="text" name="age" id="age" value="<?php echo isset($_POST['age']) ? $_POST['age'] : ''; ?>">
        <span style="color: red;"><?php echo $ageError; ?></span>
        <br><br>

        <label>Hobbies:</label>
        <input type="checkbox" name="hobbies[]" value="Reading" <?php if (isset($_POST['hobbies']) && in_array('Reading', $_POST['hobbies'])) echo 'checked'; ?>> Reading
        <input type="checkbox" name="hobbies[]" value="Painting" <?php if (isset($_POST['hobbies']) && in_array('Painting', $_POST['hobbies'])) echo 'checked'; ?>> Painting
        <input type="checkbox" name="hobbies[]" value="Sports" <?php if (isset($_POST['hobbies']) && in_array('Sports', $_POST['hobbies'])) echo 'checked'; ?>> Sports
        <span style="color: red;"><?php echo $hobbiesError; ?></span>
        <br><br>

        <label for="comment">Comment:</label>
        <textarea name="comment" id="comment"><?php echo isset($_POST['comment']) ? $_POST['comment'] : ''; ?></textarea>
        <span style="color: red;"><?php echo $commentError; ?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>