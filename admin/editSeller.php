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

<?php
    include "../php/db_conn_daryl.php";
    echo $SellerID = $_GET['SellerID'];
    $selectSeller = "SELECT * FROM seller WHERE SellerID = '$SellerID'";
    $selectResult = mysqli_query($conn, $selectSeller);

    if (mysqli_num_rows($selectResult) > 0) {
        while ($row = mysqli_fetch_assoc($selectResult)) {           
?>

    <div id="wrapper">
        <div id=title> <!--Title-->
            <h1 id="editSeller">Edit Seller</h1>
        </div>

        <div id="form_wrapper">
            <form action="" method="post">
                <div id="SellerID">
                    SellerID <br>
                    <input type="text" value="<?php echo $row['SellerID'] ?>" disabled>
                </div>

                <div id="Username">
                    <label for="username">Username</label><br>
                    <input type="text" name="txtUsername" id="username" class="input" value="<?php echo $row['SellerUsername'] ?>">
                </div>

                <div id="Email">
                    <label for="email">Email</label><br>
                    <input type="email" name="txtEmail" id="email" class="input" value="<?php echo $row['SellerEmail'] ?>">
                </div>

                <div id="Phone_No">
                    <label for="phone">Phone No.</label><br>
                    <input type="tel" name="Phone" id="phone" class="input" placeholder="0123456789" minlength="10" maxlength="11" value="<?php echo $row['SellerPhone'] ?>">
                </div>

                <div id="Address">
                    <label for="address">Address<br><textarea name="txtAddress" id="address"
                    class="input" cols="50" rows="5" autocomplete="off" value="<?php echo $row['SellerAddress'] ?>"></textarea></label>
                </div>

                <div id="States">
                    State
                    <select name="State" id="state">
                        <option value="<?php echo $row['SellerState'] ?>"><?php echo $row['SellerState'] ?></option>
                        <option name="JHR" value="Johor">Johor</option>
                        <option name="KDH" value="Kedah">Kedah</option>
                        <option name="KTN" value="Kelantan">Kelantan</option>
                        <option name="MLK" value="Melaka">Melaka</option>
                        <option name="NSN" value="Negeri Sembilan">Negeri Sembilan</option>
                        <option name="PHG" value="Pahang">Pahang</option>
                        <option name="PNG" value="Pulau Pinang">Pulau Pinang</option>
                        <option name="PRK" value="Perak">Perak</option>
                        <option name="PLS" value="Perlis">Perlis</option>
                        <option name="SBH" value="Sabah">Sabah</option>
                        <option name="SWK" value="Sarawak">Sarawak</option>
                        <option name="SGR" value="Selangor">Selangor</option>
                        <option name="TRG" value="Terengganu">Terengganu</option>
                        <option name="WPKL" value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan Kuala Lumpur</option>
                        <option name="WPLBN" value="Wilayah Persekutuan Labuan">Wilayah Persekutuan Labuan</option>
                        <option name="WPPJY" value="Wilayah Persekutuan Putrajaya">Wilayah Persekutuan Putrajaya</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
<?php
        }
    }
    else {
        echo 'No records found.';
    }

?>


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

