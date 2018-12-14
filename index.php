<?php ?>
<html>


    <head>
        <meta charset="UTF-8">
        <title>FORendelő Bejelentkezés</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>    
        <div class="container" action="login.php" method = "post">
            <img id="head-img" src="FOR_img.bmp" alt="FORendelo">
            <nav>
                
                <ul>
                    <li><a href="index.php">Kezdőlap</a><li>
                    <li><a href="adatlap.php">Adatlap</a><li>
                    <li><a href="idopontok.php">Időpontok</a><li>
                    <li><a href="uzenetek.php">Üzenetek</a><li>
                </ul>
                <form action="connect.php" method="post">
                    Felhasználonév:
                    <input type="text" id="uname "name="uname" value="alma" placeholder="felhasználonév" required>
                    Jelszó:
                    <input type="password" id="pword" name="pword" value="alma" placeholder="jelszó" required>
                    <input id="submit" type ="submit" value="Bejelentkezés"/>
                </form>
            </nav>
            
            <p>
                Üdvözöljük rendelőnk honlapján, a belépés után lehetősége 
                nyílik megtekinte kórtörténetét, az előre egyeztetett időpontjait, 
                illetve időpontot kérhet fogorvosától
            </p>
        </div>
        <footer>
<?php
echo "Ma " . date("Y.m.d") . " van.";
?>
        </footer>
    </body>

</html>

