<?php

    // $marks=10;
    // $marks2=20;
    // $marks3=30;
    // $marks4=40;


    $marks = array(10,20,30,40,"aman",50,60);
    echo "<pre>";
    //var_dump($marks);
    //var_export($marks);
    //print_r($marks);

    //3) MultiDimensional array

    $a = array ("SchoolName"=>array("10th"=>array("Ram"=>array('Maths'=>50,'Sci'=>45,"Eng"=>49),
    "Shyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48),
    "Ghnshyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48)),
"11th"=>array("Ram"=>array('Maths'=>50,'Sci'=>45,"Eng"=>49),
    "Shyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48),
    "Ghnshyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48)),
"12th"=>array("Ram"=>array('Maths'=>50,'Sci'=>45,"Eng"=>49),
    "Shyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48),
    "Ghnshyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48))
));

print_r($a);