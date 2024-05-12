<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Ticketing Form</title>
</head>

<body>
    <form action="" method="post">
        <label for="name">Username</label>
        <input type="text" name="name"><br><br>
        <label for="mail">Email</label>
        <input type="email" name="mail"><br><br>
        <label for="phone">Phone</label>
        <input type="tel" name="phone"><br><br>
        <select name="problem">
            <option value="">Select an Option</option>
            <option value="Bad internet">Poor internet connection</option>
            <option value="Fiber breakage">Fiber breakage</option>
        </select><br><br>
        <label for="comment">Comment</label>
        <textarea name="comment"></textarea><br><br>
        <label for="screenshot">Screenshot</label>
        <input type="file" name="screenshot"><br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset Form">
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_FILES['screenshot'])){
        $username = $_POST["name"];
        $email = $_POST["mail"];
        $phone = $_POST["phone"];
        $problem = $_POST["problem"];
        $comment = $_POST["comment"];
        $screenshot = $_FILES["screenshot"];
        $baseDir = "Ticket/customer";
        $screenshotsDir = "$baseDir/screenshots";
        $commentsDir = "$baseDir/comments";

    if (!is_dir($baseDir)) {
        mkdir($baseDir, 0755, true);
    }

    if (!is_dir($screenshotsDir)) {
        mkdir($screenshotsDir, 0755, true);
    }

    if (!is_dir($commentsDir)) {
        mkdir($commentsDir, 0755, true);
    }

    $screenshotName = "$username_screenshot." . pathinfo($screenshot["name"], PATHINFO_EXTENSION);
    $screenshotPath = "$screenshotsDir/$screenshotName";
    $commentPath = "$commentsDir/$username_comments.txt";

    if ($screenshot["error"] == 0) {
        if (move_uploaded_file($screenshot["tmp_name"], $screenshotPath)) {
            $commentContent = "$username: $comment";
            file_put_contents($commentPath, $commentContent);
            echo "Ticket submitted successfully!";
        } else {
            echo "Error uploading screenshot.";
        }
    } else {
        echo "No screenshot file was uploaded.";
    }
}
}
?>
</body>
</html>