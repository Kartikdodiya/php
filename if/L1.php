<?php
    $age = 70;
    echo "<h1>A person whose Age is $age year, Can a person is capable for voting ?</h1><br>";
    if($age < 18){
        echo "A person is not capable for voting";
    }
    else if($age > 18){
        echo "A person is Capable for voting";
    }
    else if($age == 18){
        echo "A person is Capable for voting";
    }
?>