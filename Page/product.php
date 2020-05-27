<div class="content">
	<legend>Tất cả sản phẩm</legend>
	<div class="row">
		 <?php
        foreach ($items as $item ){
          echo "<div class='col-xs-12 col-sm-6 col-md-4 col-lg-3'>
			<div class='product'><img src='./Public/Images/Products/".$item['img']."'>";
          echo "<h4>".$item['name']."</h4>";
          echo "<b>Giá: </b>". $item['price']."VND <br>";
          echo"<div class='button'>
				<button type='button' class='btn btn-primary'> <i class='fa fa-shopping-cart'> </i> Thêm vào giỏ</button>
				<a href='index.php?page=chitiet&id=".$item['id']."'><button type='button' class='btn btn-danger'>Xem</button> </a>
				</div>
				
			</div>
			
		</div>";
      
        }
      ?>
		
		
	</div>

</div>