<?php $this->load->view('partials/customers') ?>
<body>
  <h2><?= $category['name'] ?></h2>

  <?php foreach($products as $product){ ?>
    <img width="50px" height="50px" src="/assets/pics/img (<?=$product['id']?>).jpg">
    <?php } ?>
</body>
</html>