<!DOCTYPE html>
<html lang="en">
<?php $menu = "status";?>
<?php include("head.php"); ?> 
<?php
    include("condb.php"); // เชื่อมต่อฐานข้อมูล

  $user_id = $_GET['user_id'];
  // echo $id;
  $qEmp = "SELECT * FROM tbl_login WHERE user_id=$user_id";
  $result = mysqli_query($con, $qEmp) or die ("Error in sql : $qEmp". mysqli_error($qEmp));
  $row = mysqli_fetch_array($result);
?>
 
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php include("navbar.php"); ?> 
  <!-- /.navbar -->
  <?php include("menu.php"); ?> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </div>

  <div class="container">
    <div class="row mt-3">
      <h1>แก้ไขข้อมูลส่วนตัว</h1>
      <hr><br>
      <div class="col-md-4">
        
      </div>
      <div class="col-md-12 offset-md-1">
        <form action="info_update.php" method="post">
          <div class="mb-3 row">
            <label for="inputName" class="col-2 col-form-label">ไอดี</label>
            <div class="col-6">
            <input type="text" name="user_id" value="<?php echo $row['user_id'];?>" readonly>
            </div>
            
          </div>
          <div class="mb-3 row">
            <label for="inputName" class="col-2 col-form-label">ชื่อผู้เข้าใช้งาน</label>
            <div class="col-6">
            <input type="text" name="username" value="<?php echo $row['username'];?>" readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputName" class="col-2 col-form-label">ชื่อ</label>
            <div class="col-6">
            <input type="text" name="u_name" value="<?php echo $row['u_name'];?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputName" class="col-2 col-form-label">นามสกุล</label>
            <div class="col-6">
            <input type="text" name="u_lastname" value="<?php echo $row['u_lastname'];?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputName" class="col-2 col-form-label">เบอร์โทร</label>
            <div class="col-6">
            <input type="text" name="tel" value="<?php echo $row['tel'];?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputName" class="col-2 col-form-label">อีเมล</label>
            <div class="col-6">
            <input type="text" name="email" value="<?php echo $row['email'];?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputName" class="col-2 col-form-label">ระดับ</label>
            <div class="col-6">
            <input type="text" name="user_level" value="<?php echo $row['user_level'];?>" readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <div class="col-12">
            <tr>

                  <input type="button" value=" ยกเลิก " class="bg-danger"onclick="window.location='info.php' " /> 
                 &nbsp;&nbsp;
        
                 <button type="submit" class="bg-success">ยืนยันการแก้ไขข้อมูล</button>
           </tr>
        
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

  

</body>

</html>