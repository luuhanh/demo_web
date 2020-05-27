<div class="container">
	<h2> <?php
		if($action=='view'){
			echo "Xem chi tiết";
		} else {
			echo "Chỉnh sửa sản phẩm";		}
	?> </h2>
	<div class='w-50'>
	<form action="index.php?page=sanpham" method="POST" >
		
		<input type="hidden" class="form-control" id="id" name="id" value="<?=$id?>" readonly >
		<div class="form-group">
			<label for="">Tên sản phẩm</label>
			<input type="text" class="form-control" id="name" name="name" value="<?=$name?>" <?=$action=='view'? 'readonly':''?>>
		</div>

		<div class="form-group">
			<label for="">Số lượng</label>
			<input type="number" class="form-control" id="count" name="count" value="<?=$count?>" <?=$action=='view'? 'readonly':''?>>
		</div>

		<div class="form-group">
			<label for="">Giá</label>
			<input type="text" class="form-control" id="price" name="price" value="<?=$price?>" <?=$action=='view'? 'readonly':''?>>
		</div>

		<div class="form-group">
			<label for="">Mô tả:</label>
			<textarea name="description" id="description" class="form-control" rows="3" <?=$action=='view'? 'readonly':''?>><?=$description?></textarea>
		</div>

		<div class="form-group">
			<label for="">Danh mục sản phẩm</label>
			
			<select class="form-control" id="type" name="type" value="<?=$id_type?>" <?=$action=='view'? 'readonly':''?>>
				<?php
				foreach ($rows as $row){
					echo "<option value='".$row['id']."'";
						if($id_type == $row['id'] ){
							echo "selected='selected'";
						}
					echo ">".$row['name']." </option>";
				}
				?>
				


			</select>
			
		</div>

		<div class="form-group">
			<label for="">Hình ảnh</label>
			<input type="text" class="form-control" id="img" name="img" value="<?=$img?>" <?=$action=='view'? 'readonly':''?>>
		</div>
	
		
	 <?php
	  	if($action=='view'){
	  		echo "<a href='?page=sanpham&action=edit&id=$id'> <button type='button' class='btn btn-success' >Edit</button> </a>";
	  	} else {
	  		echo "<button type='submit' class='btn btn-success' name='updateproduct'>Cập nhật</button> ";
	  	}

	  ?>
		<button type="submit" class="btn btn-danger" name="goback">Go Back</button>
	</form>
	</div>
	
</div>