<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/assets/bootstrap.css">
  <title>Storefront</title>
</head>
<body>
  <h2>All Products</h2>

  <?php foreach($products as $product){ ?>
    <img width="50px" height="50px" src="/assets/pics/img (<?=$product['id']?>).jpg">
    <?php } ?>
</body>
</html>