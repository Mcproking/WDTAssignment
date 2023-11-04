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
        <h1>Seller List</h1>
    </div>

    <div>
        <form action="" method="get" id="Search">
            Search by Username: <input type="text" name="searchSeller" id="searchSeller" placeholder="Enter Username">
            <button type="submit" id="searchButton" name="searchButton">Search</button>
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

<?php
    include "../php/db_conn.php";
    
    $displayQuery = "SELECT * FROM seller ORDER BY SellerID ASC LIMIT 20";
    $displayResults = mysqli_query($conn, $displayQuery);
    
    if (isset($_GET['searchSeller'])) {
        $username = $_GET['searchSeller'];
    }
    $searchQuery = "SELECT * FROM seller WHERE SellerUsername = '$username'";
    $searchResults =  mysqli_query($conn, $searchResults);

    if (mysqli_num_rows($searchResults) > 0) {
?>
        <table border="1">
            <tr>
                <th>Seller ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>State</th>
                <th colspan="2">Actions</th>
            </tr>

        <?php
        while ($row = mysqli_fetch_assoc($searchResults)) {
            echo "<tr>";
            echo "<td>" . $row['SellerID'] . "</td>";
            echo "<td>" . $row['SellerUsername'] . "</td>";
            echo "<td>" . $row['SellerEmail'] . "</td>";
            echo "<td>" . $row['SellerPhone'] . "</td>";
            echo "<td>" . $row['SellerAddress'] . "</td>";
            echo "<td>" . $row['SellerState'] . "</td>";
        ?>
            <td><a class="actionButtons" href="editSeller.php?SellerID=<?php echo $row['SellerID']; ?>">Edit</a></td>
            <td><a class="actionButtons" href="deleteSeller.php?SellerID=<?php echo $row['SellerID']; ?>">Delete</a></td>

        <?php
            echo "</tr>";
        }
    }
    else {
        echo "No records found.";
    }
?>
        </table>

      
<?php    
    if (mysqli_num_rows($displayResults) > 0) {
?>
        <table border="1">
            <tr>
                <th>Seller ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>State</th>
                <th colspan="2">Actions</th>
            </tr>

        <?php
        while ($row = mysqli_fetch_assoc($displayResults)) {
            echo "<tr>";
            echo "<td>" . $row['SellerID'] . "</td>";
            echo "<td>" . $row['SellerUsername'] . "</td>";
            echo "<td>" . $row['SellerEmail'] . "</td>";
            echo "<td>" . $row['SellerPhone'] . "</td>";
            echo "<td>" . $row['SellerAddress'] . "</td>";
            echo "<td>" . $row['SellerState'] . "</td>";
        ?>
            <td><a class="actionButtons" href="editSeller.php?SellerID=<?php echo $row['SellerID']; ?>">Edit</a></td>
            <td><a class="actionButtons" href="deleteSeller.php?SellerID=<?php echo $row['SellerID']; ?>">Delete</a></td>

        <?php
            echo "</tr>";
        }
    }
    else {
        echo "No records found.";
    }
?>
        </table>