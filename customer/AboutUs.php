<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="../static/body.css">
    <link rel="stylesheet" href="../static/includes.css">
    <style>
        .wrapper{
            display: flex;
            flex-direction: column;
        }
        #description {
            height:110px;
            width:75%;
            border: 1px solid;
            margin:auto;
            padding:20px 20px 20px 20px;
            font-size: 23px;
            text-align: justify;
        }
        #management {
            margin: 0px auto;
            width: 1200px;
        }
        #management1 {
            height: 400px;
            width: 300px;
            float:left;
            background-color: #FFB800;
            border-radius: 25px;
            padding:25px;
            text-align: center;
        }
        #management2 {
            height: 400px;
            width: 300px;
            float:left;
            background-color: #FFB800;
            border-radius: 25px;
            margin: 0px 75px;
            padding:25px;
            text-align: center;
        }
        #management3 {
            height: 400px;
            width: 300px;
            float:right;
            background-color: #FFB800;
            border-radius: 25px;
            padding:25px;
            text-align: center;
        }
        #management * img {
            height: 300px;
            width: 225px;
        }
        #management_content {
            padding: 10px 10px;
            text-align: center;
            font-size: large;
        }        
        
    </style>
</head>
<body>
    <?php
    include "../includes/header.php";
    ?>
    <div class="wrapper">
        <h1>About Us</h1>
            <div id="description">
                Hi! Welcome to EZGG, where you can find all your grocery needs in just one place. How convenient! As part of APU Web Solutions  Sdn. Bhd., we created this website with the intent of delivering basic food needs to your doorstep with just a click of a few buttons. We hope that we can provide assistance with food security issues and achieve sustainable agricultural development.
            </div>
            <br>
            <h1>Management</h1>
            <div id="management">
                <div id="management1">
                    <img src="../imgs/customer.png" alt="Shane" srcset="">
                    <div id="management_content"><b><u>Director</u></b><br><br>Ho Shane Foong</div>
                </div>
                <div id="management2">
                    <img src="../imgs/Daryl.jpg" alt="Daryl" srcset="">
                    <div id="management_content"><b><u>Finance Manager</u></b><br><br>Daryl Sim Wei Shern</div>
                </div>
                <div id="management3">
                    <img src="../imgs/Eugene.jpg" alt="Eugene" srcset="">
                    <div id="management_content"><b><u>Marketing Manager</u></b><br><br>Eugene Tan Ting Siang</div>
                </div>
            </div>
        </div>
    
    <div id="footer">
        <br>
        <br>
        <?php
        include "../includes/footer.html";
        ?>
    </div>
</body>
</html>