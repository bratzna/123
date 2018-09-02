<?php
require ('baza-parametri.php');

$tim_id= (int) @$_REQUEST['tim_id'];
$naziv = mysqli_real_escape_string($bp, @$_POST['naziv']);

$upit = "update tim set naziv='$naziv' where tim_id= $tim_id";
$rezultat = mysqli_query($bp, $upit);
if(!$rezultat) 
    die(mysqli_error($bp));

die(header("Location: tim-pregled.php"));
