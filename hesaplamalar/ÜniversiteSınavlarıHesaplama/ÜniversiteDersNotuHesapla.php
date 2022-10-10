<?php

        $vize1=$_GET["vize1"];
        $yüzde1=$_GET["vize2"];
        $vize2=$_GET["vize2"];
        $yüzde2=$_GET["vize2"];

        $final=$_GET["final"];
        $yüzde3=$_GET["vize3"];


        $result=($vize1*$yüzde1/100)+($vize2*$yüzde2/100)+($final*$yüzde3/100);

        echo "<h1 style='text-align: center; color: #c51162; margin-top: 200px'>Your result is $result</h1>"






?>

