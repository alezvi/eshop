<form method="POST" action="index.php?route=products/add">
    <div>
        <label>Name</label>
        <input type="text" name="name" value="<?= $_POST['name'] ?? '' ?>">
    </div>
    <div>
        <label>Brand</label>
        <input type="text" name="brand" required value="<?= $_POST['name'] ?? '' ?>">
    </div>
    <div>
        <label>Stock</label>
        <input type="number" name="stock" min="0" value="<?= $_POST['name'] ?? 0 ?>">
    </div>
    <div>
        <label>Price</label>
        <input type="number" name="price" min="0.0" max="99999.99" value="<?= $_POST['name'] ?? 0 ?>">
    </div>
    <div>
        <label>Picture</label>
        <input type="file" name="photo">
    </div>
    <div>
        <input type="submit" value="Save">
    </div>
</form>