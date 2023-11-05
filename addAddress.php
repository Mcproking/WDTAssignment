<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Address</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="./static/body.css">
    <link rel="stylesheet" href="./static/includes.css">
    <link rel="stylesheet" href="./static/addAddress.css">

    <style>
        .h_box {
            display: none;
        }
    </style>
</head>
<body>
    <?php 
        session_start();
        include './includes/header.php';
    ?>

    <div id="wrapper">
        <div id="add_address" class="add_address" align="center">

            <div id="textAdd"> <!--Title-->
                <h1 id="add_header">Add Address</h1>
            </div>

            <form action="./php/add_address.php" method="post">
                <div id="Address">
                    <label for="address">Address<span style="color:red">*</span><br><textarea name="txtAddress" id="address"
                    placeholder="Enter address without state&#10[Street Address], [Postal Code & City]"
                    class="input" cols="50" rows="5" autocomplete="off"></textarea></label>
                </div>     

                <div id="States">
                    State<span style="color:red">*</span>
                    <select name="State" id="state">
                        <option value="">--Select State--</option>
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

                <div id="Field">
                    <h4>* indicates a required field</h4>
                </div>
            
                <?php
                    if(!empty($_SESSION['ERR_FLASH'])){
                        echo '<div id="err" style="color:red; font-size:16px; font-weight:bold;">'.$_SESSION['ERR_FLASH'].'</div>';
                        $_SESSION = array();
                    }
                ?>
                
                <div id="Buttons">
                    <button type="submit" value="ADD" id="addButton" name="addButton">ADD</button>
                    <button type="button" value="CANCEL" id="cancel" onclick="window.location='./index.php'">CANCEL</button>
                </div>
            </form>
        </div>
    </div>

    <?php
        include './includes/footer.php';
    ?>
</body>
</html>