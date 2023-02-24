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

        $user_id = $_GET['user_id'];
        // echo $id;
        $qEmp = "SELECT * FROM tbl_login WHERE user_id=$user_id";
        $result = mysqli_query($con, $qEmp) or die ("Error in sql : $qEmp". mysqli_error($qEmp));
        $row = mysqli_fetch_array($result);

        // print_r($row);
    ?>

    <br><br><br><br><br><br><br><br>
    <form action="worker_update.php" method="post">

    <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="40" colspan="2" align="center" bgcolor="#D6D5D6"><h1>ฟอร์มแก้ไขข้อมูล พนักงาน</h1></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">ID : </td>
      <td bgcolor="#EBEBEB">
      &nbsp;&nbsp;<input type="text" name="id" value="<?php echo $row['user_id'];?>" readonly>
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">ชื่อ 
        :</td>
      <td width="583" bgcolor="#EBEBEB">&nbsp;&nbsp;<input name="u_name" type="text" id="u_name" value="<?php echo $row['u_name'];?>" required ></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">สกุล
        <label> :</label></td>
      <td bgcolor="#EBEBEB">&nbsp;&nbsp;<input name="u_lastname" type="text" id="u_lastname" value="<?php echo $row['u_lastname'];?>" required></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">เบอร์โทร
        <label> :</label></td>
      <td bgcolor="#EBEBEB">&nbsp;&nbsp;<input name="tel" type="text" id="tel" value="<?php echo $row['tel'];?>" required></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">อีเมลล์ : </td>
      <td bgcolor="#EBEBEB">&nbsp;&nbsp;<input name="email" type="email" id="email" value="<?php echo $row['email'];?>" required></td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">ระดับ
        <label> : </label></td>
      <td bgcolor="#EBEBEB">&nbsp;&nbsp;<input name="user_level" type="text" id="user_level" value="<?php echo $row['user_level'];?>" required readonly></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;
        <input type="button" value=" ยกเลิก " onclick="window.location='employee.php' " /> <!-- ถ้าไม่แก้ไขให้กลับไปหน้าแสดงรายการ -->
        &nbsp;
        
        <button type="submit">ยืนยันการแก้ไขข้อมูล</button>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
  </table>















    </form>
</body>
</html>