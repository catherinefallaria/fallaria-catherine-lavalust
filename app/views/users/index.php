<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>

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
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 35px;
            border-radius: 18px;
            box-shadow: 0 8px 25px rgba(128, 0, 128, 0.15);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            color: #7b2cbf;
            font-size: 32px;
            margin-bottom: 8px;
        }

        .header p {
            color: #9d4edd;
            font-size: 15px;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 10px;
        }

        th {
            background: linear-gradient(90deg, #7b2cbf, #d63384);
            color: white;
            padding: 16px;
            text-align: left;
            font-size: 14px;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #f0d9f5;
            color: #4a4a4a;
            background: #fff;
        }

        tr:hover td {
            background: #fff0fa;
        }

        .id {
            color: #7b2cbf;
            font-weight: bold;
        }

        .username {
            color: #d63384;
            font-weight: bold;
        }

        .footer {
            margin-top: 25px;
            text-align: right;
            color: #9d4edd;
            font-size: 14px;
            font-weight: bold;
        }

        .badge {
            display: inline-block;
            background: #fce7f3;
            color: #c026d3;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="header">
            <h1>💜 Users List 🩷</h1>
            <p>Registered users from the database</p>
        </div>

        <div class="table-container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Username</th>
                </tr>

                <?php foreach ($users as $user): ?>
                <tr>
                    <td class="id"><?= $user['id'] ?></td>
                    <td><?= $user['firstname'] ?></td>
                    <td><?= $user['lastname'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td>
                        <span class="badge">
                            <?= $user['username'] ?>
                        </span>
                    </td>
                </tr>
                <?php endforeach; ?>

            </table>
        </div>

        <div class="footer">
            Total Users: <?= count($users) ?>
        </div>

    </div>

</body>
</html>