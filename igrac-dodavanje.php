<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dodavanje igraca</title>
</head>
<body>
    <h1>Dodavanje igraca</h1>
    <form action="igrac-dodavanje-db.php" method="post">
        <select name="tim_id">
        <?php
        require ('baza-parametri.php');

        $upit = "select * from tim";
        $rezultat= mysqli_query($bp,$upit);
        if(!$rezultat) {die(mysqli_error($bp));}

        while($red = mysqli_fetch_object($rezultat)) {
            echo "<option value= '{$red->tim_id}'>{$red->naziv}</option>/n";
        }
        ?>
        </select>
        <br/>       
        ime: <input type="text" name="ime" />
        <hr />
        <button type="submit">Dodavanje</button>
    </form>
</body>
</html>
