<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>

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

        .back {
            display: block;
            text-align: center;
            margin-top: 18px;
            color: #d63384;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>💜 Edit User 🩷</h1>

    <form action="<?= site_url('users/update/' . $user['id']) ?>" method="POST">

        <label>First Name</label>
        <input type="text" name="firstname"
               value="<?= $user['firstname'] ?>" required>

        <label>Last Name</label>
        <input type="text" name="lastname"
               value="<?= $user['lastname'] ?>" required>

        <label>Course</label>
        <input type="text" name="course"
               value="<?= $user['course'] ?? '' ?>" required>

        <label>Email</label>
        <input type="email" name="email"
               value="<?= $user['email'] ?>" required>

        <label>Username</label>
        <input type="text" name="username"
               value="<?= $user['username'] ?>" required>

        <button type="submit">Update User</button>

    </form>

    <a class="back" href="<?= site_url('users') ?>">← Back to Users</a>

</div>

</body>
</html>