<?php require('config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include('nav.php') ?>
    <?php if (!isset($_SESSION['user'])) { ?>
        <div class="box">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
    <?php } else { ?>
        <div class="box">
            <h1>Welcome, <?php echo $_SESSION['user'] ?></h1>
            <a href="logout.php">Logout</a>
        </div>
    <?php } ?>
</body>

</html>