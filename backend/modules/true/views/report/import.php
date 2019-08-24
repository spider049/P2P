<?php
echo "<pre>";
echo "ทดสอบการส่งค่า Function <br><br>";
// ประกาศตัวแปร $geo เรียกใช้งานฟังชั่น cityLocation และส่งค่า "bankkok" ไปคำนวณ
$geo = cityLocation("bankkok");
echo $geo[0] . '<br>'; // พิมพ์ค่าตัวแปร Index[0] ที่ส่งกลับมาจากฟังชั่น
echo $geo[1] . '<br><hr>'; // พิมพ์ค่าตัวแปร Index[1] ที่ส่งกลับมาจากฟังชั่น
//
list($lat,$lon) = cityLocation("london");
echo "ค่า Lat: " . $lat . '<br>';
echo "ค่า Lon: " . $lon . '<br><br><br>';
echo "</pre>";

echo "<pre>";
//
list($F1,$F2) = getMyName("A1");
echo "ชื่อ : " . $F1 . "   นามสกุล : " . $F2;

//var_dump($geo);

echo "</pre>";
//
echo "<pre>";
$y = add(30000,5000);
printf("ผลลัพธ์ที่ได้ : ".$y);
echo "</pre>";

// ตัวแปรอาเรย์
echo "<pre>";
echo "ตัวแปรอาเรย์ <br>";
echo "ตัวแปรอาเรย์ <br><hr>";
$cars = array("Volvo", "BMW", "Toyota"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "</pre>";


//
function getMyName($MyName){
    $FnameFull = [
        "A1" => ['พยอม','ดีเม็ด'],
        "A2" => ['Pattama','Thanmetharat'],
        "A3" => ['Thongchai','Khewphasert']
    ];
    return $FnameFull[$MyName];
}
//
function cityLocation($city){
    $locations = [
        "bankkok" => [13.99,100.22],
        "japan" => [45.99,55.55],
        "london" => [36.55,12.336]
    ];
    return $locations[$city];
}


function add($M2,$M3){
    
    $M1=$M2*$M3;
    
    return $M1;
}
