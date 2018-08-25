<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style type="text/css">
    </style>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<?php
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
?>

<div class="container" style="margin: 50px auto">
    <div class="row">
        <form name="dang-ky" action="" method="post">
            <div class="form-group">
                <label for="hoten">Họ tên:</label>
                <input type="text" name="hoten" class="form-control" id="hoten">
            </div>
            <div class="form-group">
                <label for="sdt">SDT:</label>
                <input type="text" name="sdt" class="form-control" id="sdt">
            </div>
            <div class="form-group">
                <label for="maxt">Mã xác thực:</label>
                <input type="text" name="maxth" class="form-control" id="maxt">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="mk">Mật khẩu:</label>
                <input type="text" name="matkhau" class="form-control" id="mk">
            </div>
            <button type="taotaikhoan" class="btn btn-default">Tạo tài khoản</button>
        </form>
    </div>
</div>



</body>
</html>