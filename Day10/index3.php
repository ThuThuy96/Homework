<?php
$age = 19;
if ($age > 18)
    echo "<br> Bạn đã học xong cấp 3";
else
    echo "<br>Bạn chưa học xong";
echo "<br>--------------------";
$day = 1;
if ($day == 1)
    echo "<br> Chủ nhật";
elseif ($day ==2)
    echo "<br> Thứ hai";
elseif ($day ==3)
    echo "<br> Thứ ba";
elseif ($day ==4)
    echo "<br> Thứ tư";
elseif ($day ==5)
    echo "<br> Thứ năm";
elseif ($day==6)
    echo "<br> Thứ sáu";
elseif ($day ==7)
    echo "<br> Thứ 7";
else
    echo "<br> Không thuộc ngày gì cả";
echo "<br>---------------------<br>";
$month = date('m');
var_dump($month);
/*exit;*/
switch ($month) {
    case 0:
        echo "<br>Tháng 1";
        break;
    case 1:
        echo "<br>Tháng 2";
        break;
    case 2:
        echo "<br>Tháng 3";
        break;
    case 3:
        echo "<br>Tháng 4";
        break;
    case 4:
        echo "<br>Tháng 5";
        break;
    case 5:
        echo "<br>Tháng 6";
        break;
    case 6:
        echo "<br>Tháng 7";
        break;
    case 7:
        echo "<br>Tháng 8";
        break;
    case 8:
        echo "<br>Tháng 9";
        break;
    case 9:
        echo "<br>Tháng 10";
        break;
    case 10:
        echo "<br>Tháng 11";
        break;
    default:
        echo "<br>Tháng 12";
        break;

}
echo "<br>-------------------------";
$i=50;
while ($i<100) {
    echo "<br> " . $i;
    $i++;
}
echo "<br>---------------------";
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $key => $value) {
    echo '<br>' . $key . ' --- ' . $value;
}

