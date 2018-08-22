<?php
function chuvihinhtron(bankinh){
    $chuvihinhtron=bankinh*bankinh*3.14;
    return $chuvihinhtron;
}
$chuvi=chuvihinhtron(8);
echo :" chu vi hinh tron la: $chuvihinhtron";
//chuvihinhvuong
function chuvihinhvuong(canh) {
    $chuvi= canh*4;
    return chuvi;
}
$z= chuvihinhvuong(5);
echo "chu vi hinh vuong la: $chuvi";
//chuvihcn
function chuvihinhcn($a,$b){
$chuvihcn=($a=$b)/2;
return $p;
}
$c=chuvihinhcn(4,6);
echo "chu vi hinh chu nhat la: $chuvihcn";

