<?php
session_start();
include __DIR__ . '/hello_my_db.php';

    echo '<div>Kliento ištrinti negalima, nes jis dar turi pinigų...</div>
            <button><a href="http://localhost/_36/Bankas/index.php" style="text-decoration: none; color: black;"> Grįžti atgal</a></button>';