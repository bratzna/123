<?php
    $server = '192.168.55.32';
    $user = 'S2016202836_IJL8';
    $pass = 'S2016202836_IJL8';
    $db = 'S2016202836_IJL8';

    $bp = mysqli_connect($server, $user,$pass,$db);
        if(!$db) {
            die('Javila se greska pri povezivanju sa bazom');
        }
