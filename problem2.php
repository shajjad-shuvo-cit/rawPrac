<?php
    $char = "e";
    $vowel = array('a','e','i','o','u');


    switch($char){
        case ($char  == 'a' || $char == 'e')  :
            echo "vowel";
        break;
        
        default:
            echo "consonant";
    }

    // if(strlen($char) > 1){
    //     echo "plase enter signle character";
    // }else{
    //     switch($char){
    //         case (in_array($char,$vowel)):
    //             echo "vowel";
    //         break;
            
    //         default:
    //             echo "your chars is : ". $char .  " is a consonant";
    //     }
    // }

    echo "<br>";
    echo "<br>";
    echo "<br>";

    $multi_index_array = array(
        array(25,26,27),
        25,
        array(31,32,3,34),
        43,
        array(90,91),
    );

    foreach($multi_index_array as $indarray){
        if(!is_array($indarray)){
            echo $indarray ."<br>";
        }
    }

    $your_name = "s h a j j a d u r r a h m a n";

    $after_explode = explode(' ', $your_name);
    $total_len = count($after_explode);

    $total_vowel = 0;

    foreach($after_explode as $value){
        switch($value){
            case 'a':
                $total_vowel++;
            break;
            case 'e':
                $total_vowel++;
            break;
            case 'i':
                $total_vowel++;
            break;
            case 'o':
                $total_vowel++;
            break;
            case 'u':
                $total_vowel++;
            break;
            
            default:
            
        }
    }

    echo $total_vowel;
    echo "<br>";
    echo  $total_cosnonant = $total_len - $total_vowel;
    echo "<br>";
    echo $total_len;







?>