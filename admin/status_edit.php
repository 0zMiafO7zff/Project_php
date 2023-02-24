<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <?php

        include('condb.php');

        $status_id = $_GET['status_id'];
        // echo $id;
        $qEmp = "SELECT * FROM tbl_status WHERE status_id=$status_id";
        $result = mysqli_query($con, $qEmp) or die ("Error in sql : $qEmp". mysqli_error($qEmp));
        $row = mysqli_fetch_array($result);

        // print_r($row);
    ?>

    <br><br><br><br><br><br><br><br>
    <form action="status_update.php" method="post">

    <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="40" colspan="2" align="center" bgcolor="#D6D5D6"><h1>ฟอร์มแก้ไขข้อมูล สถานะ</h1></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">ID : </td>
      <td bgcolor="#EBEBEB">
      &nbsp;&nbsp;<input type="text" name="status_id" value="<?php echo $row['status_id'];?>" readonly>
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    
    <tr>
      <td align="right" bgcolor="#EBEBEB">สถานะ
        <label> : </label></td>
      <td bgcolor="#EBEBEB">&nbsp;&nbsp;<input name="status_name" type="text" id="status_name" value="<?php echo $row['status_name'];?>" required></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;
        <input type="button" value=" ยกเลิก " onclick="window.location='worker.php' " /> <!-- ถ้าไม่แก้ไขให้กลับไปหน้าแสดงรายการ -->
        &nbsp;
        
        <button type="submit">ยืนยันการแก้ไขข้อมูล</button>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
  </table>














<!-- 
        id
        <input type="text" name="id" value="<?php echo $row['user_id'];?>" readonly>
        
        <br>
        u_name
        <input type="text" name="u_name" required value="<?php echo $row['u_name'];?>">
        <br>
        u_lastname
        <input type="text" name="u_lastname" required  value="<?php echo $row['u_lastname'];?>">
        <br>
        tel
        <input type="text" name="tel" required value="<?php echo $row['tel'];?>">
        <br>
        email
        <input type="text" name="email" required  value="<?php echo $row['email'];?>">
        <br>
        worker
        <input type="text" name="user_level" value="<?php echo $row['user_level'];?>" readonly>
        <br>
        <button type="submit">ยืนยันการแก้ไขข้อมูล</button> -->
    </form>
</body>
</html>