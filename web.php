<?php require 'top.php'; ?>

<style>
    .inner-item{
        height: 100%;
    }
    .carousel-inner > .item > .inner-item > img {
        height: 100%;
    }
    .carousel-caption{
        margin-bottom: 15%;
        color: #808080;
    }
    
    
</style>

<div id="myCarousel" class="carousel slide" data-ride="carousel"> <!-- Possibly add indicators -->        
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <!--li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li-->
    </ol>
    
    <div class="carousel-inner">  
        <div class="item active">
            <div class="inner-item">
                <img src="/images/ppg/6.png" class="img-responsive" alt="Screenshot">
            </div>
            <div class="container">
                <div class="carousel-caption">
                    <h1>Ad-hoc Reporting Engine</h1>
                    <p>Created for PPG</p>
                    <p><a class="btn btn-lg btn-primary" href="adhoc.php" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        
        <div class="item">
            <div class="inner-item">
                <img src="/images/ppg/6.png" class="img-responsive" alt="Screenshot">
            </div>
            <div class="container">
                <h1>Application Thinner</h1>
                <p>Created for Truefit Solutions</p>
                <p><a class="btn btn-lg btn-primary" href="adhoc.php" role="button">Learn more</a></p>
            </div>
        </div>
    </div>


    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>     
</div><!-- /.carousel -->

<?php require 'bottom.php'; ?>




<!--  
    <h2>R&#233;sum&#233; Uploader</h2>

    I created a R&#233;sum&#233; uploader for TrueFit Solutions. The site was built 
-->