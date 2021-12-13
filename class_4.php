<?php 
    //array declare - problem - print_r - single value echo
    $bd_team = array('liton','soumoy','shanto','mithun','musaddek','nasir','sabbir','rubel');
    print_r($bd_team);
    echo "<br>";
    echo $bd_team[0];
    echo "<br>";
    
    //play with index;
    // $bd_team = array(
        //     'liton', 
        //     7 => 'soumoy', 
        //     1 => 'shanto',
        //     'mithun',
        //     'opener' => 'musaddek',
        //     'nasir',
        //     'sabbir',
        //     'rubel'
        // );
        // print_r($bd_team);
        
        //array functions;
        $bd_team2 = array(
            'opener1' => 'liton', 
            'opener2' => 'soumoy', 
            'onedown' => 'shanto',
            'mithun',
            'musaddek',
            'nasir',
            'sabbir',
            'rubel',
        );
        print_r($bd_team2);
        echo "<br>";
        
        //index arrays;

        //to check index exist 
        if(array_keys($bd_team,10)){
            echo "ase";
        }
        else{
            echo 'nai';
        }
        echo "<br>";

        //all value
        echo count($bd_team);
        echo "<br>";

        //delete last value;
        array_pop($bd_team);
        print_r($bd_team);
        echo "<br>";

        //insert new value last;    
        array_push($bd_team,'opu');
        print_r($bd_team);
        echo "<br>";
        
        // insert new value in first
        array_unshift($bd_team,'tamim');
        print_r($bd_team);
        echo "<br>";
        
        //to check value exist;
        if(in_array('tamim',$bd_team)){
            echo "ase";
        }
        else{
            echo "nai";
        }
        echo "<br>";
    //associative array;   
    print_r(array_change_key_case($bd_team2,CASE_UPPER)); 	
    echo "<br>";

    
    print_r(array_keys($bd_team2));
    echo "<br>";
    
    $wicket = array('mustafiz','taskin','mehedi','shakib','shakib','nasum','mustafiz','shakib');
    print_r($wicket);
    echo "<br>";
    
    
    //calculate value how many times;
    print_r(array_count_values($wicket));
    echo "<br>";


    //multi dimentional array;
    print_r(array_chunk($wicket,3));


?>