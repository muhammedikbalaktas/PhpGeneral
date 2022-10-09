<!-- this part contains variables-->

<?php
    /*$isSelected=false;
    if(!$isSelected){
        echo "false";
    }
    else{
        echo "true";
    }*/

    $str1='hello from php<br>';
    print ($str1);

    define("value",50);//defining constant variables $name

    define("__name__","Muhammed");
    //you can place variables inside double quote strings


    $name="Bill Gates!";
    $str2="<br>there is a programmer called $name";
    echo value;
echo "<br>some space is needed<br>";
    echo __name__;
    print ($str2);

    $firstName="Nikola";
    $lastName="Tesla";

    $day=date("D");
    echo "<br> $day";
    switch ($day){
        case ("Sun"):
            echo "<br> today is Sunday";
            break;
        case ("Mon"):
            echo "<br> today is not Monday";
            break;
        case ("Tue"):
            echo "<br> today is Tuesday";
            break;
        case ("Wed"):
            echo "<br> today Wednesday ";
            break;
        case ("Thu"):
            echo "<br> today is Thursday";
            break;
        case ("Fri"):
            echo "<br> today is Friday";
            break;
        case ("Sat"):
            echo "<br> today is Saturday";
            break;
    }

    for($i=0;$i<5;$i++){
        echo "<br>";
        if($i==3) continue;
        echo "this is a for loop: $i";
    }
    echo "<br style='background-color: black'>";
    $j=0;
    while ($j<5){
        echo "<br>";
        if($j==3) break;
        echo "this is a while loop: $j";
        $j++;
    }

    $myarray=array(1,2,3,4,5,100,3);
    foreach ($myarray as $item){

        echo "<br> $item";
    }
    echo "<br>";
    echo "<br>";

    //associative array
    $users=array("Muhammed"=>1234,"Halil"=>4321);

    //echo "<br>".$users["Muhammed"];

    foreach ($users as $user){
        echo "$user<br>";

    }
    //multidimensional array
    $twoDimUser=array(
            "Muhammed"=>array(
                    "physics"=>40,
                    "math"=>50,
                    "chem"=>60
            ),
            "Halil"=>array(
                "physics"=>80,
                "math"=>90,
                "chem"=>95
            )
    );
    echo "<br>".$twoDimUser["Halil"]["physics"];
    echo "<br>";

    foreach ($twoDimUser as $item){
        foreach ($item as $value){
            echo "<br>$value";
        }

    }
    echo "<br>";
    //untill web consepts from tutorialspoint
    trial();
    ?>


    <?php
        function trial($index="good"){
            echo "print something: $index<br>";

        }
        function addtwo($number1, $number2){

            return $number1+$number2;
        }
        $result=addtwo(123,435);

        trial($result);

        echo "<br>";
        ?>

    <?php
        //check client type







