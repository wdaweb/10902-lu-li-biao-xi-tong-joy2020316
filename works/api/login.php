<?php
include_once "../base.php";
    $acc=$_POST['acc'];
    $pw=$_POST['pw'];
    $chk=nums('login',['acc'=>$acc,'pw'=>$pw]);

    if($chk>=1){

        to("../home.php");
    }else{
        to("../fail.php");
    }



?>