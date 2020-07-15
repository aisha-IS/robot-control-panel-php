<?php
    $dbh = new mysqli("localhost", 'root', '', 'root');

    if ($dbh->connect_error) {
        die("Connection failed: " . $dbh->connect_error);
    }
?>
