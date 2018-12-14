<?php
    session_start();
    require_once ('config/connect.php');
    if(isset($_POST['submit'])){
        
    
        header('Location: index.php');
    }
    

