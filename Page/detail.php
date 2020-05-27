<div class='content'>
	<legend>Chi tiết sản phẩm</legend>
	<div class="row detail">	
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<?php 
		echo "<img src='./Public/Images/Products/".$result['img']."'>";
		?>
		
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<br> <br> 
	<?php
	
	echo "<b>Tên sản phẩm : </b>".$result['name']."<br>";
	echo "<b>Giá : </b>".$result['price']." VND<br>";
	echo "<b>Số lượng : </b>".$result['count']." Kg<br>";
	echo "<b>Mô tả : </b>".$result['description']."<br>";

	?>
	<br>
	<button type="button" class="btn btn-success"><i class="fa fa-shopping-cart"> </i> Add to Cart</button>
	</div>
	</div>
</div>