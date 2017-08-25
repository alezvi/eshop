<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>

    <table border="1">

        <thead>
        <tr>
            <td>#</td>
            <td>Picture</td>
            <td>Brand</td>
            <td>Name</td>
            <td>Price</td>
            <td>Stock</td>
            <td>Actions</td>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td>
                    <img src="<?= $product->getPhoto() ?>" width="25" height="25" />
                </td>
                <td><?= $product->getId() ?></td>
                <td><?= $product->getBrand() ?></td>
                <td><?= $product->getName() ?></td>
                <td><?= $product->getPrice() ?></td>
                <td><?= $product->getStock() ?></td>
                <td></td>
            </tr>
        <?php endforeach; ?>
        </tbody>

    </table>
</body>
</html>

