<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $txtarea = $_POST['tarea'];
    $ptitle = $_POST['ptitle'];

        $regXML = simplexml_load_file('./users/post.xml');

        $regXML->addChild("post")->addChild("posttitle", $ptitle);
        $regXML->addChild("post")->addChild("postdescription", $txtarea);
}


if (file_put_contents('./users/post.xml', $regXML->asXML())) {

     echo "<p> Thanks for post</p>";
}



?>

<a href="index.php"> Home </a>
