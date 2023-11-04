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
    <link rel="stylesheet" href="../static/admin/editSeller.css">

    <style>
        .h_box {
            display: none;
        }
    </style>

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
    

<?php
    include "../php/db_conn.php";
    $SellerID = $_GET['SellerID'];
    $selectSeller = "SELECT * FROM seller WHERE id = '$SellerID'";
    $selectResult = mysqli_query($conn, $selectSeller);

    if (mysqli_num_rows($selectResult) > 0) {
        $row = mysqli_fetch_assoc($selectResult);
        print_r($row);
?>

        <div id=title> 
            <h1 id="editSeller">Edit Seller</h1>
        </div>
        <div id="box">
            <div id="form_wrapper">
                <form action="./editBackend.php" method="post" id="Form">
                    <div id="Group1">
                        <div id="SellerID">
                            <span style="font-size:28px; font-weight: bolder;">SellerID</span> <br>
                            <input type="text" value="<?php echo $row['id'] ?>" id="idBox" class="input" disabled >
                        </div>

                        <div id="Username">
                            <label for="username" class="textLabel">Username</label><br>
                            <input type="text" name="txtUsername" id="username" class="input" value="<?php echo $row['username'] ?>">
                        </div>
                    </div>

                    <div id="Group2">
                        <div id="Email" class="textLabel">
                            <label for="email">Email</label><br>
                            <input type="email" name="txtEmail" id="email" class="input" value="<?php echo $row['email'] ?>">
                        </div>

                        <div id="Phone_No" class="textLabel">
                            <label for="phone">Phone No.</label><br>
                            <input type="tel" name="Phone" id="phone" class="input" placeholder="0123456789" minlength="10" maxlength="11"  value="<?php echo $row['phone_no'] ?>">
                        </div>
                    </div>

                    <div id="Group3">
                        <div id="Address">
                            <label for="address" class="textLabel">
                                Address<br>
                                <textarea name="txtAddress" id="address" class="input" cols="50" rows="5" autocomplete="off"><?php echo $row['address']; ?></textarea>
                            </label>
                        </div>

                        <div id="States">
                        <span style="font-size:28px; font-weight: bolder;">State</span> <br>
                            <select name="State" id="state" class="input">
                                <option id="selected" value="<?php echo $row['state'] ?>"><?php echo $row['state'] ?></option>
                                <option id="JHR" value="Johor">Johor</option>
                                <option id="KDH" value="Kedah">Kedah</option>
                                <option id="KTN" value="Kelantan">Kelantan</option>
                                <option id="MLK" value="Melaka">Melaka</option>
                                <option id="NSN" value="Negeri Sembilan">Negeri Sembilan</option>
                                <option id="PHG" value="Pahang">Pahang</option>
                                <option id="PNG" value="Pulau Pinang">Pulau Pinang</option>
                                <option id="PRK" value="Perak">Perak</option>
                                <option id="PLS" value="Perlis">Perlis</option>
                                <option id="SBH" value="Sabah">Sabah</option>
                                <option id="SWK" value="Sarawak">Sarawak</option>
                                <option id="SGR" value="Selangor">Selangor</option>
                                <option id="TRG" value="Terengganu">Terengganu</option>
                                <option id="WPKL" value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan Kuala Lumpur</option>
                                <option id="WPLBN" value="Wilayah Persekutuan Labuan">Wilayah Persekutuan Labuan</option>
                                <option id="WPPJY" value="Wilayah Persekutuan Putrajaya">Wilayah Persekutuan Putrajaya</option>
                            </select>
                        </div>
                    </div>

                    <div id="Buttons">
                        <button type="submit" value="CONFIRM CHANGES" id="confirmButton" name="confirmButton">CONFIRM CHANGES</button>
                        <button type="button" value="CANCEL" id="cancel" onclick="window.location='./sellerList.php'">CANCEL</button>
                    </div>
                    <input type="hidden" name="SellerID" value="<?php echo $row['id'] ?>">
                </form>
            </div>
        </div>
    </div>
<?php
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