<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="../static/body.css">
    <link rel="stylesheet" href="../static/includes.css">
    <link rel="stylesheet" href="../static/admin/sellerList.css">
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

        <div id="header-title">
            Seller List
        </div>

        <form action="" method="get" id="Search">
            <div id="form-search-header">Search by Username:</div>
            <input type="text" name="searchSeller" id="searchSeller" placeholder="Enter Username">
            <button type="submit" id="searchButton" name="searchButton">Search</button>
        </form>

        <div class="list">
            <div class="list-header" id="header">
                <div class="header-detail" id="h-id">ID</div>
                <div class="header-detail" id="h-user">Username</div>
                <div class="header-detail" id="h-email">Email</div>
                <div class="header-detail" id="h-phone">Phone</div>
                <div class="header-detail" id="h-address">Address</div>
                <div class="header-detail" id="h-action">Action</div>
                
            </div>
            <div class="lists" id="seller">
                <!-- <div id="record">
                    <div class="record-detail" id="r-id">S2</div>
                    <div class="record-detail" id="r-user">S1</div>
                    <div class="record-detail" id="r-email">S1@S.c</div>
                    <div class="record-detail" id="r-phone">0123456789</div>
                    <div class="record-detail" id="r-address">mamamiya so looooooooooqweeeqwweqwewqeqweqwooooooooooong, Johor</div>
                    <div class="record-detail" id="r-action">
                        <a href="">EDIT</a>
                        <button>DELETE</button>
                    </div>
                </div>
                <div id="record">
                    <div class="record-detail" id="r-id">ID</div>
                    <div class="record-detail" id="r-user">Username</div>
                    <div class="record-detail" id="r-email">Email</div>
                    <div class="record-detail" id="r-phone">Phone</div>
                    <div class="record-detail" id="r-address">Address</div>
                    <div class="record-detail" id="r-action">
                        <a href="">EDIT</a>
                        <button>DELETE</button>
                    </div>
                </div> -->
                <?php
                    include "../php/db_conn.php";
                    $email_querry = "SELECT `id`,`username`,`email`,`phone_no`,`address`,`state` FROM `seller` WHERE `username` = ?";
                    $getAll_querry = "SELECT `id`,`username`,`email`,`phone_no`,`address`,`state` FROM `seller`";

                    if(!empty($_GET["searchSeller"])){
                        if($smst = $conn->prepare($email_querry)){
                            $smst->bind_param("s", $_GET["searchSeller"]);
                            $smst->execute();
                            $smst->store_result();

                            if($smst->num_rows > 0){
                                $smst->bind_result($id,$username,$email,$phone,$address,$state);
                                $smst->fetch();
                                $full_address = $address.$state;
                                $html = '
                                <div id="record">
                                    <div class="record-detail" id="r-id">S'.$id.'</div>
                                    <div class="record-detail" id="r-user">'.$username.'</div>
                                    <div class="record-detail" id="r-email">'.$email.'</div>
                                    <div class="record-detail" id="r-phone">'.$phone.'</div>
                                    <div class="record-detail" id="r-address">'.$address.'</div>
                                    <div class="record-detail" id="r-action">
                                        <a href="./editSeller.php?SellerID='.$id.'">EDIT</a>
                                        <button>DELETE</button>
                                    </div>
                                </div>';
                                echo $html;  
                            }
                        }
                    }else if($smst = $conn->prepare($getAll_querry)){
                        $smst->execute();
                        $smst->store_result();

                        if($smst->num_rows > 0){
                            $smst->bind_result($id,$username,$email,$phone,$address,$state);
                            $smst->fetch();
                            $full_address = $address.$state;
                            $html = '                                <div id="record">
                            <div class="record-detail" id="r-id">S'.$id.'</div>
                            <div class="record-detail" id="r-user">'.$username.'</div>
                            <div class="record-detail" id="r-email">'.$email.'</div>
                            <div class="record-detail" id="r-phone">'.$phone.'</div>
                            <div class="record-detail" id="r-address">'.$address.'</div>
                            <div class="record-detail" id="r-action">
                                <a href="./editSeller.php?SellerID='.$id.'">EDIT</a>
                                <button>DELETE</button>
                            </div>
                        </div>';
                            echo $html;
                        }
                    }
                ?>

            </div>
        </div>


    </div>

    <?php
        include "../includes/simple_footer.html";
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
