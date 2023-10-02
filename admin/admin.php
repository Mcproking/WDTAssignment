<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../static/body.css">
    <link rel="stylesheet" href="../static/header.css">
    <link rel="stylesheet" href="../static/footer.css">
    <?php
        session_start();
        if(!empty($_SESSION['loggedin'])){
            
        }else{
            header('Location:./');
        }
    ?>
</head>
<body>
    <?php
        include '../includes/header.php';
    ?>
    <div id="wrapper">
        hello there
    </div>
    <?php
        include '../includes/footer.html';
    ?>
</body>
</html>