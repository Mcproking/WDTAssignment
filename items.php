<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_GET['items']?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="./static/body.css">
    <link rel="stylesheet" href="./static/includes.css">
    <link rel="stylesheet" href="./static/items.css">

</head>
<body>
    <?php
    include "./includes/header.php";
    include "./includes/navbar.html";
    ?>
    <div class="wrapper">
        <div class="items-type">
            <div class="items-header">
                <?php echo $_GET['items']; ?>
            </div>
            <div class="items">
                <!-- For sql uses -->
                <!-- <div class="item">
                    <img src="https://picsum.photos/seed/pe/500/500/" alt="" width="250px">
                    <div class="item-text">
                        <div class="text" id="Item">"Item Name"</div>
                        <div class="text" id="Price">"Price"</div>
                    </div>
                </div> -->
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
    include "./includes/footer.html";
    ?>
</body>
</html>