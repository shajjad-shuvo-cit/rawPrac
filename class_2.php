<?php
    //constant;
    define('USERNAME','shuvo47');
    echo USERNAME;
    
    //string concat;
    $first_name = "shajjad";
    $last_name = "shuvo";

    $full_name = $first_name . " " . $last_name;

    echo $full_name;
    echo "<br>";

    // main text -string method;
    $main_text = "     Fred founded Lone Rider with the goal  # of building the highest quality equipment for adventure motorcycle riders, without compromise between form and function. Looking for fresh adventure motorcycle content, written from the perspective of true adventure motorcyclists that travel the world? Check out the Lone Rider Blog.    ";

    //echo 
    echo($main_text);
    echo "<br>";
    //total charcs;
    echo strlen($main_text);
    echo "<br>";

    //total words;
    echo str_word_count($main_text);
    echo "<br>";

    //removing white space;
    echo strlen(ltrim($main_text));
    echo "<br>";
    echo strlen(rtrim($main_text));    
    echo "<br>";
    echo strlen(trim($main_text));    
    echo "<br>";
    //kata-kati
    echo strlen(chop($main_text,' '));
    echo "<br>";
    
    //case;
    echo strtoupper($main_text);
    echo "<br>";
    echo strtolower($main_text);
    echo "<br>";
    echo "<br>";
    
    //reverse;
    echo strrev($main_text);
    echo "<br>";
    //repeat
    echo str_repeat($main_text,2);
    echo "<br>";
    
    //position
    echo strpos($main_text,'function');
    echo "<br>";
    
    //kata kati
    print_r(explode('#',$main_text)) ;
    echo "<br>";
    
    //security
    echo md5($full_name);
    echo "<br>";

    //artithmatic operations; 


    
    //functions;
   
?>