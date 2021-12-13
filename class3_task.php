<?php
    //grading system if else

    // $number = 123;
    // if($number >= 80){
    //     echo "your grade is A+";
    // }
    // elseif($number >=70 && $number <=79){
    //     echo "your grade is A";
    // }
    // elseif($number >=60 && $number <=69){
    //     echo "your grade is A-";
    // }
    // else{
    //     echo " sorry , you failed ! try next time";
    // }


    //switch case grading
    // switch ($number) {
    //     case ($number >= 80):
    //         echo "your grade is A+";
    //     break;

    //     case ($number >=70 && $number <=79):
    //         echo "your grade is A";
    //     break;
        
    //     default:
    //         echo "please enter between  0 - 100";
    //     break;
    // }

    //prime number;
    // function isprime($number)
    // {
    //     if($number == 1 ){
    //         return 0;
    //     }

    //     for ($i=2; $i <= $number/2 ; $i++) { 
    //         if( $number % $i == 0){
    //             return 0;
    //         }
    //     }

    //     return 1;
    // }

    // $prime = isprime($number);

    // if($prime == 0){
    //     echo " not a prime number";
    // }else{
    //     echo " prime number";
    // }

    //even odd ;
    for ($i=0; $i <= 200 ; $i += 15) { 
        if($i % 2 != 0){
            echo $i;
            echo "<br>";
        }
    }

?>