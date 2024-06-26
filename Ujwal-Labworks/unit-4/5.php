<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Ticketing Form</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Username</label>
        <input type="text" name="name" id="name"><br><br>
        <label for="mail">Email</label>
        <input type="email" name="mail" id="mail"><br><br>
        <label for="phone">Phone</label>
        <input type="tel" name="phone" id="phone"><br><br>
        <select name="problem" id="problem">
            <option value="">Select an Option</option>
            <option value="Bad internet">Poor internet connection</option>
            <option value="Fiber breakage">Fiber breakage</option>
        </select><br><br>
        <label for="comment">Comment</label>
        <textarea name="comment" id="comment"></textarea><br><br>
        <label for="screenshot">Screenshot</label>
        <input type="file" name="screenshot" id="screenshot"><br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset Form">
    </form>
    <?php
    class User
    {
        private $username;
        private $email;
        private $phone;
    
        public function __construct($username, $email, $phone)
        {
            $this->username = $username;
            $this->email = $email;
            $this->phone = $phone;
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] === UPLOAD_ERR_OK) {
            $username = $_POST["name"];
            $email = $_POST["mail"];
            $phone = $_POST["phone"];
            $problem = $_POST["problem"];
            $comment = $_POST["comment"];
            $screenshot = $_FILES["screenshot"];
            $baseDir = "Ticket/customer";
            $screenshotsDir = "$baseDir/screenshots";
            $commentsDir = "$baseDir/comments";
            $user = new User($username, $email, $phone);
            $file_type = mime_content_type($_FILES['screenshot']['tmp_name']);

            if ($file_type != 'image/png') {
                echo "Please upload a PNG file";
                die;
            }
            if (!is_dir($baseDir)) {
                mkdir($baseDir, 0755, true);
            }

            if (!is_dir($screenshotsDir)) {
                mkdir($screenshotsDir, 0755, true);
            }

            if (!is_dir($commentsDir)) {
                mkdir($commentsDir, 0755, true);
            }

            // Check if the username is set
            if (isset($username) && !empty($username)) {
                $screenshotName = "$username"."_screenshot." . pathinfo($screenshot["name"], PATHINFO_EXTENSION);
                $screenshotPath = "$screenshotsDir/$screenshotName";
                $commentPath = "$commentsDir/$username"."_comments.txt";

                if (move_uploaded_file($screenshot["tmp_name"], $screenshotPath)) {
                    $commentContent = "$username: $comment";
                    file_put_contents($commentPath, $commentContent);
                    echo "Ticket submitted successfully!";
                } else {
                    echo "Error uploading screenshot.";
                }
            } else {
                echo "Username is not provided.";
            }
        } else {
            echo "No screenshot file was uploaded or an error occurred during the upload.";
        }
    }
    ?>
</body>
</html>