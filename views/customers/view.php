<h1>Customers Info</h1>

<table>
    
    <thead>
        <tr>
            <td>#</td>
            <td>Full Name</td>
            <td>Actions</td>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= $customer->getId() ?></td>
                <td><?= $customer->getFirstName() . ' ' . $customer->getLastName() ?></td>
                <td></td>
                <td>
                    <a href="index.php?route=customers/{$customer->getId()}/edit">Edit</a>
                    <a href="index.php?route=customers/{$customer->getId()}/delete">Delete</a>
                    <a href="index.php?route=customers/{$customer->getId()}/orders">Ordenes de Compra</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    
</table>
