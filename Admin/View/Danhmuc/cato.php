<div class="container">
  <h2> Quản lý danh mục</h2>
 <a href="index.php?page=danhmuc&action=add"> <button type="button" class="btn btn-primary fl-r mb-10">+Thêm Danh Mục Mới</button> </a>
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
        <th width="40%">Tên danh mục</th>      
        <th width="45%">Hành động</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($items as $item ){
          echo "<tr><td>".$item['id']."</td>";
          echo "<td>".$item['name']."</td>";
          echo"<td>"."<a href='?page=danhmuc&action=edit&id=".$item['id']."'><i class='fa fa-pencil'> Edit </i></a>&nbsp;&nbsp &nbsp;" ."</td></tr>";
      
        }
      ?>
    </tbody>
  </table>
</div>