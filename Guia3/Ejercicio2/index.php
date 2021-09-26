<?php

    /*
    if(1 == ”1”) {
        echo "a- It's right!";
    } 
    */
    /*
    if(1 === ”1”) {
        echo "b- It's right!";
    }
    */

    if(! null) {
        echo "c- It's right! <br>";
    }

    if(! false) {
        echo "d- It's right! <br>";
    }

    if("") {
        echo "e- It's right! <br>";
    }

    if(" ") {
        echo "f- It's right! <br>";
    }

    if("tested") {
        echo "g- It's right! <br>";
    }

    if(1-1) {
        echo "h- It's right! <br>";
    }

    /** 
     * a.   1 == ”1”
     * b.	1 === ”1”
     * c.	! null 
     * d.	! false 
     * e.	“” 
     * f.	“ “ 
     * g.	“tested” 
     * h.	1-1
     */

?>