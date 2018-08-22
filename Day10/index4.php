<?php
$city = array("Hà Nội", "Hồ Chí Minh", "Đà Nẵng");
echo '<pre>';
print_r($city);
echo '</pre>';
//Cách 2
$city = array();
$city[]= "Hà Nội";
$city[] = 'ho chi minh';
$city[] = 'da nang';
echo '<pre>';
print_r($city);
echo '</pre>';
// cach 3
$city = array();
$city[0] = 'ha noi';
$city[1] = 'ho chi minh';
$city[2] = 'da nang';
echo "<pre>";
print_r($city);
echo "</pre>";
// cach 4
$city = array();
$city[5] = 'ha noi';
$city[7] = 'ho chi minh';
$city['abc'] = 'da nang';
echo "<pre>";
print_r($city);
echo "</pre>";
echo '<br>' . $city['abc'];
// cách phức tạp
$country= array();
$country[] = array('ten_city' => 'ha noi', 'quan'=>  array('thanh xuan', 'hoan kiem'));
$country[]= array("ten_city" => "Đà Nẵng", "Quận" => array("quan 2","Quận 4"),"Huyện" => array("Huyện a"," Huyện b"));
echo '<pre>';
print_r($country);
echo '</pre>';
echo "<pre>";
print_r($country[0]['quan'][0]);
echo "</pre>";