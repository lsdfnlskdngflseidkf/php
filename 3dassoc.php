<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $library=array(
        "Fiction"=>array(
           "Mockingbird"=>array("Title"=>"To Kill a Mockingbird","Author"=>"Harper Lee","Release Date"=>"1960"),
           "LOTR"=>array("Title"=>"The Fellowship of the Ring","Author"=>"J R.R. Tolkien","Release Date"=>"1954"),
           "Potter"=>array("Title"=>"Harry Potter","Author"=>"J K Rowling","Release Date"=>"1999")
        ),
        "Science_Fiction"=>array(
            "Dune"=>array("Title"=>"Dune","Author"=>"Frank Herbert","Release Date"=>"1965"),
            "1984"=>array("Title"=>"1984","Author"=>"George Orwell","Release Date"=>"1949"),
            "Neuro"=>array("Title"=>"Neuromancer","Author"=>"William Gibson","Release Date"=>"1984"),
        ),
        "Fantasy"=>array(
            "AITW"=>array("Title"=>"Alice In the Wonderland","Author"=>"Lewis Caroll","Release Date"=>"1865"),
            "Elfland's Daughter"=>array("Title"=>"The King of Elfland’s Daughter","Author"=>"Lord Dunsany","Release Date"=>"1924"),
            "Hobbit"=>array("Title"=>"The Hobbit","Author"=>"J R.R. Tolkien","Release Date"=>"1937")
        )
        );
        echo "<ul>";
        foreach($library as $genre=>$books){
            echo "<li>$genre</li>";
            echo "<ol type='1'>";
            foreach($books as $name=>$book){
                echo  "<li>".$book['Title']."</li>";
                echo "<ul type='circle'>";
                foreach ($book as $details=>$info){
                    echo "<li>$details: $info</li>";
                }
                echo "</ul>";
            }  
            echo "</ol>";
        }
        echo "</ul>";
    ?>
</body>
</html>