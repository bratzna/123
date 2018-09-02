<?php

require ('baza-parametri.php');

$tim_id= (int) @$_REQUEST['tim_id'];
$ime = mysqli_real_escape_string($bp, @$_POST['ime']);

$upit = "insert into igrac (ime, tim_id) values ('$ime','$tim_id')";
$rezultat = mysqli_query($bp, $upit);
if(!$rezultat){ die(mysqli_error($bp));}

mysqli_close($bp);

die(header("Location: igrac-pregled.php"));
