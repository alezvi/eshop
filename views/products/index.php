<h1>Products</h1>

<table>
    
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
                    <img src="<?= $product->getPhoto() ?>" width="100" height="100" />
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
