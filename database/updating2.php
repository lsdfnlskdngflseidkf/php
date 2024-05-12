<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "WEBTECHTEST";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection with database has failed: " . $connection->connect_error);
} else {
    echo "Database connection has succeeded<br>";
}
if(isset($_POST['id'])){
    $id=$_POST['id'];
    ?>
<form action='' method=POST>
            <label for="column">Select Column to Update:</label>
        <select name="column" id="column">
            <option value="fullName">Full Name</option>
            <option value="email">Email</option>
            <option value="phone">Phone</option>
            <option value="address">Address</option>
            <option value="city">city</option>
            <option value="province">province</option>
            <option value="postalcode">Postal code</option>
            <option value="country">Country</option>
            <option value="travelType">Travel type</option>
            <option value="interestedplaces">Interested places</option>
            <option value="transportation">Transportation</option>
            <option value="activities">activities</option>
        </select><br><br>
        <input type="submit" value="submit">
</form>
<?php
if(isset($_POST['column'])){
   $column= $_POST['column'];
 $retrievequery="select $column from travelbooking where id=$id]';";
 $default=$connection->query($retrievequery);
 ?>

 <form action='' method=POST>
        <input type=text name=updatevalue value="<?php echo $default?>">
 </form>
 <?php
if(isset($_POST['updatevalue'])){
    $value=$_POST['updatevalue'];
    $updatequery="update travelbooking set $column=$default where id=$id";

else{
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Database updating under CRUD operations</title>
    </head>
    <body>
        <h2>Update Data</h2>
        <form method="post" action="">
            <label for="id">Record ID:</label>
            <input type="text" name="id" id="id" required><br><br>
    
            <input type="submit" value="Update">
        </form>
    </body>
    </html>

<?php
}
?>


