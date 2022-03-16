<?php

if($_SESSION['name']){
 header('location:indexlogin.php');
}else{
 header('location:index.php');
}