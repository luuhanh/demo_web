<div class="container">
	<h2> <?php
		if($action=='view'){
			echo "Xem chi tiết";
		} else {
			echo "Chỉnh sửa thông tin tài khoản";		}
	?> </h2>
	<div class='w-50'>
	<form action="index.php?page=taikhoan" method="POST" >
		
		<input type="hidden" class="form-control" id="id" name="id" value="<?=$id?>" readonly >
		<div class="form-group">
			<label for="">Fullname</label>
			<input type="text" class="form-control" id="fullname" name="fullname" value="<?=$fullname?>" <?=$action=='view'? 'readonly':''?>>
		</div>

		<div class="form-group">
			<label for="">Username</label>
			<input type="text" class="form-control" id="username" name="username" value="<?=$username?>" <?=$action=='view'? 'readonly':''?>>
		</div>

		<div class="form-group">
			<label for="">Password</label>
			<input type="password" class="form-control" id="password" name="password" value="<?=$password?>" <?=$action=='view'? 'readonly':''?>>
		</div>

		<div class="form-group">
			<label for="">Vai trò:</label>
			<input type="text" class="form-control" id="vaitro" name="vaitro" value="<?=$vaitro?>" <?=$action=='view'? 'readonly':''?>>
		</div>

		

		<div class="form-group">
			<label for="">Avatar </label>
			<input type="text" class="form-control" id="avatar" name="avatar" value="<?=$avatar?>" <?=$action=='view'? 'readonly':''?>>
		</div>
	
		
	 <?php
	  	if($action=='view'){
	  		echo "<a href='?page=taikhoan&action=edit&id=$id'> <button type='button' class='btn btn-success' >Edit</button> </a>";
	  	} else {
	  		echo "<button type='submit' class='btn btn-success' name='updateuser'>Cập nhật</button> ";
	  	}

	  ?>
		<button type="submit" class="btn btn-danger" name="goback">Go Back</button>
	</form>
	</div>
	
</div>