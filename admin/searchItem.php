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
    <link rel="stylesheet" href="../static/admin/searchItem.css">
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
    
        <div id="items-holder">
            <div id="items_title">
                <h1>Items</h1>
            </div>

            <div id="searchCategory">
                <div id="search-header">Search by Category:</div>
                <select name="ItemCategories" id="ItemCategories" onchange="searchCategory()">
                    <option value="" disabled selected hidden>--Select Category--</option>
                    <option value="">--Show all--</option>
                    <?php
                        include "../php/db_conn.php";
                        $categories = "SELECT DISTINCT category FROM item";
                        $res = mysqli_query($conn, $categories);

                        while ($rows = mysqli_fetch_assoc($res)) {
                    ?>
                            <option value="<?php echo $rows['category'] ?>"> <?php echo $rows['category'] ?> </option>
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

            <div class="items">
                <!-- Search items -->

                <script>
                    function searchCategory() {
                        const categories = ["Fruits", "Vegetables", "Meat", "Dairy", "TinCanned", "Others", ""]
                        var search = document.getElementById("ItemCategories");

                        for (let i=0; i < categories.length; i++) {
                            if (search.value === categories[i]) {
                                window.location.href="./searchItem.php?Category=" + search.value;
                            } 
                        }
                    }
                </script>

                <?php
                    include "../php/db_conn.php";

                    if (empty($_GET['Category'])) {
                        
                        $getAllItems = "SELECT img_path, name, price FROM item ORDER BY id LIMIT 12";
                        $getAllResults = mysqli_query($conn, $getAllItems);
                        if (mysqli_num_rows($getAllResults) > 0) {
                            while ($item = mysqli_fetch_assoc($getAllResults)) {
                ?>
                                <div class="item">
                                    <img src="<?php echo $item['img_path'] ?>" alt="" width="250px">
                                    <div class="item-text">
                                        <div class="text" id="Item"><?php echo $item['name'] ?></div>
                                        <div class="text" id="Price"><?php echo $item['price'] ?></div>
                                    </div>
                                </div> 
                <?php
                            }
                        }
                        else {
                            $Category = $_GET['Category'];
                            $searchQuery = "SELECT img_path, name, price FROM item WHERE category='$Category'";
                            $searchResults = mysqli_query($conn, $searchQuery);
                            if (mysqli_num_rows($searchResults) > 0) {
                                while ($data = mysqli_fetch_assoc($searchResults)) {
                ?>
                                    <div class="item">
                                        <img src="<?php echo $data['img_path'] ?>" alt="" width="250px">
                                        <div class="item-text">
                                            <div class="text" id="Item"><?php echo $data['name'] ?></div>
                                            <div class="text" id="Price"><?php echo $data['price'] ?></div>
                                        </div>
                                    </div>
                        <?php
                                }
                            }
                            else {
                                echo "No records found";
                            }
                        }
                    }
            ?>
            </div>
        </div> 
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

