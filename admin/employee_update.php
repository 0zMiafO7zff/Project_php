<?php 
  include("condb.php"); // เชื่อมต่อฐานข้อมูล
    
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';

    // echo '<hr>';

    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';

    // exit;

    $u_name = $_POST['u_name'];
    $u_lastname = $_POST['u_lastname'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $user_id = $_POST['user_id'];
    // UPDATE DATA

    $sql = "UPDATE tbl_login SET
    u_name = '$u_name',
    u_lastname = '$u_lastname',
    tel = '$tel' ,
    email = '$email'

    WHERE user_id = $user_id

    ";

    $result = mysqli_query($con, $sql) or die ("Error in sql : $sql".mysqli_error($sql));

    mysqli_close($con);

    // echo $sql;

    echo '<hr>';

    if($result){
        echo "<script> type='text/javascript'>";
        echo "alert('แก้ไขข้อมูลสำเร็จ');";
        echo "window.location = 'employee.php';";
        echo "</script>";
    }else{
        echo "<script> type='text/javascript'>";
        echo "alert('แก้ไขข้อมูลผิดพลาด !!');";
        echo "window.location = 'employee.php';";
        echo "</script>";
    }
?>

