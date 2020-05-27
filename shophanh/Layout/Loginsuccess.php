<div id='form-dn'>
	<div class='avatar'>
	<img src="./Public/Images/User/<?=$_SESSION['avatar']?>">
	<h3><b><?=$_SESSION['user']?></b> </h3>
	<a href='#'> Xem chi tiết </a> <br> <a href='index.php?page=dangxuat'>Đăng xuất <a>
		<br>
		<?php
			if($_SESSION['vaitro']==1){
				echo "<a href='/thucphamsach/admin'> Quản lý Admin</a> ";
			} 
		?>
	</div>
</div>