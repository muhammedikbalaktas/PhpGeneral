<?php
    //Vücut kitle indeksi,
    // vücut ağırlığının boy uzunluğunun karesine bölünmesiyle (kg/m²) hesaplanır.
    $kilo=$_GET["kilo"];
    $boy=$_GET["boy"];


    $result=calculate($kilo,$boy);
    finalResult($result);



?>

<?php

            function calculate($kilo, $boy){

                    $result=$kilo/($boy*$boy)*10000;

                    return $result;


            }

?>
<?php
        /*
         *  18, 5 kg/m² ‘nin altındaki sonuçlar: İdeal kilonun altında
            18, 5 kg/m² ile 24, 9 kg/m² arasındaki sonuçlar: İdeal kiloda
            25 kg/m² ile 29, 9 kg/m² arasındaki sonuçlar: İdeal kilonun üstünde
        30 kg/m² ile 39, 9 kg/m² arasındaki sonuçlar: İdeal kilonun çok üstünde (obez)
            40 kg/m² üzerindeki sonuçlar: İdeal kilonun çok üstünde (morbid obez)*/
        function finalResult($result){
            echo "<h3 style='text-align: center; margin-top: 100px'>sonuclar:$result</h3>";

            if ($result<18.5){
                echo "<h3 style='text-align: center; margin-top: 100px'>ideal kilonun altındasınız. Kilo almanız gerekmektedir</h3>";
            }
            else if ($result>18.5 and $result <=24.9){
                echo "<h3 style='text-align: center; margin-top: 100px'>ideal kilodasınız.</h3>";
            }
            else if ($result>24.9 and $result <=29){
                echo "<h3 style='text-align: center; margin-top: 100px'>ideal kilonun üstündesiniz</h3>";
            }
            else if ($result>29 and $result <=39){
                echo "<h3 style='text-align: center; margin-top: 100px'>ideal kilonun çok üstündesiniz(obez).</h3>";
            }
            else if ($result>39){
                echo "<h3 style='text-align: center; margin-top: 100px'>ideal kilonun çok üstündesiniz (morbid obez)</h3>";
            }
            else  {
                echo "<h3 style='text-align: center; margin-top: 100px'> bir hata oluştu!!!</h3>";
            }


        }






?>
