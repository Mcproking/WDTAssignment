<?php
    include "../php/db_conn.php";
    $categories = "SELECT DISTINCT category FROM item";
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
                <select name="ItemCategories" id="ItemCategories" onchange="selectCategory()">
                    <option value="" disabled selected hidden>--Select Category--</option>
                    <?php
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

                <div class="item">
                    <img src="https://picsum.photos/seed/pe/500/500/" alt="" width="250px">
                    <div class="item-text">
                        <div class="text" id="Item">"Item Name"</div>
                        <div class="text" id="Price">"Price"</div>
                    </div>
                </div>

                <div class="item">
                    <img src="https://picsum.photos/seed/pe/500/500/" alt="" width="250px">
                    <div class="item-text">
                        <div class="text" id="Item">"Item Name"</div>
                        <div class="text" id="Price">"Price"</div>
                    </div>
                </div>

                <div class="item">
                    <img src="https://picsum.photos/seed/pe/500/500/" alt="" width="250px">
                    <div class="item-text">
                        <div class="text" id="Item">"Item Name"</div>
                        <div class="text" id="Price">"Price"</div>
                    </div>
                </div>

                <div class="item">
                    <img src="https://picsum.photos/seed/pe/500/500/" alt="" width="250px">
                    <div class="item-text">
                        <div class="text" id="Item">"Item Name"</div>
                        <div class="text" id="Price">"Price"</div>
                    </div>
                </div>

                <div class="item">
                    <img src="https://picsum.photos/seed/pe/500/500/" alt="" width="250px">
                    <div class="item-text">
                        <div class="text" id="Item">"Item Name"</div>
                        <div class="text" id="Price">"Price"</div>
                    </div>
                </div>

                <div class="item">
                    <img src="https://picsum.photos/seed/pe/500/500/" alt="" width="250px">
                    <div class="item-text">
                        <div class="text" id="Item">"Item Name"</div>
                        <div class="text" id="Price">"Price"</div>
                    </div>
                </div>

                <div class="item">
                    <img src="https://picsum.photos/seed/pe/500/500/" alt="" width="250px">
                    <div class="item-text">
                        <div class="text" id="Item">"Item Name"</div>
                        <div class="text" id="Price">"Price"</div>
                    </div>
                </div>

                <div class="item">
                    <img src="https://picsum.photos/seed/pe/500/500/" alt="" width="250px">
                    <div class="item-text">
                        <div class="text" id="Item">"Item Name"</div>
                        <div class="text" id="Price">"Price"</div>
                    </div>
                </div>

                <div class="item">
                    <img src="https://picsum.photos/seed/pe/500/500/" alt="" width="250px">
                    <div class="item-text">
                        <div class="text" id="Item">"Item Name"</div>
                        <div class="text" id="Price">"Price"</div>
                    </div>
                </div>

                <div class="item">
                    <img src="https://picsum.photos/seed/pe/500/500/" alt="" width="250px">
                    <div class="item-text">
                        <div class="text" id="Item">"Item Name"</div>
                        <div class="text" id="Price">"Price"</div>
                    </div>
                </div>

                <div class="item">
                    <img src="https://picsum.photos/seed/pe/500/500/" alt="" width="250px">
                    <div class="item-text">
                        <div class="text" id="Item">"Item Name"</div>
                        <div class="text" id="Price">"Price"</div>
                    </div>
                </div>

                <div class="item">
                    <img src="https://picsum.photos/seed/pe/500/500/" alt="" width="250px">
                    <div class="item-text">
                        <div class="text" id="Item">"Item Name"</div>
                        <div class="text" id="Price">"Price"</div>
                    </div>
                </div>
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

    <!-- Search items -->

    <script>
        function searchCategory() {

            const categories = ["Fruits", "Vegetables", "Meat", "Dairy", "Tin Canned", "Others"]
            var search = document.getElementById("ItemCategories");

            for (let i=0; i < categories.length; i++) {
                if (search.value == categories[i]) {
                    window.location.href="./showItems.php?Category="+ search.value;
                }
            }
        }
    </script>

</body>
</html>

