<!DOCTYPE html>
<html>
<head>
    <title>Catherine's Student Information</title>

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

        /* HEADER */
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
            opacity: 0.9;
        }

        /* MAIN */
        .container {
            width: 85%;
            max-width: 900px;
            margin: 35px auto;
        }

        .welcome {
            background: white;
            padding: 25px 30px;
            border-radius: 15px;
            margin-bottom: 25px;
            box-shadow: 0 6px 20px rgba(106, 27, 154, 0.12);
            border-left: 6px solid #7b1fa2;
        }

        .welcome h2 {
            margin: 0 0 8px;
            color: #5e1688;
        }

        .welcome p {
            margin: 0;
            color: #777;
        }

        /* STUDENT CARD */
        .student-card {
            background: white;
            border-radius: 18px;
            box-shadow: 0 8px 25px rgba(106, 27, 154, 0.15);
            overflow: hidden;
        }

        .card-header {
            background: #faf7ff;
            padding: 25px 30px;
            border-bottom: 1px solid #eadcff;
        }

        .card-header h2 {
            margin: 0;
            color: #5e1688;
        }

        .card-header p {
            margin: 7px 0 0;
            color: #777;
        }

        /* INFORMATION */
        .information {
            padding: 30px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .info-box {
            background: #faf7ff;
            padding: 20px;
            border-radius: 12px;
            border: 1px solid #eadcff;
            transition: 0.3s;
        }

        .info-box:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(106, 27, 154, 0.12);
            border-color: #b56bd0;
        }

        .info-box small {
            display: block;
            color: #7b1fa2;
            font-weight: bold;
            margin-bottom: 7px;
        }

        .info-box strong {
            font-size: 16px;
        }

        /* BUTTON */
        .button-area {
            text-align: center;
            padding: 0 30px 30px;
        }

        .profile-button {
            display: inline-block;
            background: #6a1b9a;
            color: white;
            text-decoration: none;
            padding: 13px 25px;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .profile-button:hover {
            background: #4a126b;
            transform: translateY(-2px);
        }

        /* NAVIGATION */
        .navigation {
            background: #6a1b9a;
            padding: 18px;
            text-align: center;
            margin-top: 25px;
            border-radius: 12px;
        }

        .navigation a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            margin: 0 12px;
        }

        .navigation a:hover {
            color: #e5cfff;
        }

        /* MESSAGE */
        .message {
            background: #eee3ff;
            color: #5e1688;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
        }

        /* FOOTER */
        footer {
            text-align: center;
            padding: 20px;
            color: #777;
            font-size: 13px;
        }

        /* RESPONSIVE */
        @media (max-width: 650px) {

            .information {
                grid-template-columns: 1fr;
            }

            .container {
                width: 92%;
            }

            .header {
                padding: 25px;
            }

            .header h1 {
                font-size: 26px;
            }

            .navigation a {
                display: block;
                margin: 8px;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <div class="header">

        <h1>Student Information</h1>

        <p>
            Student Information System
        </p>

    </div>


    <!-- MAIN CONTENT -->
    <div class="container">

        <?php if (isset($_SESSION['middleware_message'])): ?>

            <div class="message">
                <?= $_SESSION['middleware_message'] ?>
            </div>

            <?php unset($_SESSION['middleware_message']); ?>

        <?php endif; ?>


        <!-- WELCOME -->
        <div class="welcome">

            <h2>
                Welcome, <?= $student['name'] ?>! 💜
            </h2>

            <p>
                Here is your current student information.
            </p>

        </div>


        <!-- STUDENT INFORMATION CARD -->
        <div class="student-card">

            <div class="card-header">

                <h2>
                    Student Details
                </h2>

                <p>
                    Academic information
                </p>

            </div>


            <div class="information">

                <div class="info-box">

                    <small>STUDENT ID</small>

                    <strong>
                        <?= $student['student_id'] ?>
                    </strong>

                </div>


                <div class="info-box">

                    <small>FULL NAME</small>

                    <strong>
                        <?= $student['name'] ?>
                    </strong>

                </div>


                <div class="info-box">

                    <small>COURSE</small>

                    <strong>
                        <?= $student['course'] ?>
                    </strong>

                </div>


                <div class="info-box">

                    <small>YEAR LEVEL</small>

                    <strong>
                        <?= $student['year'] ?>
                    </strong>

                </div>


                <div class="info-box">

                    <small>SECTION</small>

                    <strong>
                        <?= $student['section'] ?>
                    </strong>

                </div>


                <div class="info-box">

                    <small>EMAIL ADDRESS</small>

                    <strong>
                        <?= $student['email'] ?>
                    </strong>

                </div>

            </div>


            <div class="button-area">

                <a
                    class="profile-button"
                    href="<?= site_url('student/profile') ?>"
                >
                    VIEW MY PROFILE →
                </a>

            </div>

        </div>


        <!-- NAVIGATION -->
        <div class="navigation">

            <a href="<?= site_url('student') ?>">
                Home
            </a>

            |

            <a href="<?= site_url('student/profile') ?>">
                Student Profile
            </a>

        </div>

    </div>


    <footer>
        © 2026 Catherine's Student Information System
    </footer>

</body>
</html>