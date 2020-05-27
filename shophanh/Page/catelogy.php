<div class='content'>
	<legend><?=$name_cato?></legend>
	<div class="row">
		 <?php
        foreach ($items as $item ){
          echo "<div class='col-xs-12 col-sm-6 col-md-4 col-lg-3'>
			<div class='product'><img src='./Public/Images/Products/".$item['img']."'>";
          echo "<h4>".$item['name']."</h4>";
          echo "<b>Giá: </b>". $item['price']."VND <br>";
          echo"<div class='button'>
				<button type='button' class='btn btn-success'> <i class='fa fa-shopping-cart'> </i> Add To Cart</button>
				<a href='index.php?page=chitiet&id=".$item['id']."'><button type='button' class='btn btn-warning'>View </button> </a>
				</div>
				
			</div>
			
		</div>";
      
        }
      ?>
		
		
	</div>
</div>