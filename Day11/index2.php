<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>$Global trong PHP</h1>
<?php
$x=10;
$y=15;
$z=20;
$c=25;
function tinhtong(){
    echo "<br> x là: " .$GLOBALS["x"];
    echo "<br> y là: " .$GLOBALS["y"];
    $GLOBALS["c"]=50;
    echo '<pre>';
    print_r($GLOBALS);
    echo '</pre>';
}
tinhtong();
echo "ngoài hàm c";
echo $GLOBALS["c"];
?>
</body>
</html>