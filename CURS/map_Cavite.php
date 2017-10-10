<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demo: Fullscreen Background - Bootstrap Carousel</title>
<meta name="description" content="Fullscreen Background - Bootstrap Carousel - Collection by sevenXdemo - More Information: www.sevenX.de/blog" />
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <link rel="icon" type="image/png" href="img/logoCUP.png" />
    <link rel="stylesheet" type="text/css" href="gh.css"> 

<!--#####################
Additional Styles (required)
######################-->
<style>
html,body {
  height:100%;
  width:100%;
  position:relative;
}
#background-carousel{
  position:fixed;
  width:100%;
  height:100%;
  z-index:-1;
}
.carousel,
.carousel-inner {
  width:100%;
  height:100%;
  z-index:0;
  overflow:hidden;
}
.item {
  width:100%;
  height:100%;
  background-position:center center;
  background-size:cover;
  z-index:0;
}

#content-wrapper {
  position:absolute;
  z-index:1 !important;
  min-width:100%;
  min-height:100%;
}
</style>

</head>

<body>

<div id="background-carousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image:url(assets/img/carousel-home/kainansabalsa.jpg)"></div>
        <div class="item" style="background-image:url(assets/img/carousel-home/balite.png)"></div>
        <div class="item" style="background-image:url(assets/img/carousel-home/tagaytay.jpg)"></div>  
      </div>
    </div>
</div>


<div id="content-wrapper">
<!-- PAGE CONTENT -->
  <div class="container">

          <?php 
          include ("icon.php");
         // require ("guesthome.php");
           ?>
    </div><!-- End Container -->
<!-- PAGE CONTENT -->
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
  $('#myCarousel').carousel({
    pause: 'none'
  })  
});
</script>
</body>
</html>
