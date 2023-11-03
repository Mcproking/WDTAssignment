<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="../static/body.css">
    <link rel="stylesheet" href="../static/includes.css">
    <link rel="stylesheet" href="../static/admin/admin.css">
    <link rel="stylesheet" href="../static/admin/sidenav.css">

</head>
<body>
    <?php
    include "../includes/header.php";
    ?>

    <div class="wrapper">
        <div class="side-nav">
            <div class="nav-button" style="font-size:50px;" onclick="opennav();">&#9776;</div>
            <?php
            include "./sidenav.html";
            ?>
        </div>
    </div>

    <div id="items_title">
        <h1>Items</h1>
    </div>

    <div>
        <form action="" method="get" id="Search">
            Search by Username: <input type="text" name="searchSeller" id="searchSeller" placeholder="Enter Username">
        </form>
    </div>

    <?php
        include "../includes/footer.html";
    ?>

    <script>
        var openpx = 0;

        var elementItem = document.getElementById("nav");
        function opennav(){
            elementItem.classList.toggle("navopen");
            elementItem.classList.remove("navclose");
        }
        function closenav(){
            elementItem.classList.toggle("navclose");
            elementItem.classList.remove("navopen");
        }
    </script>
</body>
</html>

