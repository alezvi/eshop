<h1>Buy Order Details</h1>

<p>
  <span>Buy order minimum <?= Order::$BUY_MINIMUM ?></span>
  <span>Buy order limit <?= Order::$BUY_LIMIT ?></span>
</p>

<p>
  Buyer: #<?= $order->getCustomerId() ?>
</p>

<p>
  Total amount : <?= $order->getSubtotal() ?>
</p>

<h2>Included products</h2>

<?php require_once '../products/index.php' ?>
