<div class="catelogies">
	<legend>Danh mục sản phẩm</legend>
	<div class='danhmuc'>
		<?php
		require_once './Model/catology.php';
		$cato=new catelogy();
		$results= $cato->getListName();
		foreach($results as $item){
			echo "<a href='index.php?page=danhmuc&id_danhmuc=".$item['id']."'><div class='item-dm'>
		<p><b>".$item['name']."</b> </p>
		</div> </a>";
		}

		?>
		
	</div>
</div>