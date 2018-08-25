<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<h2>Bài tập về nhà của buổi số 11 là dùng bootstrap table và php array tạo 1 mảng php gồm 10 phần tử . mỗi phần tử là 1 mảng chứa các sản phẩm.
    Mỗi sản phẩm có các key là :
    array('product_id' => 1, 'product_name' => 'ABC', 'product_price' => 1000000);
    Sau đó dùng vòng lặp foreach để in ra các sản phẩm này trong bootstrap table .
    Các bạn sử dụng bootstrap CDN cho nhanh nhé !</h2>
<?php
$product = array();
$product[] = array("product_id" => "1", "product_name" => "computer", "product_price" => "15000000");
$product[] = array("product_id" => "2", "product_name" => "telephone", "product_price" => "1000000");
$product[] = array("product_id" => "3", "product_name" => "television", "product_price" => "12000000");
$product[] = array("product_id" => "4", "product_name" => "fireplace", "product_price" => "15000000");
$product[] = array("product_id" => "5", "product_name" => "fan", "product_price" => "500000");
$product[] = array("product_id" => "6", "product_name" => "speaker", "product_price" => "1000000");
$product[] = array("product_id" => "7", "product_name" => "bookcase", "product_price" => "5000000");
$product[] = array("product_id" => "8", "product_name" => "cushion", "product_price" => "100000");
$product[] = array("product_id" => "9", "product_name" => "stereo system", "product_price" => "500000");
$product[] = array("product_id" => "10", "product_name" => "sofa", "product_price" => "400000");
?>
 <table class="table">
    <thead>
      <tr>
        <th>Product_id</th>
        <th>Product_name</th>
        <th>Product_price</th>
      </tr>
    </thead>
<tbody>
<?php
foreach ($product as $item)  { ?>
    <tr>
        <td><?php echo $item["product_id"] ?></td>
        <td><?php echo $item["product_name"] ?></td>
        <td><?php echo $item["product_price"] ?></td>
    </tr>
<?php }
?>
</tbody>
 </table>
</body>
</html>
