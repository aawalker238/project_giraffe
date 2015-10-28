<?php $this->load->view('partials/customers') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Single Product View</title>
</head>
<body>
	<div class="row">
  		<div class="col-md-4 col-md-offset-1">
			<p><a href="/">&#10094;&#10094;&#10094; Go Back</a></p>
		</div>
	</div>	
	<div class="row">
  		<div class="col-md-4 col-md-offset-1">
			<h1><?= $oneProduct["name"] ?></h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2 col-md-offset-1">	
			<!-- BIG IMAGE -->
		    <img width="200px" height="200px" src="/assets/pics/img (<?= $oneProduct['id'] ?>).jpg">
		</div>
		<!-- DESCRIPTION -->
		<div class="col-md-4">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, deleniti asperiores doloribus atque ea mollitia explicabo consectetur veniam, libero ex error. Autem adipisci, reiciendis quod dolores excepturi illum voluptatibus laborum!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa alias error modi iusto laboriosam officiis necessitatibus distinctio a minima! Quia non natus commodi iure accusamus aliquid, earum molestias quisquam recusandae.</p>
		</div>
	</div>
	
	<div class="row">
  		<div class="col-md-1 col-md-offset-2">
			<h3><i class="fa fa-usd"></i><?= $oneProduct['price'] ?></h3>	
		</div>
  		<div class="col-md-1 col-md-offset-3">
			<!-- PURCHASE -->
			<a href="/shopping/buy/<?= $oneProduct['id'] ?>" class="btn btn-primary">Add to Cart <i class="fa fa-cart-plus"></i></a>	
		</div>
	</div>

<!-- BOTTOM THUMBNAIL SLIDER - SIMILAR ITEMS (SORT BY CATEGORY, LIMIT BY 6)-->
	<h3>Similar Items</h3>
	<?php foreach($products as $products){ ?>
    <?= $product['name'] ?>
    <a href="/mains/oneProduct/<?= $product['id']?>"><img width="150px" height="150px" src="/assets/pics/img (<?=$product['id']?>).jpg"></a> 
    <?php } ?>
	
</body>
</html>