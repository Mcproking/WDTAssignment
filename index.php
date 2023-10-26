<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Plsssss</title>
    <link rel="stylesheet" href="./static/body.css">
    <link rel="stylesheet" href="./static/indexheader.css">
    <link rel="stylesheet" href="./static/navbar.css">
    <link rel="stylesheet" href="./static/index.css">
    <link rel="stylesheet" href="./static/footer.css">

</head>
<body>

    <div id="wrapper">
        <?php 
        include 'includes/indexheader.html';
        ?>

        <div id="about">
            <h1 id="header">ABOUT US</h1>
            <div id="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam hic tempore facilis sequi vitae exercitationem unde, explicabo quasi maiores? Facilis repellendus fugiat distinctio ut voluptate architecto quos perferendis eveniet et, quidem natus in earum impedit eius delectus nostrum aspernatur libero.</div>
        </div>
        <div id="latest">
            <div id="ltext" class="text"><b>Latest</b></div>
            <div id="litems" class="items">
                <div class="item">
                    <img src="https://picsum.photos/150/150?random=1">
                    <div id="itext" class="text">Lorem, ipsum.</div>
                </div>
                <div class="item">
                    <img src="https://picsum.photos/150/150?random=2">
                    <div id="itext" class="text">Lorem, ipsum.</div>
                </div>
                <div class="item">
                    <img src="https://picsum.photos/150/150?random=3">
                    <div id="itext" class="text">Lorem, ipsum.</div>
                </div>
                <div class="item">
                    <img src="https://picsum.photos/150/150?random=4">
                    <div id="itext" class="text">Lorem, ipsum.</div>
                </div>
                <div class="item">
                    <img src="https://picsum.photos/150/150?random=5">
                    <div id="itext" class="text">Lorem, ipsum.</div>
                </div>
                <div class="item">
                    <img src="https://picsum.photos/150/150?random=6">
                    <div id="itext" class="text">Lorem, ipsum.</div>
                </div>
            </div>
        </div>
        <div id="category">
            <div id="ctext" class="text">Category</div>
            <div class="selection">
                <div class="left">
                    <div id="csidenav">
                        <div id="navlatest" class="itemnav">LATEST</div>
                        <div id="navfruit" class="itemnav">FRUITS</div>
                        <div id="navvegetable" class="itemnav">VEGETABLE</div>
                        <div id="navmeat" class="itemnav">MEAT</div>
                        <div id="navdairy" class="itemnav">DAIRY</div>
                        <div id="navcanned" class="itemnav">CANNED FOOD</div>
                        <div id="navother" class="itemnav">OTHERS</div>
                    </div>  
                </div>

                <div class="right">
                    <div id="citems" class="items">
                        <div class="item">
                            <img src="https://picsum.photos/150/150?random=1">
                            <div id="itext" class="text">Lorem, ipsum.</div>
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/150/150?random=2">
                            <div id="itext" class="text">Lorem, ipsum.</div>
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/150/150?random=3">
                            <div id="itext" class="text">Lorem, ipsum.</div>
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/150/150?random=4">
                            <div id="itext" class="text">Lorem, ipsum.</div>
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/150/150?random=5">
                            <div id="itext" class="text">Lorem, ipsum.</div>
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/150/150?random=6">
                            <div id="itext" class="text">Lorem, ipsum.</div>
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/150/150?random=7">
                            <div id="itext" class="text">Lorem, ipsum.</div>
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/150/150?random=8">
                            <div id="itext" class="text">Lorem, ipsum.</div>
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/150/150?random=9">
                            <div id="itext" class="text">Lorem, ipsum.</div>
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/150/150?random=10">
                            <div id="itext" class="text">Lorem, ipsum.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
        include 'includes/footer.html';
        ?>
    </div>
</body>
</html>