<?php
$students=[
   $cse =[
    [""=>"1","Name"=>"Himel","Email"=>"himel@gmail.com","Result"=>"4"],
    [""=>"2","Name"=>"kimel","Email"=>"kimel@gmail.com","Result"=>"6"],

   ],


    $bba =[
    [""=>"1","Name"=>"Himel","Email"=>"himel@gmail.com","Result"=>"4"],
    [""=>"2","Name"=>"kimel","Email"=>"kimel@gmail.com","Result"=>"6"],

   ]
  
];
    foreach($students as  $key=>$cse){
        echo "<p>Department:cse</p>";
        echo "<p>students:</p>";

    
   foreach($cse as  $key=>$value){

    foreach($value as $key=>$v1){


    echo "<pre>";
    print_r("$key: $v1 ");
    echo "</pre>";
    }
   }
   
    }


    




?>