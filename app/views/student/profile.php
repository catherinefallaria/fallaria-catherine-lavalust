<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f0ff;
            color: #333;
        }

        .header {
            background: linear-gradient(135deg, #6a1b9a, #8e44ad);
            color: white;
            padding: 35px 50px;
        }

        .header h1 {
            margin: 0;
            font-size: 32px;
        }

        .header p {
            margin: 8px 0 0;
            font-size: 15px;
            opacity: 0.9;
        }

        .container {
            width: 85%;
            max-width: 900px;
            margin: 35px auto;
        }

        .profile-card {
            background: white;
            border-radius: 18px;
            box-shadow: 0 8px 25px rgba(106, 27, 154, 0.15);
            overflow: hidden;
        }

        .profile-top {
            background: #faf7ff;
            padding: 30px;
            text-align: center;
            border-bottom: 1px solid #eadcff;
        }

        .avatar {
            width: 95px;
            height: 95px;
            margin: 0 auto 15px;
            border-radius: 50%;
            background: linear-gradient(135deg, #6a1b9a, #ab47bc);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
            font-weight: bold;
        }

        .profile-top h2 {
            margin: 5px 0;
            color: #5e1688;
        }

        .profile-top p {
            margin: 5px 0;
            color: #777;
        }

        .info {
            padding: 30px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .info-box {
            padding: 18px;
            border-radius: 12px;
            background: #faf7ff;
            border-left: 5px solid #7b1fa2;
        }

        .info-box small {
            display: block;
            color: #7b1fa2;
            font-weight: bold;
            margin-bottom: 6px;
        }

        .info-box strong {
            color: #333;
            font-size: 16px;
        }

        .navigation {
            text-align: center;
            padding: 0 30px 30px;
        }

        .navigation a {
            display: inline-block;
            text-decoration: none;
            margin: 5px;
            padding: 11px 20px;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .home {
            background: white;
            color: #6a1b9a;
            border: 2px solid #6a1b9a;
        }

        .home:hover {
            background: #6a1b9a;
            color: white;
        }

        .student {
            background: #6a1b9a;
            color: white;
        }

        .student:hover {
            background: #4a126b;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #777;
            font-size: 13px;
        }

        @media (max-width: 650px) {
            .info {
                grid-template-columns: 1fr;
            }

            .container {
                width: 92%;
            }

            .header {
                padding: 25px;
            }
        }
    </style>
</head>

<body>

<h1 style="color: purple; text-align: center;">
        PROFILE PAGE
    </h1>
    <div class="header">
        <h1>Student Profile</h1>
        <p>Student Information System</p>
    </div>

    <div class="container">

        <div class="profile-card">

            <div class="profile-top">

                <div class="avatar">
                    C
                </div>

                <h2><?= $student['name'] ?></h2>

                <p><?= $student['course'] ?></p>

            </div>

            <div class="info">

                <div class="info-box">
                    <small>Student ID</small>
                    <strong><?= $student['student_id'] ?></strong>
                </div>

                <div class="info-box">
                    <small>Full Name</small>
                    <strong><?= $student['name'] ?></strong>
                </div>

                <div class="info-box">
                    <small>Course</small>
                    <strong><?= $student['course'] ?></strong>
                </div>

                <div class="info-box">
                    <small>Year Level</small>
                    <strong><?= $student['year'] ?></strong>
                </div>

                <div class="info-box">
                    <small>Section</small>
                    <strong><?= $student['section'] ?></strong>
                </div>

                <div class="info-box">
                    <small>Email Address</small>
                    <strong><?= $student['email'] ?></strong>
                </div>

            </div>

            <div class="navigation">

                <a class="home" href="<?= site_url('student') ?>">
                    ← Student Information
                </a>

                <a class="student" href="<?= site_url('student/profile') ?>">
                    Student Profile
                </a>

            </div>

        </div>

    </div>

    <footer>
        © 2026 Student Information System
    </footer>

</body>
</html>