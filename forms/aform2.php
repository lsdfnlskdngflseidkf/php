<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
</head>

<body>

    <form action="" method="POST">
        <label for="Fname">First Name:</label>
        <input type="text" name="Fname" ><br><br>i

        <label for="Lname">Last Name:</label>
        <input type="text" name="Lname" ><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" ><br><br>

        <label for="age">Age:</label>
        <input type="number" name="age" ><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    class Person
    {
        private $data = [];

        public function __set($name, $value)
        {
            $this->data[$name] = $value;
        }

        public function __get($name)
        {
            return isset($this->data[$name]) ? $this->data[$name] : null;
        }
    }

    if (isset($_POST["Fname"], $_POST["Lname"], $_POST["Lname"], $_POST["email"], $_POST["age"])) {
        $Fname = $_POST["Fname"];
        $Lname = $_POST["Lname"];
        $email = $_POST["email"];
        $age = $_POST["age"];

        // Create an object with user information
        $Person1 = new Person();
        $Person1->Fname = $Fname;
        $Person1->Lname = $Lname;
        $Person1->email = $email;
        $Person1->age = $age;

        // Echo user information on the page
        echo "<div class=aside>";
        echo "<h2>User Information:</h2><br>";
        echo "<p>First Name: {$Person1->Fname}</p>";
        echo "<p>Last Name: {$Person1->Lname}</p>";
        echo "<p>Email: {$Person1->email}</p>";
        echo "<p>Age: {$Person1->age}</p>";
        echo "</div>";
    }
    ?>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            /* Background color for the entire page */
        }

        .aside {
            margin-left: 20px;
        }

        form {
            background-color: #ffffff;
            /* Background color for the form */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            /* Green submit button color */
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
            /* Darker green color on hover */
        }
    </style>

</body>

</html>
