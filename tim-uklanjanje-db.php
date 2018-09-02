<?php

require ('baza-parametri.php');

$tim_id=(int) @$_REQUEST['tim_id'];

$upit = "delete from tim where tim_id=$tim_id";
$rezultat= mysqli_query($bp,$upit);

if (!$rezultat)
    die(mysqli_error($bp));

die(header("Location: tim-pregled.php"));
