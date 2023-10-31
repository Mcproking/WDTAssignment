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
            <img src="https://picsum.photos/id/307/500/300" width="500px">
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
                    <!-- This is to use with php and mysql.
                    <div class="latest-item">
                        <img src="https://picsum.photos/seed/pe/500/500/" alt="" width="250px">
                        <div class="latest-itemtext">
                            <div class="item-text" id="Item">.$ItemName.</div>
                            <div class="item-text" id="Price">.$ItemPrice.</div>
                        </div>
                    </div>
  
                     -->
                    <div class="latest-item">
                        <img src="https://picsum.photos/seed/pe/500/500/" alt="" width="250px">
                        <div class="latest-itemtext">
                            <div class="item-text" id="Item">"Item Name"</div>
                            <div class="item-text" id="Price">"Price"</div>
                        </div>
                    </div>
                    <div class="latest-item">
                        <img src="https://picsum.photos/seed/pe/500/500/" alt="" width="250px">
                        <div class="latest-itemtext">
                            <div class="item-text" id="Item">"Item Name"</div>
                            <div class="item-text" id="Price">"Price"</div>
                        </div>
                    </div>
                    <div class="latest-item">
                        <img src="https://picsum.photos/seed/pe/500/500/" alt="" width="250px">
                        <div class="latest-itemtext">
                            <div class="item-text" id="Item">"Item Name"</div>
                            <div class="item-text" id="Price">"Price"</div>
                        </div>
                    </div>
                    <div class="latest-item">
                        <img src="https://picsum.photos/seed/pe/500/500/" alt="" width="250px">
                        <div class="latest-itemtext">
                            <div class="item-text" id="Item">"Item Name"</div>
                            <div class="item-text" id="Price">"Price"</div>
                        </div>
                    </div>
                    <div class="latest-item">
                        <img src="https://picsum.photos/seed/pe/500/500/" alt="" width="250px">
                        <div class="latest-itemtext">
                            <div class="item-text" id="Item">"Item Name"</div>
                            <div class="item-text" id="Price">"Price"</div>
                        </div>
                    </div>
                    <div class="latest-item">
                        <img src="https://picsum.photos/seed/pe/500/500/" alt="" width="250px">
                        <div class="latest-itemtext">
                            <div class="item-text" id="Item">"Item Name"</div>
                            <div class="item-text" id="Price">"Price"</div>
                        </div>
                    </div>
                    <div class="latest-item">
                        <img src="https://picsum.photos/seed/pe/500/500/" alt="" width="250px">
                        <div class="latest-itemtext">
                            <div class="item-text" id="Item">"Item Name"</div>
                            <div class="item-text" id="Price">"Price"</div>
                        </div>
                    </div>
                    <div class="latest-item">
                        <img src="https://picsum.photos/seed/pe/500/500/" alt="" width="250px">
                        <div class="latest-itemtext">
                            <div class="item-text" id="Item">"Item Name"</div>
                            <div class="item-text" id="Price">"Price"</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include './includes/footer.html';
    ?>
</body>
</html>