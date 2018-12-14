<?php
session_start();
if (isset($_POST['submit'])) {

    $host = '127.0.0.1';
    $susername = 'root';
    $spassword = '';
    $db = 'forendelo';
    $port = '3306';

    $conn = new mysqli($host, $susername, $spassword, $db, $port);

    if ($conn ===FALSE) {
        die("Hiba a csatlakozásnál ");
    }
    if (!$conn ->set_charset("utf8")){
    echo "A karakterkódolást nem sikerült beállítani!";
    }
    
                    $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT paciensek.* "
                    . "FROM paciensek, users "
                    . "WHERE users.pac_id=paciensek.id "
                    . "AND users.username='$username' "
                    . "AND users.password='$password' ";
        
        $result = mysqli_query($conn, $sql);
                    if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
                }
            $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            
            if($count==1){
                $_SESSION['login_user']=$username;
                echo "<table >"
                        ."<tr>"
                            ."<th>Név</th>"
                            ."<th>Keresztnév</th>"
                            ."<th>Születési év</th>"
                            ."<th>hónap</th>"
                            ."<th>nap</th>"
                            ."<th>TB-szám</th>"
                        ."</tr>"
                        ."<tr>"
                            ."<td>".$row['v_nev']."</td>"
                            ."<td>".$row['k_nev']."</td>"
                            ."<td>".$row['szulev']."</td>"
                            ."<td>".$row['szulho']."</td>"
                            ."<td>".$row['szulnap']."</td>"
                            ."<td>".$row['tbszam']."</td>"
                        ."</tr>"
                    ."</table>";
   
            }else{
                echo 'nincs ilyen';
            }
            
        }
    
    ?>
    <!DOCTYPE html>
<html>
    <head>
        <title>KEttes</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        ?>
    </body>
</html>


