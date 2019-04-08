<?php
    include "Fan.php";
    $Fan1 = new Fan(1,2,3,3,false,10,"yellow");
    $Fan1->setStatus(true);
    echo $Fan1->toString();
    echo "<br/>";
    $Fan2 = new Fan(1,2,3,2,false,5,"blue");
    echo $Fan2->toString();