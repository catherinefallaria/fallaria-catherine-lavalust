<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6a1b9a, #ec407a);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .form-box {
            width: 500px;
            background: #ffffff;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: #6a1b9a;
            margin-top: 0;
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            color: #555;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            border: 1px solid #ddd;
            border-radius: 9px;
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
            margin-top: 10px;
        }

        button,
        .back-btn {
            flex: 1;
            padding: 13px;
            border-radius: 9px;
            font-size: 15px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
        }

        button {
            background: linear-gradient(90deg, #6a1b9a, #ec407a);
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.9;
        }

        .back-btn {
            background: #f3e5f5;
            color: #6a1b9a;
        }

        .back-btn:hover {
            background: #e1bee7;
        }
    </style>
</head>

<body>

<div class="form-box">

    <h1>Add Product</h1>

    <form action="<?= site_url('products/store') ?>" method="POST">

        <label>Product Name</label>
        <input
            type="text"
            name="product_name"
            placeholder="Enter product name"
            required
        >

        <label>Description</label>
        <textarea
            name="description"
            placeholder="Enter product description"
        ></textarea>

        <label>Price</label>
        <input
            type="number"
            name="price"
            step="0.01"
            placeholder="Enter price"
            required
        >

        <label>Quantity</label>
        <input
            type="number"
            name="quantity"
            placeholder="Enter quantity"
            required
        >

        <div class="buttons">

            <a href="<?= site_url('products') ?>" class="back-btn">
                Back
            </a>

            <button type="submit">
                Save Product
            </button>

        </div>

    </form>

</div>

</body>
</html>