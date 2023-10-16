<?php
header("Access-Control-Allow-Methods: POST");
include("../Config/config.php");
$config = new Config();

if($_SERVER['REQUEST_METHOD']=='POST'){
    $NAME = $_POST['NAME'];
    $COURSE = $_POST['COURSE'];
    $DATE_OF_BIRTH = $_POST['DATE_OF_BIRTH'];
    $res = $config->insert($NAME,$COURSE,$DATE_OF_BIRTH);
    if($res){
        $arr['data'] = "Inserted Successfully";
    }else{
        $arr['data'] = "Insertion Failed";
    }
}

else{
    $arr['error'] = "Only POST HTTP Methods are allowed...";
}

echo json_encode($arr);
?>