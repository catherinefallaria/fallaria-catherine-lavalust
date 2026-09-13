<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f0ff;
            padding: 30px;
        }

        .container {
            max-width: 600px;
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

        label {
            display: block;
            margin-top: 15px;
            color: #6a1b9a;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 7px;
            box-sizing: border-box;
        }

        button {
            margin-top: 20px;
            background: #8e44ad;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            background: #6a1b9a;
        }

        .back {
            display: inline-block;
            margin-left: 10px;
            color: #e91e63;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Add Product</h1>

    <form method="POST" action="<?= site_url('products/store'); ?>">

        <label>Product Name</label>
        <input type="text" name="product_name" required>

        <label>Description</label>
        <textarea name="description" rows="4"></textarea>

        <label>Price</label>
        <input type="number" name="price" step="0.01" min="0" required>

        <label>Quantity</label>
        <input type="number" name="quantity" min="0" required>

        <button type="submit">
            Save Product
        </button>

        <a href="<?= site_url('products'); ?>" class="back">
            Cancel
        </a>

    </form>

</div>

</body>
</html>