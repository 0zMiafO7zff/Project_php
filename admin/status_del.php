<?php 
  include("condb.php"); // เชื่อมต่อฐานข้อมูล
    
    // echo '<pre>';
    // print_r($_GET);
    // echo '</pre>';

    // echo '<hr>';

    // echo '<pre>';
    // var_dump($_GET);
    // echo '</pre>';

    // exit;

    $status_id = $_GET['status_id'];
    // DELETE DATA

    $sql = "DELETE FROM tbl_status WHERE status_id = $status_id";

    $result = mysqli_query($con, $sql) or die ("Error in sql : $sql".mysqli_error($sql));

    mysqli_close($con);

    // echo $sql;

    // echo '<hr>';

    if($result){
        echo "<script> type='text/javascript'>";
        echo "alert('ทำการลบข้อมูลเรียบร้อยแล้ว');";
        echo "window.location = 'status.php';";
        echo "</script>";
    }else{
        echo "<script> type='text/javascript'>";
        echo "alert('แก้ไขข้อมูลผิดพลาด !!');";
        echo "window.location = 'status.php';";
        echo "</script>";
    }
?>

