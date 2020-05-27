<div class="container">
  <h2> Quản lý sản phẩm</h2>
 <a href="index.php?page=sanpham&action=add"> <button type="button" class="btn btn-primary fl-r mb-10">+Thêm sản phẩm</button> </a>
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
        <th width="40%">Tên sản phẩm</th>      
        <th width="45%">Hành động</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($items as $item ){
          echo "<tr><td>".$item['id']."</td>";
          echo "<td>".$item['name']."</td>";
          echo"<td>"."<a href='?page=sanpham&action=view&id=".$item['id']."'><i class='fa fa-eye'> View</i></a> &nbsp;&nbsp;&nbsp;<a href='?page=sanpham&action=edit&id=".$item['id']."'><i class='fa fa-pencil'> Edit </i></a>&nbsp;&nbsp &nbsp;<a href='?page=sanpham&action=delete&id=".$item['id']."'><i class='fa fa-trash'> Delete </i></a>" ."</td></tr>";
      
        }
      ?>
    </tbody>
  </table>
</div>