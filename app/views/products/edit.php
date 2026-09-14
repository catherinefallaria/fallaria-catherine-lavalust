<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>

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
            max-width: 600px;
            margin: 40px auto;
            background: #ffffff;
            padding: 35px;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        h1 {
            margin-top: 0;
            margin-bottom: 30px;
            color: #6a1b9a;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: Arial, sans-serif;
            font-size: 15px;
            outline: none;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        input:focus,
        textarea:focus {
            border-color: #ec407a;
            box-shadow: 0 0 5px rgba(236, 64, 122, 0.3);
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 5px;
        }

        .btn {
            flex: 1;
            padding: 12px;
            border-radius: 8px;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            font-size: 15px;
            cursor: pointer;
        }

        .back-btn {
            background: #f3e5f5;
            color: #6a1b9a;
            border: none;
        }

        .back-btn:hover {
            background: #e1bee7;
        }

        .update-btn {
            background: #ec407a;
            color: white;
            border: none;
        }

        .update-btn:hover {
            background: #d81b60;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Edit Product</h1>

    <form action="<?= site_url('products/update/' . $product['id']) ?>" method="POST">

        <label>Product Name</label>

        <input
            type="text"
            name="product_name"
            value="<?= $product['product_name'] ?>"
            required
        >

        <label>Description</label>

        <textarea name="description"><?= $product['description'] ?></textarea>

        <label>Price</label>

        <input
            type="number"
            name="price"
            step="0.01"
            value="<?= $product['price'] ?>"
            required
        >

        <label>Quantity</label>

        <input
            type="number"
            name="quantity"
            value="<?= $product['quantity'] ?>"
            required
        >

        <div class="buttons">

            <a
                href="<?= site_url('products') ?>"
                class="btn back-btn"
            >
                Back
            </a>

            <button
                type="submit"
                class="btn update-btn"
            >
                Update Product
            </button>

        </div>

    </form>

</div>

</body>
</html>