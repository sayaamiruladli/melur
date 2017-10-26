<?php
    include_once 'dbConfig.php';
    require_once 'global_vars.php';
    
    $con = new mysqli(HOST, USER, PASSWORD, DBNAME);
    if ($con->connect_error) {
        die("Connection Fail: " . $con->connect_error);
    }

    if (isset($_POST['submit'])) {
        $namapengguna  = $_POST['namapengguna'];
		$katalaluan  = $_POST['katalaluan'];
		$sahkatalaluan  = $_POST['sahkatalaluan'];
        
    
        
        if ($_POST["katalaluan"] === $_POST["sahkatalaluan"]) {
       
	// tadi adli check zyra punya table salah
        $sql = "INSERT INTO user (nama_penuh,password) VALUES ('$namapengguna','$katalaluan')";
        //echo $sql;
        $result = $con->query($sql) or die(mysql_error());
        
       
          
        header("location:login.php");
        
            } else {
            
            echo    "Password tak sama !";
        }
        
        exit();
        

        
    }
    else
        $echo = "ERROR";
?>
