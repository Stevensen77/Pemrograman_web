<?php
// Initialize the session
session_start();

if(isset($_SESSION['username']))
{

 
 $username=$_SESSION['username'];
 echo "Hi".$_SESSION['username'] ;
 
 
 echo "<a href='login/logout.php'>Sign out</a>";
//<a href="login/logout.php" class="btn btn-danger">Sign Out of Your Account</a>
 
}
else{
	
	echo"Silahkan Login";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>TanahSubur.com | Selling</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_400-Myriad_Pro_italic_600.font.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/jquery.faded.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 7]>
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, .logo, .extra-banner');</script>
<![endif]-->
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
</head>
<body>
<!-- START PAGE SOURCE -->
<header>
<div class="atas" style="background-image: url('images/login_image.jpg');">
  <div class="container_16">
    <div class="logo">
      <h1><a href="#"><img width="240px"; src="images/tanahsubur.png"></a></h1>
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="selling.php" class="current">Selling</a></li>
        <li><a href="buying.php">Buying</a></li>
        <li><a href="renting.php">Renting</a></li>
        <li><a href="moving.php">Moving</a></li>
        <li><a href="finance.php">Finance</a></li>
        <li><a href="contacts.php">Contacts</a></li>
        <li><a href="privacy.php">Privacy</a></li>
      </ul>
    </nav>
    <div id="faded">
      <div class="rap"> <a href="#"><img src="images/big-img1.jpg" alt="" width="571" height="398"></a> <a href="#"><img src="images/big-img2.jpg" alt="" width="571" height="398"></a> <a href="#"><img src="images/big-img3.jpg" alt="" width="571" height="398"></a> </div>
      <ul class="pagination">
        <li> <a href="#" rel="0"> <img src="images/f_thumb1.png" alt=""> <span class="left"> Villa<br />
          2007 year<br />
          5000 sq.ft </span> <span class="right"> Brick, glass<br />
          3 beds<br />
          2 baths </span> </a> </li>
        <li> <a href="#" rel="1"> <img src="images/f_thumb2.png" alt=""> <span class="left"> Villa<br />
          2009 year<br />
          3500 sq.ft </span> <span class="right"> Brick, glass<br />
          5 beds<br />
          3 baths </span> </a> </li>
        <li> <a href="#" rel="2"> <img src="images/f_thumb3.png" alt=""> <span class="left"> Villa<br />
          2010 year<br />
          4200 sq.ft </span> <span class="right"> Brick, glass<br />
          4 beds<br />
          3 baths </span> </a> </li>
      </ul>
      <img src="images/extra-banner.png" alt="" class="extra-banner"> </div>
  </div>
  </div>
</header>
<section id="content">
  <div class="container_16">
    <div class="clearfix">
      <section id="mainContent" class="grid_10">
        <article>
          <h2>Home Value Estimator</h2>
          <div class="wrapper">
            <figure><img src="images/2page-img1.jpg" alt=""></figure>
            <h3>Lorem ipsum dolor sit amet consectetuer adipiscing elit Praesent vestibulum moles tie lacuseneane nonummy. </h3>
            <p>Portsce suscipit va sociis natoque penatibus et magnis dis parturienetontes nascetur ridiculus musulla dutusce feugiat malesuada odorbi nunc odio gravida at cursus nec luctus alorem.</p>
            <a href="#" class="button">Read More</a> </div>
        </article>
        <article class="last">
          <h2>Mortgage Center</h2>
          <hgroup>
            <h5>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis. </h5>
            <h4>Nulla dsce feugiat malesuada odiobi nunc odio gravida at cursus nec luctusa loremaece nas trism dolor sit aconsecteetuer adipiscinges elitraesent</h4>
          </hgroup>
          <div class="img-box">
            <figure><img src="images/2page-img2.jpg" alt=""></figure>
            <p>Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl.</p>
            <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis.</p>
            In pede mi aliuet sit amet, euismod in, auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis. </div>
          <p>Maurihasellus portsce suscipit varium sociis natoque penatibus et magnis dis parturienetontes nascetur ridiculus musulla dutusce feugiat malesuada odorbi nunc odio gravida at cursus nec luctus alorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. </p>
          <a href="#" class="button">Read More</a> </article>
      </section>
      <aside class="grid_6">
        <div class="prefix_1">
          <article>
            <div class="box">
              <h2>Find a Sell Associate</h2>
              <h3><a href="#">Sed ut perspiciatis unde</a></h3>
              <p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
              <p>Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna.</p>
            </div>
          </article>
          <article class="last">
            <h2>Find Sales</h2>
            <h4>Nulla dsce feugiat malesuada odiobi nunc odio gravida at cursus nec luctusa loremaece nas trism dolor sit aconsecteetuer adipiscinges elitraesent.</h4>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.</p>
            <a href="#" class="button">Read More</a> </article>
        </div>
      </aside>
    </div>
  </div>
</section>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2018 <a href="#">SiteName</a> - All Rights Reserved</p>
        <p style="color:white;" class="rf">Design by <a style="color:white;" href="#">Kelompok 6</a></p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>