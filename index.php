<!DOCTYPE html>
<html>
<head>
    <title>Хуйня ебаная</title>
    <meta charset="utf-8">
    </head>
<body>
    <form id="frm" method="POST" action="">
        <p>Введите элементы массива через запятую:</p>
        <input type="text" name="n" value="1, 2, 3">
        <input type="submit" value="OK">
    </form>
    <?php
        $n=$_POST["n"];
        $myArray = explode(", ", $n);

        $kolvoEl0 = 0;
        for($i=0; $i<count($myArray); $i++){
        	if($myArray[$i]==0){
        		$kolvoEl0++;
        	}
        }

        $min=0;
        for($i=1; $i<count($myArray); $i++){
                if($myArray[$i]<$myArray[$min]){
                    $min=$i;
                }
            }
        
        $sumEl = 0;
        for($k = $min+1; $k<count($myArray); $k++){
            $sumEl+=$myArray[$k];
        }

        sort($myArray, $SORT_NUMERIC);

        echo "Количество элементов массива, равных 0: ".$kolvoEl0."; Сумма элементов массива, расположенных после минимального элемента: ".$sumEl."; Массив, упорядоченный по возрастанию: </br>";
        for($m=0; $m<count($myArray); $m++){
            echo $myArray[$m]."; ";
        }
    ?>
</body>
</html>

