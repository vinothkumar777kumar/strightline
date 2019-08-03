<html>
<head>
<title>Project Title</title>
<link rel="stylesheet" href="assets/boot/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/boot/css/style.css">
<link rel="stylesheet" href="assets/boot/css/font-awesome.min.css">

</head>
<body>
<?php
include("header/header.php");
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/slide.jpg" class="d-block w-100" style="height:700px" alt="img1">
        </div>
        <div class="carousel-item">
            <img src="assets/slide.jpg" class="d-block w-100" style="height:700px" alt="img2">
        </div>
        <div class="carousel-item">
            <img src="assets/slide.jpg" class="d-block w-100"  style="height:700px" alt="img3">
        </div>
    </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
</div>
<div class="gride-cont">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3>Chamomile</h3>
                    <p>Reduces anxiety to promote better sleep. Chamomile has long been recognised for its calming properties.</p>
                    <h4><a href="#">Read More</a></h4>
            </div>
            <div class="col-sm-4">
                <h3>Ashwagandha</h3>
                    <p>Is the most important herb in Ayurveda, it may help reduce stress, anxiety and depression.</p>
                    <h4><a href="#">Read More</a></h4>
            </div>
            <div class="col-sm-4">
                <h3>Schisandra berry</h3>
                    <p>Proven to reduce cortisol levels in the body (the stress hormone) and is effective in controlling changes in serotonin and adrenaline caused by stress.</p>
                    <h4><a href="#">Read More</a></h4>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="grid-img">
    <div class="row">
        <div class="col-sm-3">
            <img src="assets/1.jpg" alt="1.jpg">
        </div>
        <div class="col-sm-3">
            <img src="assets/2.jpg" alt="2.jpg">
        </div>
        <div class="col-sm-3">
            <img src="assets/3.jpg" alt="3.jpg">
        </div>
        <div class="col-sm-3">
            <img src="assets/4.jpg" alt="4.jpg">
        </div>
    </div>
</div>
</div>
<?php
include("footer/footer.php");
?>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/boot/js/bootstrap.min.js"></script>

</body>
</html>