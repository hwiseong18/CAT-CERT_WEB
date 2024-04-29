<?php 
    echo "GET :".$_GET['get']."<br>";
?>

<html>
    <head>
        <title>getpost</title>
    </head>
    <body>
        <form method="GET">
            <input type="text" name="get">
            <input type="submit" value="전송">
        </form>
    </body>
</html>

<?php 
    echo "POST :".$_POST['post']."<br>";
?>

<html>
    <head>
        <title>getpost</title>
    </head>
    <body>
        <form method="POST">
            <input type="text" name="post">
            <input type="submit" value="전송">
        </form>
    </body>
</html>