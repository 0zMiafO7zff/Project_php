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

        $status_id = $_GET['status_id'];
        // echo $id;
        $qEmp = "SELECT * FROM tbl_status WHERE status_id=$status_id";
        $result = mysqli_query($con, $qEmp) or die ("Error in sql : $qEmp". mysqli_error($qEmp));
        $row = mysqli_fetch_array($result);

        // print_r($row);
    ?>


    <br><br><br><br><br><br><br>
    <form action="status_update.php" method="post">

    
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

    <tr>
      <td height="70" colspan="2" align="center" bgcolor="#D6D5D6"><h3 class="modal-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        แก้ไขข้อมูล | จัดการข้อมูลสถานะ</h3></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;&nbsp;&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB"class="text-secondary">ID : </td>
      <td bgcolor="#EBEBEB">
      &nbsp;&nbsp;<input type="text" name="status_id" value="<?php echo $row['status_id'];?>" readonly>
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
  
    <tr>
      <td width="50%" align="right" bgcolor="#EBEBEB">สถานะ
        :</td>
      <td width="583" bgcolor="#EBEBEB">&nbsp;&nbsp;<input name="status_name" type="text" id="status_name" value="<?php echo $row['status_name'];?>" required ></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">
        <input type="button" value=" ยกเลิก " class="bg-danger"onclick="window.location='status.php' " /> 
        &nbsp;&nbsp;
        
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