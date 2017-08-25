<h1>Categories</h1>

<table>
    
    <thead>
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Total Items</td>
            <td>Actions</td>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach ($categories as $category): ?>
            <tr>
                <td><?= $category->getId() ?></td>
                <td><?= $category->getName() ?></td>
                <td></td>
                <td>
                    <a href="index.php?route=categories/{$category->getId()}/edit">Edit</a>
                    <a href="index.php?route=categories/{$category->getId()}/delete">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    
</table>
