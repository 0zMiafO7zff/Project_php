<?php
    include("condb.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $u_name = $_POST['u_name'];
    $u_lastname = $_POST['u_lastname'];
    $user_level = $_POST['user_level'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    


    $sql = "INSERT INTO tbl_login (username, password, user_level, u_name, u_lastname, tel, email) VALUES ('$username', '$password', '$user_level','$u_name','$u_lastname','$tel', '$email')";

    $qUser = $con->query($sql);
    if($qUser){
        echo '<script language="javascript">';
        echo 'alert("Successfully Registered"); location.href="index.php"';
        echo '</script>';
    }else{
        echo "Error register please try again.";
    }

?>