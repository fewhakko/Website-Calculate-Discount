<?php
error_reporting(0);
$response = array();

if(isset($_GET['percent'])) {
    if(empty($_POST['percent']) || empty($_POST['money'])) {
        $response["status"] = 'error';
        $response["message"] = 'กรุณาอย่าเว้นช่องว่าง';
    }
    else {
        if (strlen($_POST['percent']) == "1") {
            $money = $_POST['money'];
            $nombre_format_francais = number_format($_POST['percent'], 2, '', ' ');
            $percent = '0.0'.$nombre_format_francais;
            $valuex = $money * $percent;
            $test = $money - $valuex;
            $response["status"] = 'success';
            $response["message"] = 'เท่ากับ : '.$test.' บาท';
        } else if ($_POST['percent'] < 101) {
            if ($_POST['percent'] == "100") {
                $response["status"] = 'success';
                $response["message"] = 'เท่ากับ : 0 บาท';
            } else {
                $money = $_POST['money'];
                $nombre_format_francais = number_format($_POST['percent'], 2, '', ' ');
                $percent = '0.'.$nombre_format_francais;
                $valuex = $money * $percent;
                $test = $money - $valuex;
                $response["status"] = 'success';
                $response["message"] = 'เท่ากับ : '.$test.' บาท';
            }
        } else {
            $response["status"] = 'error';
            $response["message"] = 'เปอร์เซ็นใส่ได้ตั้งแต่ 1-100%';
        }
    }
}

echo json_encode($response);

?>
