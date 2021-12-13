<?php
    echo "<h1>Problem Solving</h1>";
    $start = 1;

    while($start <= 10){
        echo $start . "#";
        $start++;
    }

    echo "<br>";

    $letter = 'h';
    $vowel = array('a','e','i','o','u');


    if($datatype == "string"){
        if(strlen($letter) > 1){
            echo "please enter only a single letter";
        }else{
            switch($letter){
                case (in_array($letter,$vowel)):
                    echo "vowel";
                break;
                
                default:
                    echo "contant";
            }
        }
    }
    else{
        echo "plese eneter string instead of number";
    }
    echo "<br>";

    //bangla style
    switch($letter){
        case "a": 
            echo "vowel". "<br>";
        break;    
        case "e": 
            echo "vowel". "<br>";
        break;    
        case "i": 
            echo "vowel". "<br>";
        break;    
        case "o": 
            echo "vowel". "<br>";
        break;    
        case "u": 
            echo "vowel". "<br>";
            break; 
        default:
            echo "consonant". "<br>";  
    }

    //
    $your_name = "s h a j j a d";

    print_r(explode(' ',$your_name)) ;

    $arr = array(
        array(1,2,3),
        array(4,5,6),
        45,
        array(7,8,9),
        90
    );

    foreach( $arr as $val){
        if(!is_array($val)){
            echo $val ."<br>";
        }
    }

    $mobile = '01715128693';

    if(strlen($mobile) == 11){
        echo "digit thik ase";
    }else{
        echo "digit kom ase";
    }
    echo "<br>";
    
    $cars = array(1,2,3,4,5,6,7);
    echo sizeof($cars);
    echo "<br>";


    function totalSize($cars)
    {
        $counter = 0;
        foreach($cars as $values){
            $counter++;
        }
        echo $counter;

    }


    echo totalSize($cars);
    echo "<br>";

    $str = 'a b c d f e u i o f z c d e';

    $after_explode = explode(' ',$str);
    
    $total_len = count($after_explode);
    $total_vowel = 0;
    
    foreach($after_explode as $val){
        switch($val){
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
                // echo "no vowel";
        }

    }
    echo $total_vowel;
    echo "<br>";
    echo $total_constant = $total_len - $total_vowel;
    echo "<br>";




    
?>