<?php

$error = "";
$sameUserName = "";



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // same username check


    if (file_exists('./users/registration.xml')) {



        $regXML = simplexml_load_file('./users/registration.xml');



        $user = $regXML->addChild('user');
        if ($username !== "" && $password !== "" && $email !== "" ) {
            $user->addChild('username', $username);
            $user->addChild('password', $password);
            $user->addChild('email', $email);
        }


        if (file_put_contents('./users/registration.xml', $regXML->asXML())) {
            echo "You are registered !!";

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
        <form action="registration.php"  method="post">
            <h1>Register</h1>
            <div>
                <input type="text" placeholder="Username" id="username" name="username" />
            </div>
            <div>
                <input type="password" placeholder="Password" id="password" name="password" />
            </div>
            <div>
                <input type="text" placeholder="Email" id="email" name="email" />
            </div>
            <div>
                <input type="submit" value="Register" name="register" />
            </div>
        </form>
</body>
</html>
