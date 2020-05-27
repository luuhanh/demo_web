<div class="container">
	<h2> Thêm mới sản phẩm </h2>
	<div class='w-50'>
	<form action="index.php?page=sanpham" method="POST" enctype="multipart/form-data">
		
		
		<div class="form-group">
			<label for="">Tên sản phẩm</label>
			<input type="text" class="form-control" id="name" name="name" >
		</div>

		<div class="form-group">
			<label for="">Số lượng</label>
			<input type="number" class="form-control" id="count" name="count" >
		</div>

		<div class="form-group">
			<label for="">Giá</label>
			<input type="text" class="form-control" id="price" name="price" >
		</div>

		<div class="form-group">
			<label for="">Mô tả:</label>
			<textarea name="description" id="description" class="form-control" rows="3"></textarea>
		</div>

		<div class="form-group">
			<label for="">Danh mục sản phẩm</label>
			
			<select class="form-control" id="type" name="type" <?=$action=='view'? 'readonly':''?>>
				
				<?php
				foreach ($rows as $row){
					echo "<option value='".$row['id']."'";
					
					echo ">".$row['name']." </option>";
				}
				?>
				


			</select>
			
		</div>

		<div class="form-group">
			<label for="">Hình ảnh</label>
			<input type="file" name="img">
		</div>
	
		
	
		<button type="submit" name="addproduct" class="btn btn-success">Thêm mới</button>
		<button type="submit" class="btn btn-danger" name="goback">Go Back</button>
	</form>
	</div>
	
</div>