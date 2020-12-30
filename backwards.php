<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Backwards</title>
    </head>
    <body>
        <form action="backwards.php" method="POST">
            a <input type="number" id="a" name="a" min="1" max="10" 
                   step="0.02" value="3">
            b <input type="number" id="b" name="b" min="1" max="10" 
                   step="0.02" value="3">
            <input type="submit" value="post" name="button">
        </form>
        <form action="str.php" method="GET">
            <input type="text" name="tekst" size="30" placeholder="Your text to write backwars">
            <input type="submit" name="button">
        </form>
    </body>
</html>

<?php
 
function backward($text) {
           $wynik="";
            for($i= strlen($text)-1; $i>=0; $i--)
              $final.=$text[$i];
            
          return $final; 
        }
 
        if(isset($_GET["text"])and !empty($_GET["text"]))
        {
            $text=$_GET["text"];
            echo backward($text);
        }else{
            echo "FAILED";
        }
 ?>
