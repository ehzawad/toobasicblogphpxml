<?php
session_start();
?>
<html>
    <head>
        <title> H  </title>
    </head>
    <body>
        <h1> Post your thoughts here </h1>
       <h2> <?=  $_SESSION["ss_username"]; ?></h2>
        <div>
        <form method="POST" action="thank.php">
            Post title: <input type="text" id="ptitle" name="ptitle"><br>
            <textarea id="tarea" name="tarea" placeholder="text area" rows="10" cols="50"> </textarea>
            <button type="submit">Post</button>
        </form>
        </div>
    </body>
</html>
