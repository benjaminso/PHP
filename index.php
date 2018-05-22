<?php
    echo "mot hai a bon<br>";
    $name = array("firstname"=>"kevin",
                    "lastname"=>"ba bon name");

    echo $name["lastname"];


    $numbers = array(4,5,6,7,8,9,10);

    echo  count($numbers);
    echo "<br>";
    print_r($numbers);
    echo "<br>";
    echo  in_array(4,$numbers);
    echo "<br>";

    //boolean

    $result1=true;
    $result2=false;
    echo is_bool($result1);
    echo "<br>";
    echo $result1;
    echo "<br>";
    print_r ($result2);

    //type casting
    echo "<p>Casting</p>";
    $count = "2";
    echo gettype($count)."<br>";
    echo "sau khi casting:   ";
    $count +=3;
    echo gettype($count)."<br>";
    $castingBoolean = true;

    echo gettype($castingBoolean)."<br>";



    //constants : cannot change the value
    echo "this part presents the constants <br>";

    echo "khong co dau tien phia truoc. way to declare"."<br>";
    define("MAX_WIDTH",90);
    echo "constants is: ". MAX_WIDTH."<br>";
    echo gettype(MAX_WIDTH);
    
    //if-else statement.
    //logical operation
    // equal: == so sang 123 la so voi mot string la "123"
    //asignment: = 
    //identical: === same type as well
    //comparision

    //foreach loop
    foreach($numbers as $value){
        echo $value;
    }

    echo "<br>";
    $person = array(
        "first_name"=>"Hieu",
        "last_Name"=>"so",
        "age"=>30,
        "address"=>"7700 suraci ct, noname"
    );
    foreach($person as $key => $value){
        if(is_int($value)){
            echo $key ." ||| ".$value."<br>";
        }
        
    }

    //continue in PHP

    for($count=0;$count<10;$count++){
        if($count==5)
            continue;
        else
            echo $count;
    }


    for($count=0;$count<10;$count++){
        if($count%2==0)
            continue;
        else
            echo $count;
    }

    //break: cai nay se lam loop cat ngang ngay lap tuc


    //array pointer
    echo "<br> cai nay la pointer cua array in php";

    $age=array(10,20,30,40,50,60);
    echo current($age);// current la lay ra index hien thai
    next($age);// cai nay la de tang len gia tri can lay. neu cai nay dung thi no tu dong tang index
    echo "<br>";
    echo current($age);

    //user define function
    function sayHello(){
        echo "Hello"."<br>";
    }

    sayHello();
    function sayAnyWords($term){
        echo "noi tu gi cung dc {$term}"."<br>";
    }
    sayAnyWords("bon nam sau");
    ?>