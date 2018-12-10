<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>FORendelő Bejelentkezés</title>
          <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <form class="container">
            <img src="FOR_img.bmp" alt="FORendelo">
            <p>
                Üdvözöljük rendelőnk honlapján, a belépés után lehetősége nyílik megtekinte kórtörténetét, az előre egyeztetett időpontjait, illetve időpontot kérhet fogorvosától
            </p>
        <p id="bejel">Bejelentekzés</p>
        
            Felhasznalonév:
            <input type="text" id="uname "name="uname" placeholder="felhasználonév" required>
            <br>
            Jelszó:
            <input type="password" id="pword" name="pword" placeholder="jelszó" required>
            <br>
            <button type="submit" id="submit" name="Belépés">Belépés</button>
        </form>
        <?php
        // put your code here
        ?>
    </body>
    <footer>
        <?php
                echo "Ma ".date("Y.m.d")." van.";
        ?>
    </footer>
</html>
