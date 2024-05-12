<html>
    <body>
        <?php
            $servername="Localhost"; 
            $username="root";
            $password="";
            $database="WEBTECHTEST";
            $connection=new Mysqli($servername,$username,$password,$database);
            if($connection->connect_error){
                die("Connection to the database has failed".$connection->connect_error);
            }
            else{
                echo "Connection Successful<br>";
            }
            $query="select * from Names";
            $values=$connection->query($query);
        ?>
        <table border="1">
        <tr><td>Name<td></tr>
        <?php
            while($row=$values->fetch_assoc()){
            echo "<tr><td>{$row['Name']}</td></tr>";
            }
        ?>
        </table>
    </body>
</html>