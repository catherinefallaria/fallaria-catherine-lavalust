<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f3e8ff, #ffe4f1);
            min-height: 100vh;
            padding: 50px 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 35px;
            border-radius: 18px;
            box-shadow: 0 8px 25px rgba(128, 0, 128, 0.15);
        }

        h1 {
            text-align: center;
            color: #7b2cbf;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 6px;
            color: #6a1b9a;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #d8b4e2;
            border-radius: 8px;
            font-size: 14px;
        }

        button {
            width: 100%;
            margin-top: 25px;
            padding: 13px;
            border: none;
            border-radius: 8px;
            background: linear-gradient(90deg, #7b2cbf, #d63384);
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.9;
        }

        .back-btn {
    display: block;
    width: 100%;
    margin-top: 12px;
    padding: 12px;
    text-align: center;
    background: #f3e8ff;
    color: #7b2cbf;
    text-decoration: none;
    border-radius: 8px;
    font-weight: bold;
}

.back-btn:hover {
    background: #ead5ff;
}
    </style>
</head>

<body>

<div class="container">

    <h1>💜 Add New User 🩷</h1>

    <form action="<?= site_url('users/store') ?>" method="POST">

        <label>First Name</label>
        <input type="text" name="firstname" required>

        <label>Last Name</label>
        <input type="text" name="lastname" required>

        <label>Course</label>
        <input type="text" name="course" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Username</label>
        <input type="text" name="username" required>

        <button type="submit">Add User</button>

    </form>

    <a class="back-btn" href="<?= site_url('users') ?>">
    ← Back to Users
</a>

</div>

</body>
</html>