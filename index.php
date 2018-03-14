

<html>
    <head>
        <title> Welcome to my blog </title>

    <style type="text/css">

     #navbar ul {
        margin: 0;
        padding: 5px;
        list-style-type: none;
        text-align: center;
        background-color: #000;
        }

    #navbar ul li {
        display: inline;
        }

    #navbar ul li a {
        text-decoration: none;
        padding: .2em 1em;
        color: #fff;
        background-color: #000;
        }


    </style>

    </head>
    <body>
            <div id="navbar">
                <ul>
                    <li><a href=""> Home </li>
                    <li><a href=""> Blog </li>
                    <li><a href="login.php"> Login </li>
                </ul>
            </div>

        <?php
        $regXML = simplexml_load_file('./users/post.xml');

        foreach ($regXML->children() as $post) {
            echo
            '
            <h2>'.$post->posttitle.'</h2>
            '.$post->postdescription.'
            <p>'.$post->user->username.'</p>
            <p>'.$post->timestamp.'</p>
            ';
            }
?>


        <footer>


        </footer>
    </body>
</html>
