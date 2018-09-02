?php

require ('baza-parametri.php');

$igrac_id=(int) @$_REQUEST['igrac_id'];

$upit = "delete from igrac where igrac_id=$igrac_id";
$rezultat= mysqli_query($bp,$upit);

if (!$rezultat)
    die(mysqli_error($bp));

    die(header("Location: igrac-pregled.php"));
