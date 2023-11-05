<?php
    include "../php/db_conn.php";

    $Category = $_GET['Category'];

    $searchQuery = "SELECT img_path, name, price FROM item WHERE category='$Category'";
    $searchResults = mysqli_query($conn, $searchQuery);

    if (mysqli_num_rows($searchResults) > 0){
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

?>