<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>izmena igraca</title>
</head>
<body>
    <h1>izmena igraca</h1>
    <?php
        require ('baza-parametri.php');

        $igrac_id = (int) @$_REQUEST['igrac_id'];

        $upit = "select * from igrac where igrac_id = '$igrac_id'";
        $rezultat= mysqli_query($bp, $upit);


        if (!$rezultat) 
            die(mysqli_error($bp));
        if (mysqli_num_rows($rezultat) != 1) 
            die();
        
        
        $igrac = mysqli_fetch_object($rezultat);
    ?>
    <form action="igrac-izmena-db.php" method="post">
        igrac_id: <input type="text" name="igrac_id" value="<?php echo $igrac->igrac_id;?>" readonly />
        <select name="tim_id">
        <?php
        require ('baza-parametri.php');

        $upit = "select * from tim";
        $rezultat= mysqli_query($bp,$upit);
        if(!$rezultat) {die(mysqli_error($bp));}

        while($red = mysqli_fetch_object($rezultat)) {
            if($igrac->tim_id == $red->tim_id)
                echo "<option value= '{$red->tim_id}' selected>{$red->opis}</option>\n";
            else
                echo "<option value= '{$red->tim_id}'>{$red->opis}</option>\n";
            }
        ?>
        </select>
        <br/>       
        ime: <input type="text" name="ime" value= "<?php echo $igrac->ime;?> " />
        <hr />
        <button type="submit">Izmena</button>
    </form>
</body>
</html>
