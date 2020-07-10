

<?php 
include_once '../base.php';
$table=$_POST['table'];

$bt=save("$table" ,['id'=>1]);


to("../home.php?do=$table");

?>