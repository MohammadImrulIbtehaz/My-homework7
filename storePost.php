<?php
session_start();


$title = $_REQUEST["title"];
$details = $_REQUEST["details"];
$author = $_REQUEST["author"];



$errors = [];






if( empty($title) ){
    $errors["title_error"] ="title dite hobei!!!";
} elseif( strlen($title) >15 ){
    $errors["title_error"] ="vai beshi boro hoye jacche!!";
}



if( empty($details) ){
    $errors["detail_error"] ="details ta ki diben?";
}



if( count($errors) > 0 ){
    $_SESSION["old_data"] = $_REQUEST;
    $_SESSION["errors"] = $errors;

 
    header("Location: ../index.php");
}