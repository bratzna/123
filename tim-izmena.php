<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Izmena tima</h1>
    <?php
    require ('baza-parametri.php');
    
    $tim_id = (int) @$_REQUEST['tim_id'];

    $upit = "select * from tim where tim_id='$tim_id'";
    $rezultat = mysqli_query($bp,$upit);

    if (!$rezultat)
            die(mysqli_error($bp));
    if(mysqli_num_rows($rezultat) !=1)
        die('Ne postoji tim sa tim id-em');
    
    $tim = mysqli_fetch_object($rezultat);
    ?>

    <form action="tim-izmena-db.php" method="post">
        ID: <input type="text" name="tim_id" value="<?php echo $tim->tim_id; ?>" readonly />
        <br/>
        naziv: <input type="text" name="naziv" value="<?php echo $tim->naziv; ?>" />
        <hr/>
        <button type="submit">Izmena</button>
    </form>
</body>
</html>
