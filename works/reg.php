<?php include_once "base.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >
</head>
<body>
<div class="container">
<h1 class="text-center">註冊</h1>
    <form action="api/reg.php" method="post">
    <ul class="list-group col-md-4 mx-auto mt-5">
        <li class="list-group-item">帳號: <input type="text" name="acc" id="acc"></li>
        <li class="list-group-item">密碼: <input type="password" name="pw" id="pw"></li>
        <li class="list-group-item">email: <input type="text" name="email" id="email"></li>
        <li class="list-group-item"><input type="submit" value="確認" class="btn btn-primary"></li>
    </ul>
    
    </form>    
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" ></script>
</body>
</html>