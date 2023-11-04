<?php
    $item = $_POST['id'];
    $item = trim($item);
    include "../php/db_conn.php";
    $categories = "SELECT * FROM Item WHERE ItemCategory = '{$item}'";
    $res = mysqli_query($conn, $categories);

    while ($rows = mysqli_fetch_assoc($res)) {
?>
    <tr>
        <td> <?php echo $rows['ItemImage']; ?> </td>
        <td> <?php echo $rows['ItemName']; ?> </td>
        <td> <?php echo $rows['ItemPrice']; ?> </td>
    </tr>

<?php
    }
    echo $categories;
?>