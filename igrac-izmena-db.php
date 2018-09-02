<?php

require ('baza-parametri.php');

$igrac_id= (int) @$_POST['igrac_id'];
$ime = mysqli_real_escape_string($bp, @$_POST['ime']);
$tim_id= (int) @$_POST['tim_id'];

$upit = "update igrac set ime= '$ime' , tim_id= '$tim_id' where igrac_id=$igrac_id";
$rezultat = mysqli_query($bp, $upit);
if(!$rezultat){ die(mysqli_error($bp));}

mysqli_close($bp);

die(header("Location: igrac-pregled.php"));
