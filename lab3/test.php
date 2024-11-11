































<?php

    //echo "Hello PHP". " TEst";

//    print('Hello PHP');

    // $id = 12;
    // $name = "alamin";
    // $cgpa = 3.5;
    // $status = true;

    // $std = array('alamin', 1, 3.5, 'alaminn@aiub.edu');
    // $std[0];
    // $std = ['alamin', 1, 3.5, 'alaminn@aiub.edu'];
    // $std[1];
    // $stds =  [ 
    //             ['alamin', 1, 3.5, 'alaminn@aiub.edu'],
    //             ['alamin', 1, 3.5, 'alaminn@aiub.edu'],
    //             ['alamin', 1, 3.5, 'alaminn@aiub.edu']
    //         ];
    // $stds[1][3];

    // $std = ['name'=>'alamin', 'id'=>1, 'cgpa'=>3.5, 'email'=>'alaminn@aiub.edu'];
    // $std['email'];

    // $stds =  [
    //             ['name'=>'alamin', 'id'=>1, 'cgpa'=>3.5, 'email'=>'alaminn@aiub.edu'],
    //             ['name'=>'alamin', 'id'=>1, 'cgpa'=>3.5, 'email'=>'alaminn@aiub.edu'],
    //             ['name'=>'alamin', 'id'=>1, 'cgpa'=>3.5, 'email'=>'alaminn@aiub.edu']
    //         ];
    
    // $stds[1]['email'];

    // $stds =  [
    //     's1'=>['name'=>'alamin', 'id'=>1, 'cgpa'=>3.5, 'email'=>'alaminn@aiub.edu'],
    //     's2'=>['name'=>'alamin', 'id'=>1, 'cgpa'=>3.5, 'email'=>'alaminn@aiub.edu'],
    //     's3'=>['name'=>'alamin', 'id'=>1, 'cgpa'=>3.5, 'email'=>'alaminn@aiub.edu']
    // ];

    // $stds['s2']['email'];

    // function abc($a, $b){
    //     return $a+$b;
    // }

    // abc(1,5);

    // function abc($a=0, $b=1){
    //     return $a+$b;
    // }

    // abc();

    // if(){

    // }else{

    // }

    for($i=0; $i<10; $i++){

        print("My name is alamin<br>");
    }
               // TasK No 1
    $length=5;
    $width=6;
    
    echo "The area of rectangle:". $length*$width."<br>";
    echo "The perimeter:". 2*($length+$width)."<br>";

                // Task No 2


    $amount=500;
    $vat=(15/100);
    echo "Calculated Price". $amount*$vat."<br>";

                // Task No 3
                
    $value=(10/2);
    

    if($value=5){
        echo "even<br>";
    }
    else{
        echo "odd<br>";
    }


                // Task No 4

    $a = 10;
    $b = 20;
    $c = 30;

    if( $a > $b && $a > $C ){
        echo "Largest number is: ". $a. "<br>";
    }
    elseif( $b > $a && $b > $c ){
        echo "Largest number is: ". $b. "<br>";
    }    
    
    elseif( $c > $a && $c > $b ){
        echo "Largest number is: ". $c."<br>";
    }

               // Task No 5

    for($num = 10; $num <= 100; $num++ ){
        if ($num%2 == 0) continue;
        echo "the number is: ". $num .".<br>";
    }

              // Task No 6

    $arr = array(14,15,16,35,74,13,58,86);
    $element = 35;
    echo "The given array is: ";
    for($i=0; $i<count($arr); $i++){
        echo $arr[$i]. " ";
    }
    echo "<br>";

    for($sum = 0; $num <= count($arr); $num++){
        if($arr[$num]==$element)
        {
            echo "Number". $element ."position loaded". ($num+1) ."<br>";
            break;
        }
    }
?>