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
</body>

</html>