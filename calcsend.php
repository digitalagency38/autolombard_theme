<?php
$debdate = date("d.m.Y");                     
$debtime = date('H:i:s');
$deb = "Заявка: $debdate -  $debtime";
file_put_contents( "debugcrm.txt", print_r($deb, true) . PHP_EOL , FILE_APPEND);

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

$phone = $_GET["user_phone"];
$phone = str_replace(" ","",$phone);
$phone = str_replace("(","",$phone);
$phone = str_replace(")","",$phone);
$phone = str_replace("+","",$phone);
$phone = str_replace("-","",$phone);
$name = $_GET["user_name"];
$summ = $_GET["summ"];
$time = $_GET["time"];

function normPrice($price)
	{
return ($price-floor($price)==0)?number_format($price+0,0,'.',' '):number_format($price+0,2,'.',' ');
	}
function getNumEnding($number, $endingArray)
	{
		$number = $number % 100;
		if ($number>=11 && $number<=19) {
		    	$ending=$endingArray[2];
		}
		else {
		    $i = $number % 10;
		    switch ($i)
		    {
			case (1): $ending = $endingArray[0]; break;
			case (2):
			case (3):
			case (4): $ending = $endingArray[1]; break;
			default: $ending=$endingArray[2];
		    }
		}
		return $ending;
}	
	
$end = getNumEnding($time, array('день','дня','дней'));	
	
$summ = normPrice($summ);

if ($_GET["subject"]){
    $subject = $_GET["subject"];
} else {
	 $subject = 'Запрос c формы калькулятор';
}

$text = "*TOP MCA.". $subject . '. ' .date('j.m.Y G:i') . "*" . "\n" . "Телефон: " . "*" . $phone;
if ($name){
$text .= "\n" . "Имя: " . "*" . $name; 	
} 
if ($summ){
$text .= "\n" . "Cумма: " . "*" . $summ; 	
}
if ($time){
$text .= "\n" . "Срок займа: " . "*" . $time.' '.$end; 	
}


$debdata = "Телефон: $phone ; Имя: $name";
file_put_contents( "debugcrm.txt", print_r($debdata, true) . PHP_EOL , FILE_APPEND);

$utm_source = $_GET["utm_source"]; if ($utm_source == '-'){$utm_source = 'null';}
$utm_medium = $_GET["utm_medium"]; if ($utm_medium == '-'){$utm_medium = 'null';}
$utm_campaign = $_GET["utm_campaign"]; if ($utm_campaign == '-'){$utm_campaign = 'null';}
$utm_term = $_GET["utm_term"]; if ($utm_term == '-'){$utm_term = 'null';}
$utm_content = $_GET["utm_content"]; if ($utm_content == '-'){$utm_content = 'null';}

$arr = explode('|', $utm_content);

$need = $_GET["need"];

$time = $_GET["time"];
if ($time == '1' || $time == '21' || $time == '31'){
    $time = $time.'месяц';
}
elseif($time=='2' || $time=='3' || $time=='4' || $time=='22' || $time=='23' || $time=='24' || $time=='32' || $time=='33' || $time=='34'){
    $time = $time.'месяца';
}
else{
    $time = $time.'месяцев';
}
$permonth = $_GET["permonth"];



$roistat_visit = $_COOKIE['roistat_visit'];
if (!$roistat_visit){ $roistat_visit = 'nocookie'; }
$ref = $_SERVER['HTTP_REFERER'];
if (!$ref){ $ref = 'null'; }
$ym_uid = $_COOKIE['_ym_uid'];
if (!$ym_uid){ $ym_uid = 'null'; }
$gid = substr($_COOKIE['_ga'],6);
if (!$gid){ $gid = 'null'; }

$utm_5 = $arr[5];
if (!$utm_5){ $utm_5 = 'null'; }
$utm_0 = $arr[5];
if (!$utm_0){ $utm_0 = 'null'; }
$utm_6 = $arr[5];
if (!$utm_6){ $utm_6 = 'null'; }


$data = array(
    'FilialId' => 1,
    'DealTypeId' => 600,
    'ClientPhone' => $phone,
    'Utm_source' => $utm_source,
    'Utm_medium' => $utm_medium,
    'Utm_campaign' => $utm_campaign,
    'Utm_term' => $utm_term,
    'Utm_content' => $utm_content,
    'Utm_device_type' => $utm_5,
    'Utm_position_type' => $utm_0,
    'Utm_region_name' => $utm_6,
    'RefUrl' => $ref,
    'AdvertClientId_1' => $ym_uid,
    'AdvertClientId_2' => $gid,
    'Fields' => array(
        array(
            'Key' => 'Телефон',
            'Value' => $phone,
        )
    ),
    'Source' => 'topmca.ru',
    'SessionId' => $gid,
);



$data_string = json_encode ($data, JSON_UNESCAPED_UNICODE);


// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'5>";
$msg .= "<p><strong>Заявка: </strong> ".date("d/m/Y")."</p>\r\n";
$msg .= "<p><strong>Время: </strong> ".date("G:i:s")."</p>\r\n";
$msg .= "<p><strong>Форма: </strong>".$data_string."</p>"."\r\n";
$msg .= '<p><strong>Страница:</strong> <a href='.$_SERVER['HTTP_REFERER'].'>'.$_SERVER['HTTP_REFERER'].' </p>';
$msg .= $text;
$msg .= "</body></html>";

$headers= "X-Mailer: PHP/" . phpversion()."\r\n";
$headers .= "From:xxxx.press < info@xxxx.press>" . "\r\n";
$headers .= "Reply-To: Автобайер Москва" . "\r\n";
$headers.= "MIME-Version: 1.0" . "\r\n";
$headers.= "Content-type: text/html; charset=utf-8\r\n";



$to = 'ahtubafishing@yandex.ru';
$subjeсtmail = 'заявка'; 
 
  if (mail( $to, $subjeсtmail, $msg, $headers)) {
	  echo 'отправлено';
  } else {
	  echo 'ошибка';
  }









/*
$servername = "nonameso.mysql.tools";
$database = "nonameso_capital";
$username = "nonameso_capital";
$password = "d^69S7^xHh";

$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conn, 'utf8');
$date = date('d-m-Y');
$dtime = date("H:i:s");
$source='mos-capital.ru';

$sql = "INSERT INTO log (date, time, source, phone, name, credit, session_id, utm_source, utm_medium, utm_term, utm_campaign, utm_content, refUrl, utm_device_type, utm_position_type, utm_region_name, advertClientId_1, advertClientId_2) VALUES ('".$date."','".$dtime."','".$source."','".$phone."','".$name."','".$need."|".$time."|".$permonth."','".$roistat_visit."','".$utm_source."','".$utm_medium."','".$utm_term."','".$utm_campaign."','".$utm_content."','".$ref."','".$utm_5."','".$utm_0."','".$utm_6."','".$ym_uid."','".$gid."')";

mysqli_query($conn, $sql);
*/



$url = 'http://159.255.26.150/xlombard/handlers/requests.ashx?operation=add&token=7f6d02cd-e3b0-4c27-9538-f60d604596ee';

file_put_contents( "debugcrm.txt", print_r('Ссылка:', true) . PHP_EOL , FILE_APPEND);
file_put_contents( "debugcrm.txt", print_r($url, true) . PHP_EOL , FILE_APPEND);

file_put_contents( "debugcrm.txt", print_r('Передаваемые данные:', true) . PHP_EOL , FILE_APPEND);
file_put_contents( "debugcrm.txt", print_r($data_string, true) . PHP_EOL , FILE_APPEND);


function file_get_contents_curl($url, $data) {
	$ch = curl_init();
	
	$headers = [
        "Accept: application/json"
	];

	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
	curl_setopt($ch,CURLOPT_HTTPHEADER, $headers);

	$data = curl_exec($ch);
	curl_close($ch);

	return $data;
} 

$result = file_get_contents_curl($url, $data);

$debresult = "Результат: $result \n\n";
file_put_contents( "debugcrm.txt", print_r($debresult, true) . PHP_EOL , FILE_APPEND);



$text = "*TOP MCA.* \n"."������ ". 'Заявка на звонок. '.date('j.m.Y G:i') . "*" . "\n" . "Телефон: " . "*" . $phone. "*" . "\n" . "Имя: " . "*" . $name;

$botparams=['chat_id'=>'-543623035', 'text'=>$text, 'parse_mode' => 'Markdown'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot1638106619:AAFz-dKNLKQjya8gkcSx-m3mkRLbkPuGrz0/sendMessage");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $botparams);
curl_exec($ch);
curl_close($ch);



} else {
	$deb = "прямой запрос. нет данных";
file_put_contents( "debugcrm.txt", print_r($deb, true) . PHP_EOL , FILE_APPEND);
}