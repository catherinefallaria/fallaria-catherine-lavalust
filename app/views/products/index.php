<!DOCTYPE html>
<html>
<head>
    <title>Products</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f0ff;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        h1 {
            color: #6a1b9a;
            text-align: center;
        }

        .add-btn {
            display: inline-block;
            background: #8e44ad;
            color: white;
            padding: 10px 18px;
            text-decoration: none;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .add-btn:hover {
            background: #6a1b9a;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #8e44ad;
            color: white;
            padding: 12px;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        tr:hover {
            background: #fce4ec;
        }

        .edit {
            background: #e91e63;
            color: white;
            padding: 7px 12px;
            text-decoration: none;
            border-radius: 6px;
        }

        .delete {
            background: #c62828;
            color: white;
            padding: 7px 12px;
            text-decoration: none;
            border-radius: 6px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Product Management</h1>

    <a href="<?= site_url('products/create'); ?>" class="add-btn">
        + Add Product
    </a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

            <?php if (!empty($products)): ?>

                <?php foreach ($products as $product): ?>

                    <tr>
                        <td><?= $product['id']; ?></td>

                        <td><?= $product['product_name']; ?></td>

                        <td><?= $product['description']; ?></td>

                        <td>₱<?= number_format($product['price'], 2); ?></td>

                        <td><?= $product['quantity']; ?></td>

                        <td>
                            <a href="<?= site_url('products/edit/' . $product['id']); ?>" class="edit">
                                Edit
                            </a>

                            <a href="<?= site_url('products/delete/' . $product['id']); ?>"
                               class="delete"
                               onclick="return confirm('Are you sure you want to delete this product?');">
                                Delete
                            </a>
                        </td>
                    </tr>

                <?php endforeach; ?>

            <?php else: ?>

                <tr>
                    <td colspan="6">No products found.</td>
                </tr>

            <?php endif; ?>

        </tbody>
    </table>

</div>

</body>
</html>