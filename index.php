<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="./static/body.css">
    <link rel="stylesheet" href="./static/includes.css">
    <link rel="stylesheet" href="./static/index.css">

</head>
<body>        
    <?php 
        session_start();
        include './includes/header.php'; 
        include './includes/navbar.html';
    ?>

    <div class="wrapper">
        <div class="moving-image fade">
            <?php
                $img_lists = glob('./imgs/slide_imgs/*.png');
                $lists_len = count($img_lists);
                for ($i = 0; $i < $lists_len; $i++) {
                    echo '<div class="myslides fade"> 
                <img src="'. $img_lists[$i] .'"style="width: 100%;">
                </div>';
                };
            ?>

            <a onclick="plusSlides(-1)" class="prev">&#10094;</a>
            <a onclick="plusSlides(1)" class="next">&#10095;</a>
            <script>
                let slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {showSlides(slideIndex += n);}

                function currentSlide(n) {showSlides(slideIndex = n);}

                function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("myslides");
                if (n > slides.length) {slideIndex = 1}    
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slides[slideIndex-1].style.display = "block";  
                }
            </script>


        </div>
            
        <div class="self-intro">
            <img src="./imgs/T-pose.jpg" width="500px">
            <div class="intro-text bdy">
            EZGG, your needs in one place. <br> Search no more!
            </div>
        </div>

        <div class="latest">
            <div class="latest-header">
                Latest
            </div>
            <div class="latest-items">            
                <div class="latest-itemsbox">
                <?php
                    include './php/db_conn.php';
                    $querry_list = 'SELECT `id`, `name`, `price`,`img_path` FROM `item`  ORDER BY `id` DESC LIMIT 0,8';
                    if($smst = $conn->prepare($querry_list)){
                        $smst->execute();
                        $smst->store_result();
                        if ($smst->num_rows > 0){
                            for ($x=0; $x < $smst->num_rows; $x++) {
                                $smst->bind_result($id, $name, $price, $img_path);
                                $smst->fetch();
                                $img_path = substr($img_path,1);
                                $link = "location.href='./item.php?item=".$id."'";
                                $html = '<div class="latest-item">
                        <img src="'.$img_path.'" alt="" width="250px">
                        <div class="latest-itemtext">
                            <div class="item-text" id="Item">'.$name.'</div>
                            <div class="item-text" id="Price">RM '.$price.'</div>
                        </div>
                    </div>';
                            echo $html;
                            }
                        }
                    }                  
                ?>
                </div>
            </div>
        </div>
    </div>

    <?php
    include './includes/footer.php';
    ?>
</body>
</html>