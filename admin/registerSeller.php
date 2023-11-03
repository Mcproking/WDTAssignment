<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="../static/body.css">
    <link rel="stylesheet" href="../static/includes.css">
    <link rel="stylesheet" href="../static/admin/registerSeller.css">

    <style>
        html {
            background-image: url(../imgs/admin_imgs/registerSeller.jpg);
        }

        .h_box {
            display: none;
        }
        /*Requirement slide in*/
        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateY(-40px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes slideOut {
            0% {
                opacity: 1;
                transform: translateY(0);
            }
            100% {
                opacity: 0;
                transform: translateY(40px);
            }
        }
    </style>
</head>
<body>
    <?php
        include '../includes/header.php';
    ?>

    <div id="wrapper">

        <div class="box">
            <div id="register" class="register" align="center">
                <div id=textRegister> <!--Title-->
                    <h1 id="register_header">Register Seller</h1>
                </div>
                <form action="../php/register_seller.php" method="post" id="Form">
                    <div id="Username">
                        <label for="username">Username<span style="color:red">*</span> </label><br>
                        <input type="text" name="txtUsername" id="username" class="input" autofocus required>
                    </div>

                    <div id="Email">
                        <label for="email">Email<span style="color:red">*</span> </label><br>
                        <input type="email" name="txtEmail" id="email" class="input" required>
                    </div>   

                    <div id="Phone_No">
                        <label for="phone">Phone No.<span style="color:red">*</span> </label><br>
                        <input type="tel" name="Phone" id="phone" class="input" placeholder="0123456789" minlength="10" maxlength="11" required>
                    </div>   

                    <div id="Password">
                        <label for="password">Password<span style="color:red">*</span> </label><br>
                        <input type="password" name="txtPassword" id="password" class="input" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*?[~!@#$%^&*()_+-={};:\|,.<>/?]).{8,}" title="Password must contain at least one uppercase letter, one lowercase letter, one digit, one special character, and at least 8 characters in length" required>

                        <div id="Requirements" class="visually-hidden">
                            <h4>Password must achieve the following requirements: </h4>
                            <p id="Uletter" class="invalid">At least 1&nbsp<b><i>uppercase</i></b>&nbspletter</p>
                            <p id="Lletter" class="invalid">At least 1&nbsp<b><i>lowercase</i></b>&nbspletter</p>
                            <p id="Digit" class="invalid">At least 1&nbsp<b><i>digit</i></b></p>
                            <p id="Special" class="invalid">At least 1&nbsp<b><i>special character</i></b></p>
                            <p id="Char8" class="invalid">At least&nbsp<b><i>8 characters</i></b></p>
                        </div>
                    </div>

                    <div id="Confirm">
                        <label for="confirm">Confirm Password<span style="color:red">*</span> </label><br>
                        <input type="password" name="txtConfirmPassword" id="confirm" class="input" required>
                    </div>

                    <div id="confirmValidate" class="original">
                        <p id="passValidate">Confirm password does not match with the password<br>Please enter again</p>
                    </div>

                    <script src="../JavaScript/register.js"></script>

                    <div id="Address">
                        <label for="address">Address (Optional)<br><textarea name="txtAddress" id="address"
                        placeholder="Enter address without state&#10[Street Address], [Postal Code & City]"
                        class="input" cols="50" rows="5" autocomplete="off"></textarea></label>
                    </div>     

                    <div id="States">
                        State (Optional)
                        <select name="State" id="state">
                            <option value="">--Select State--</option>
                            <option value="JHR">Johor</option>
                            <option value="KDH">Kedah</option>
                            <option value="KTN">Kelantan</option>
                            <option value="MLK">Melaka</option>
                            <option value="NSN">Negeri Sembilan</option>
                            <option value="PHG">Pahang</option>
                            <option value="PNG">Pulau Pinang</option>
                            <option value="PRK">Perak</option>
                            <option value="PLS">Perlis</option>
                            <option value="SBH">Sabah</option>
                            <option value="SWK">Sarawak</option>
                            <option value="SGR">Selangor</option>
                            <option value="TRG">Terengganu</option>
                            <option value="WPKL">Wilayah Persekutuan Kuala Lumpur</option>
                            <option value="WPLBN">Wilayah Persekutuan Labuan</option>
                            <option value="WPPJY">Wilayah Persekutuan Putrajaya</option>
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
                        <button type="submit" value="Register" id="registerButton" name="registerButton">Register</button>
                        <button type="button" value="Cancel" id="cancel" onclick="window.location='./admin.php'">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
        include '../includes/footer.html';
    ?>
</body>
</html>