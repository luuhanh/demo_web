<div class="container">
	<h2> Chỉnh sửa tên danh mục </h2>
	<div class='w-50'>
	<form action="index.php?page=danhmuc" method="POST" >
		<div class="form-group">
			<label for="">Id</label>
			<input type="text" class="form-control" id="id" name="id" value="<?=$id?>" readonly >
		</div>
		<div class="form-group">
			<label for="">Tên sản phẩm</label>
			<input type="text" class="form-control" id="name" name="name" value="<?=$name?>" <?=$action=='view'? 'readonly':''?>>
		</div>

	
		
	 <?php
	  	if($action=='view'){
	  		echo "<a href='?page=danhmuc&action=edit&id=$id'> <button type='button' class='btn btn-success' >Edit</button> </a>";
	  	} else {
	  		echo "<button type='submit' class='btn btn-success' name='updatecato'>Cập nhật</button> ";
	  	}

	  ?>
		<button type="submit" class="btn btn-danger" name="goback">Go Back</button>
	</form>
	</div>
	
</div>