<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Pregled tima</h1>
    <table border= "1">
        <thead>
        <tr>
            <th>ID</th>
            <th>naziv</th>
        </tr>
        </thead>
        <?php 
        require ('baza-parametri.php');

        $upit = "select * from tim";
        $rezultat = mysqli_query($bp, $upit);
        if (!$rezultat)
            die(mysqli_error($bp));

        
        while ($red = mysqli_fetch_object($rezultat)) {
            echo "<tr>\n";
            echo " <td>{$red->tim_id}</td>\n";
            echo " <td>{$red->naziv}</td>\n";
            echo " <td><a href= 'tim-izmena.php?tim_id={$red->tim_id}'>Izmena</a></td>\n";
            echo " <td><a href= 'tim-uklanjanje-db.php?tim_id={$red->tim_id}'>Uklanjanje</a></td>\n";
            echo "</tr>\n";
        }
        ?>
    </table>
    <hr />
    <a href="index.php">Pocetna</a>
    <a href="tim-dodavanje.php">Dodavanje novog tima</a>
</body>
</html>
