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
                <?php
                    if($_GET['items'] == "Tin Canned"){$category = "TinCanned";}else{$category = $_GET["items"];}
                    include './php/db_conn.php';
                    $querry_list = 'SELECT `id`, `name`, `price`,`img_path` FROM `item` WHERE `category` = ?';
                    if($smst = $conn->prepare($querry_list)){
                        $smst->bind_param('s',$category);
                        $smst->execute();
                        $smst->store_result();
                        if ($smst->num_rows > 0){
                            for ($x=0; $x < $smst->num_rows; $x++) {
                                $smst->bind_result($id, $name, $price, $img_path);
                                $smst->fetch();
                                $img_path = substr($img_path,1);
                                $link = "location.href='./item.php?item=".$id."'";
                                $html = '<div class="item" onclick="'.$link.'">
                                <img src="'.$img_path.'" alt="" width="250px">
                                <div class="item-text">
                                    <div class="text" id="Item">"'.$name.'"</div>
                                    <div class="text" id="Price">"'.$price.'"</div>
                                </div>
                            </div>';
                            echo $html;
                            }
                        }
                    }                  
                ?>
            </div>
        </div>
    </div>
    <?php
    include "./includes/footer.php";
    ?>
</body>
</html>