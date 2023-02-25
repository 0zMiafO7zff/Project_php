<!DOCTYPE html>
<html lang="en">
<?php $menu = "info";?>
<?php include("head.php"); ?> 

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php include("navbar.php"); ?> 
  <!-- /.navbar -->
  <?php include("menu.php"); ?> 


    <?php

        include('condb.php');

        $user_id = $_GET['user_id'];
        // echo $id;
        $qEmp = "SELECT * FROM tbl_login WHERE user_id=$user_id";
        $result = mysqli_query($con, $qEmp) or die ("Error in sql : $qEmp". mysqli_error($qEmp));
        $row = mysqli_fetch_array($result);

        // print_r($row);
    ?>


    <br><br><br>
    <form action="employee_update.php" method="post">

    
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

    <tr>
      <td height="70" colspan="2" align="center" bgcolor="#D6D5D6"><h3 class="modal-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        แก้ไขข้อมูล จัดการข้อมูลพนักงาน | USERNAME : <?php echo $row['username'];?></h3></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB"class="text-secondary">ID : </td>
      <td bgcolor="#EBEBEB">
      &nbsp;&nbsp;<input type="text" name="user_id" value="<?php echo $row['user_id'];?>" readonly>
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
  
    <tr>
      <td width="50%" align="right" bgcolor="#EBEBEB">ชื่อ 
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
      <td align="right" bgcolor="#EBEBEB" class="text-secondary">ระดับ
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
        <input type="button" value=" ยกเลิก "  class="bg-danger" onclick="window.location='employee.php' " /> 
        &nbsp;
        
        <button type="submit" class="bg-success">ยืนยันการแก้ไขข้อมูล</button>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
  </table>
    </form>
</body>
</html>