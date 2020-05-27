<div class="container">
  <h2> Quản lý tài khoản</h2>
 <a href="index.php?page=taikhoan&action=add"> <button type="button" class="btn btn-primary fl-r mb-10">+Thêm tài khoản mới</button> </a>
 <?php 
    if ((isset($msg))&&(isset($success))){
      if($success==true){
        echo "<h5 class='alert alert-success w-50'>".$msg."</h5>";
      } else {
        echo "<h5 class='alert alert-danger w-50'>".$msg."</h5>";
    }
  }
     ?>

  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th width='5%'>Id</th>
        <th width="30%">Username</th>      
        <th width="30%">Vai trò</th>      
        <th width="35%">Hành động</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($items as $item ){
          echo "<tr><td>".$item['id']."</td>";
          echo "<td>".$item['username']."</td>";
          echo "<td>".$item['vaitro']."</td>";
          echo"<td>"."<a href='?page=taikhoan&action=view&id=".$item['id']."'><i class='fa fa-eye'> View</i></a> &nbsp;&nbsp;&nbsp;<a href='?page=taikhoan&action=edit&id=".$item['id']."'><i class='fa fa-pencil'> Edit </i></a>&nbsp;&nbsp &nbsp;<a href='?page=taikhoan&action=delete&id=".$item['id']."'><i class='fa fa-trash'> Delete </i></a>" ."</td></tr>";
      
        }
      ?>
    </tbody>
  </table>
</div>