<?php

include_once('core.inc.php');
include_once('processes.php');

if (!isset($db) || !$db) {
    die('Database connection failed: ' . mysqli_connect_error());
}

$message = '';


if (isset($_POST['submit'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!empty($username) && !empty($password)) {
        $password_hash = md5($password);

        // NOTE: This keeps the original project style (raw SQL). For production, use prepared statements.
        $usernameEsc = mysqli_real_escape_string($db, $username);
        $passwordEsc = mysqli_real_escape_string($db, $password_hash);

        $query = "SELECT `id` FROM login WHERE `username` = '$usernameEsc' AND `password` = '$passwordEsc'";
        $exc = mysqli_query($db, $query);

        if (!$exc) {
            $message = 'Database error: ' . mysqli_error($db);
        } else if (mysqli_num_rows($exc) == 0) {
            $message = 'Invalid username or password combination';
        } else {
            $userid = mysqli_result($exc, 0, 'id');
            $_SESSION['userid'] = $userid;
            header('Location: loggedin.php');
            exit;
        }
    } else {
        $message = 'Username and password are required';
    }
}

?>

<!Doctype HTML>
<HTML>

<head>
    <title> LOG_IN </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link type="text/css" href="css1.css" rel="stylesheet" />

</head>

<body>

    <form class="form-horizontal" action="" method="post" id="log_in">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-5 col-md-3">
                    <div class="form-login">
                        <h4>Welcome back.</h4>

                        <?php if (!empty($message)) { ?>
                            <div style="color:red; margin-bottom:10px;"><?= htmlspecialchars($message) ?></div>
                        <?php } ?>

                        <input type="text" id="userName" class="form-control input-sm chat-input" placeholder="username" name="username" />
                        </br>
                        <input type="password" id="userPassword" class="form-control input-sm chat-input" placeholder="password" name="password" />
                        </br>
                        <div class="wrapper">
                            <span class="group-btn">
                                <input type="submit" id="submit" name="submit" value="Log In" class="btn btn-primary btn-md">
                                <a href="create_account.php" class="btn btn-primary btn-md">create account<i class="fa fa-sign-in"></i></a>
                            </span>

                        </div>

                    </div>
                </div>
            </div>


    </form>


</body>

</HTML>