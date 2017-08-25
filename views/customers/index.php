<table>
    <thead>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
    </thead>

    <tbody>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= $customer->getId() ?></td>
                <td><?= $customer->getFirstName() ?></td>
                <td><?= $customer->getLastName() ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>