<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../static/header.css">
    <link rel="stylesheet" href="../static/login.css">
    <link rel="stylesheet" href="../static/footer.css">
</head>
<body>
    <div id="wrapper">
        <?php
        include '../includes/header.php';
        ?>
        <div id="register" align="center">
            <div>
                <h1>Registration</h1>
            </div>
            <form action="" method="post">
                <div>
                    <label for="username">Username* </label><br>
                    <input type="text" name="txtUsername" id="username">
                </div>

                <div>
                    <label for="password">Password* </label><br>
                    <input type="password" name="txtPassword" id="password">
                </div>    

                <div>
                    <label for="confirm">Confirm Password* </label><br>
                    <input type="password" name="txtConfirmPassword" id="confirm">
                </div>     

                <div>
                    <label for="email">Email* </label><br>
                    <input type="email" name="txtEmail" id="email">
                </div>   

                <div>
                    <label for="phone">Phone No.* </label><br>
                    <input type="email" name="" id="phone">
                </div>   

                <div>
                    Gender <br>
                    <label for="male"><input type="radio" name="Gender" id="male">Male</label>
                    <label for="female"><input type="radio" name="Gender" id="female">Female</label>
                </div>   

                <div>
                    <label for="address">Address (optional)<br><textarea name="txtAddress" id="address" cols="50" rows="3"></textarea></label>
                </div>     
                
                <div>
                    State
                    <select name="State" id="state">
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

                <div>
                    Date of Birth* <input type="date" name="txtDOB" id="DOB" />
                </div>
            </form>

            <div>
                <h4>* means required field</h4>
            </div>

            <div>
                <button type="submit" value="Register" id="registerButton">Register</button>
                <button type="button" value="Cancel" id="cancel" onclick="window.location='../index.php'">Cancel</button>
            </div>
        </div>
        <?php
        include '../includes/footer.html';
        ?>
    </div>
</body>
</html>