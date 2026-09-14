<!DOCTYPE html>
<html>
<head>
    <title>Products</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 40px;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6a1b9a, #ec407a);
            min-height: 100vh;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        h1 {
            margin: 0;
            color: #6a1b9a;
        }

        .buttons {
            display: flex;
            gap: 10px;
        }

        .btn {
            text-decoration: none;
            color: white;
            padding: 11px 18px;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .add-btn {
            background: #ec407a;
        }

        .add-btn:hover {
            background: #d81b60;
        }

        .logout-btn {
            background: #6a1b9a;
        }

        .logout-btn:hover {
            background: #4a148c;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 10px;
        }

        th {
            background: #6a1b9a;
            color: white;
            padding: 14px;
            text-align: left;
        }

        td {
            padding: 13px;
            border-bottom: 1px solid #eee;
        }

        tr:hover {
            background: #fce4ec;
        }

        .edit-btn {
            color: #6a1b9a;
            text-decoration: none;
            font-weight: bold;
            margin-right: 10px;
        }

        .delete-btn {
            color: #ec407a;
            text-decoration: none;
            font-weight: bold;
        }

        .edit-btn:hover,
        .delete-btn:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">

        <h1>Products</h1>

        <div class="buttons">
            <a href="<?= site_url('products/create') ?>" class="btn add-btn">
                Add Product
            </a>

            <a href="<?= site_url('logout') ?>" class="btn logout-btn">
                Logout
            </a>
        </div>

    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>

        <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product['id'] ?></td>

            <td><?= $product['product_name'] ?></td>

            <td><?= $product['description'] ?></td>

            <td><?= $product['price'] ?></td>

            <td><?= $product['quantity'] ?></td>

            <td><?= isset($product['created_at']) ? $product['created_at'] : '' ?></td>

            <td>
                <a
                    href="<?= site_url('products/edit/' . $product['id']) ?>"
                    class="edit-btn"
                >
                    Edit
                </a>

                <a
                    href="<?= site_url('products/delete/' . $product['id']) ?>"
                    class="delete-btn"
                    onclick="return confirm('Are you sure you want to delete this product?');"
                >
                    Delete
                </a>
            </td>
        </tr>
        <?php endforeach; ?>

    </table>

</div>

</body>
</html>