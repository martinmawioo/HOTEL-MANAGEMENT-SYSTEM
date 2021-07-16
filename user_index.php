<?php
include('admin/connect.php');
include('header.php');

?>
<body>
    <?php
    include('navtop.php');
    ?>
   
        <div id="page">

          <?php include ('nav_sidebar2.php');?>

            <div id="content">
                <div class="hero-unit-table">                        <!-- image slider -->
                    <div class="slider-wrapper theme-default">

                          <div id="slider" class="nivoSlider">
                            <img src="admin/images/banner1.jpg" data-thumb="images/toystory.jpg" alt="" />
                            <img src="admin/images/bag1.jpg" data-thumb="images/toystory.jpg" alt="" />
                            <img src="admin/images/bag2.jpg" data-thumb="images/wineries.jpg" alt="" />
                            <img src="admin/images/bag3.jpg"  alt="" data-transition="slideInLeft" />
                        </div>

                        <div id="htmlcaption" class="nivo-html-caption">
                            <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
                        </div>
                    </div>
                    <!-- end slider -->

                    <div id="body">

                        <div class="body">
                            <ul>
                                <li>
                                    <a class="figure" href=""><img class = "image-rounded"src="pics/HANDBAG/bags1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a class="figure" href=""><img class = "image-rounded"src="pics/SCHOOL/bagS1.jpg" alt=""></a>

                                </li>
                                <li>
                                    <a class="figure" href=""><img class = "image-rounded" src="pics/TRAVEL/bagT1.jpg" alt=""></a>

                                </li>
                                <li>
                                    <a class="figure" href=""><img class="img-rounded" src="pics/TRAVEL/bagT2.jpg" alt=""></a>         
                                </li>

                            </ul>	
                            
                             
                        </div>

                    </div>
                    <div id="footer">
                        <?php include('footer_user.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>