<?php

if (isset($_POST["date"]) && isset($_POST["summ"]) && isset($_POST["srok"]) && isset($_POST["dep-rep"]) && isset($_POST["summ-pop"]) ) { 

	$summn1 = $_POST["summ"];
	if ($_POST["dep-rep"] == 1)
		$summadd = $_POST["summ-pop"];
	else 
		$summadd = 0;
	$daysn = 30;
	$percent = 10;
	$daysy = 365*$_POST["srok"];
	$result = ($summn1 + ($summn1 + $summadd)*$daysn*($percent / $daysy))." руб";
	
}
else {
	$result = "Заполните все поля";
}
// Формируем массив для JSON ответа
    $res = array(
    	'result' => $result
    ); 

    // Переводим массив в JSON
    echo json_encode($res); 

?>