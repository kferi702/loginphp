<?php
session_start();
    $head= file_get_contents('html/head.html');
if (isset($_SESSION['usern'])) {
    $nev=$_SESSION['usern'];
    $menu= file_get_contents('html/nav_logout.html');
} else {
    $menu= file_get_contents('html/nav_login.html');
}
?>
<html>

    <?php
    echo $head;
    ?>
    <body>    
        <div class="container">
           
                <?php
                echo $menu;
                ?>


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

