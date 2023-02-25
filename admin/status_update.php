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

    $status_id = $_POST['status_id'];
    $status_name = $_POST['status_name'];
    
    // UPDATE DATA

    $sql = "UPDATE tbl_status SET

    status_name = '$status_name'

    WHERE status_id = $status_id

    ";

    $result = mysqli_query($con, $sql) or die ("Error in sql : $sql".mysqli_error($sql));

    mysqli_close($con);

    // echo $sql;

    echo '<hr>';

    if($result){
        echo "<script> type='text/javascript'>";
        echo "alert('แก้ไขข้อมูลสำเร็จ');";
        echo "window.location = 'status.php';";
        echo "</script>";
    }else{
        echo "<script> type='text/javascript'>";
        echo "alert('แก้ไขข้อมูลผิดพลาด !!');";
        echo "window.location = 'status.php';";
        echo "</script>";
    }
?>

