<?php

require ('baza-parametri.php');
//eskejpovanje,tj zabrana unosenja koda u polje
$naziv = mysqli_real_escape_string($bp, @$_POST['naziv']);

$upit = "insert into tim (naziv) values ('$naziv')";
$rezultat = mysqli_query($bp, $upit);
if(!$rezultat){ die(mysqli_error($bp));}

mysqli_close($bp);

die(header("Location: tim-pregled.php"));
