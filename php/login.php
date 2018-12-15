<?php

session_start();
require_once ('connect.php');
if (isset($_POST['submit'])) {
    $username = $_POST['uname'];
    $password = $_POST['pword'];

    $sql = "SELECT paciensek.* "
            . "FROM paciensek, users "
            . "WHERE users.pac_id=paciensek.id "
            . "AND users.username='$username' "
            . "AND users.password='$password' ";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        //Sikeresen bejelentkezés
        $row = $result->fetch_row();
        $_SESSION['usern'] = $row[1] . " " . $row[2];
    } else {
        //Sikertelen bejelentkezés
        $_SESSION['error'] = 'Helytelen felhasználónév vagy jelszó!';
    }
    header('location: ../index.php');
}
   

