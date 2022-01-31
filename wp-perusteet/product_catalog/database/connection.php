<?php 
    $host = 'localhost';
    $user = '';
    $passwd = '';
    $dbase = 'wppalko';

    $conn = mysqli_connect($host, $user, $passwd, $dbase); 
    mysqli_set_charset('utf8', $conn);

    if (!$conn) {
        die('Connection failed: [' . $conn->connect_error . ']');
    }
