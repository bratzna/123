<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pregled igraca</title>
</head>
<body>
    <h1>Pregled igraca</h1>
    <table border= "1">
        <thead>
        <tr>
            <th>ID</th>
            <th>ime</th>
            <th>tim_id</th>
        </tr>
        </thead>
        <?php 
        require ('baza-parametri.php');

        $upit = "select * from igraca";
        $rezultat = mysqli_query($bp, $upit);
        if (!$rezultat)
            die(mysqli_error($bp));

        
        while ($red = mysqli_fetch_object($rezultat)) {
            echo "<tr>\n";
            echo " <td>{$red->igraca_id}</td>\n";
            echo " <td>{$red->ime}</td>\n";
            echo " <td>{$red->tim_id}</td>\n";
            echo " <td><a href= 'igraca-izmena.php?igraca_id={$red->igraca_id}'>Izmena</a></td>\n";
            echo " <td><a href= 'igraca-uklanjanje-db.php?igraca_id={$red->igraca_id}'>Uklanjanje</a></td>\n";
            echo "</tr>\n";
        }
        ?>
    </table>
    <hr />
    <a href="index.php">Pocetna</a>
    <a href="igraca-dodavanje.php">Dodavanje nove igrace</a>
</body>
</html>
