<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="./static/header.css">
    <link rel="stylesheet" href="./static/login.css">
    <link rel="stylesheet" href="./static/footer.css">
    <link rel="stylesheet" href="./static/register.css">
</head>
<body>
    <div id="wrapper">
        <?php
        include './includes/header.php';
        ?>
        <div id="register" class="register" align="center">
            <div id=textRegister>
                <h1>Registration</h1>
            </div>
            <form action="./admin" method="post" id="Form">
                <div id="Username">
                    <label for="username">Username* </label><br>
                    <input type="text" name="txtUsername" id="username"  class="input" autofocus required>
                </div>

                <div id="Password">
                    <label for="password">Password* </label><br>
                    <input type="password" name="txtPassword" id="password"  class="input" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*?[~`!@#$%^&*()_+\-=\[\]{};:\\|,.<>\/?]).{8,}" title="Password must contain at least one uppercase letter, one lowercase letter, one digit, one special character, and at least 8 characters in length" required>
                </div>
                                            
                <div id="Requirements">
                    <h4>Password must achieve the following requirements: </h4>
                    <p id="Uletter" class="invalid">At least 1 <b><i>uppercase</i></b> letter</p>
                    <p id="Lletter" class="invalid">At least 1 <b><i>lowercase</i></b> letter</p>
                    <p id="Digit" class="invalid">At least 1 <b><i>digit</i></b></p>
                    <p id="Special" class="invalid">At least 1 <b><i>special character</i></b></p>
                    <p id="Char8" class="invalid">At least <b><i>8 characters</i></b></p>
                </div>

                <script src="./JavaScript/register.js"></script>

                <div id="Confirm">
                    <label for="confirm">Confirm Password* </label><br>
                    <input type="password" name="txtConfirmPassword" id="confirm" class="input" required>
                </div>     

                <div id="Email">
                    <label for="email">Email* </label><br>
                    <input type="email" name="txtEmail" id="email"  class="input" required>
                </div>   

                <div id="Phone_No">
                    <label for="phone">Phone No.* </label><br>
                    <input type="tel" name="Phone" id="phone"  class="input" placeholder="012-345-6789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                </div>   

                <div id="Gender">
                    Gender <br>
                    <label for="male"><input type="radio" name="Gender" id="male" required>Male</label>
                    <label for="female"><input type="radio" name="Gender" id="female" required>Female</label>
                </div>   

                <div id="Address">
                    <label for="address">Address (Optional)<br><textarea name="txtAddress" id="address"  class="input" cols="50" rows="3" autocomplete="off"></textarea></label>
                </div>     

                <div id="States">
                    State (Optional)
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

                <div id="Date_Of_Birth">
                    <label for="DOB">Date of Birth* <input type="date" name="txtDOB" id="DOB" class="input" required></label>
                </div>
                
                <div id="Field">
                    <h4>* means required field</h4>
                </div>

                <div id="Buttons">
                    <button type="submit" value="Register" id="registerButton">Register</button>
                    <button type="button" value="Cancel" id="cancel" onclick="window.location='./index.php'">Cancel</button>
                </div>
            </form>
        </div>
        <?php
        include './includes/footer.html';
        ?>
    </div>
</body>
</html>