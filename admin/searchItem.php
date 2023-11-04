<?php
    include "../php/db_conn.php";
    $categories = "SELECT DISTINCT ItemCategory FROM Item";
    $res = mysqli_query($conn, $categories);
?>

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
        Search by Category:
        <select name="ItemCategories" id="ItemCategories">
            <option value="" disabled selected hidden>--Select Category--</option>
            <?php
                while ($rows = mysqli_fetch_assoc($res)) {
            ?>
                    <option value="<?php echo $rows['ItemCategory'] ?>"> <?php echo $rows['ItemCategory'] ?> </option>
            <?php
                }
            ?>
                <!-- <option value="Fruits">Fruits</option>
                <option value="Vegetables">Vegetables</option>
                <option value="Meat">Meat</option>
                <option value="Dairy">Dairy</option>
                <option value="TinCanned">Tin Canned</option>
                <option value="Others">Others</option> -->
        </select>
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

<!-- Search items -->

<script>
    var fruits = "Fruits";
    var vegetables = "Vegetables";
    var meat = "Meat";
    var dairy = "Dairy";
    var tincanned = "Tin Canned";
    var others = "Others";
    var search = document.getElementById("ItemCategories");

    if (search.value.match(fruits)) {
        <?php>
        ?>
    }
</script>