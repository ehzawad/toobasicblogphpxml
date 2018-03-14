<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (file_exists('./users/registration.xml')) {
        $regXML = simplexml_load_file('./users/registration.xml');

        foreach ($regXML->children() as $user) {
            $uname = $user->username;
            $pword = $user->password;

            if ($username == $uname) {
                if ($password == $pword) {

                    // session
                    $_SESSION['ss_username'] = $username;
                    echo "You are authenticated!!";
                }
            }
        }
    }
}

?>

<html>
    <head>
    <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Paper Blog</title>
    </head>
    <body>
    <div>
        <form action="newhome.php"  method="POST">
            <h1>Login</h1>
            <div>
                <input type="text" placeholder="Username" id="username" name="username" />
            </div>
            <div>
                <input type="password" placeholder="Password" id="password" name="password" />
            </div>
            <div>
                <input type="submit" value="Log in" name="login" />
                <a href="registration.php">Register</a>
            </div>
        </form>
</body>
</html>
