<?php include_once "base.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >
</head>
<body>
<div class="container">
    <h1 class="text-center">管理登入</h1>
    <form action="api/login.php" method="post">
    <ul class="list-group col-md-4 mx-auto mt-5">
        <li class="list-group-item">帳號: <input type="text" name="acc" id="acc"></li>
        <li class="list-group-item">密碼: <input type="password" name="pw" id="pw"></li>
        <li class="list-group-item">
            <input type="submit" value="登入" class="btn btn-primary">
            <input type="button" value="註冊" class="btn btn-success" onclick="location.href='reg.php'">
        </li>
    </ul>
    
    </form>    
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" ></script>
</body>
</html>