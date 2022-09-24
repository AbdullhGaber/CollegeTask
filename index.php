<?php
    require "./vendor/autoload.php";

    $school_1 = SchoolSingleton::getInstance("a school name","a school address");

    echo $school_1->getSchoolName();
    echo "<br>";    
    echo $school_1->getSchoolAdd();

    echo "<br>";
    echo "<br>";

    $school_2 = SchoolSingleton::getInstance("another name","another school address");

    echo $school_2->getSchoolName();
    echo "<br>";    
    echo $school_2->getSchoolAdd();
    echo "<br>";    
    echo "<br>";    
    echo "<br>";    
    echo "<br>";    
    echo "<br>";    


?>