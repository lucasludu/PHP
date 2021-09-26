<?php

    $array = [  
        1     => "first value",
        "1"  => "second value",    
        1.2  => "tirth value",    
        true => "fourth value",    
        1+0.2 => "fifth value",    
        false !== null => "sixth value", 
    ];

    foreach($array as $key => $values) {
        echo $key . " " . $values . "<br>" . strlen($key.$values);
    }



?>