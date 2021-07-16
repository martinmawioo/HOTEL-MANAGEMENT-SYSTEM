<?php include('session.php'); ?>
<?php include('header.php'); ?>

<?php include('admin/connect.php'); ?>

<body>
    <?php
    include('navtop.php');
    ?>
    <div id="background">
        <?php
        include ('navbarfixed.php');
        ?>

        <div id="page">
           <?php include ('nav_sidebar2.php');?>
            <div id="content">
                <div class="hero-unit-table"> 
                    <div id="header">
                        <img src="images/mountains.jpg" width="938" halt="" class="img-rounded">

                    </div>
                    <div id="body">



                        <h3>List of Our Products</h3>
                        <p>
                        <div class="hero-unit-table">...</div>

                        </p>
                        <ul class="thumbnails">
                            <?php
                            $query = mysql_query("select * from tb_products") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $id = $row['productID'];
                                ?>

                                <li class="span3">
                                    <div class="thumbnail">
                                        <img data-src="holder.js/300x200" alt="">
                                        <div class="alert alert-danger"><div class="font1"><?php echo $row['name']; ?></div></div>
                                        <hr>


                                        <a  href="#<?php echo $id; ?>"   data-toggle="modal"><img src="admin/<?php echo $row['location'] ?>" class="img-rounded" alt="" width="160" height="200"></a>


                                        <p>
                                            <a> Price: <?php echo $row['price']; ?></a>
                                        </p>
                                        <a href="#add<?php echo $id; ?>"   data-toggle="modal" class="btn btn-danger"><i class="icon-shopping-cart icon-large"></i>&nbsp;Add to Cart</a>

                                        <?php include('order_modal.php'); ?>
                                    <?php } ?>
                                    <?php
                                    if (isset($_POST['order'])) {
                                        $member_id = $_POST['member_id'];
                                        $quantity = $_POST['quantity'];
                                        $price = $_POST['price'];
                                        $product_id = $_POST['product_id'];
                                        $total = $quantity * $price;
                                        mysql_query("insert into order_details (memberID,qty,productID,price,total) values('$member_id','$quantity','$product_id','$price','$total')") or die(mysql_query);
                                     /*    header('location:user_wines.php'); */
										?>
												<script>
																window.location = 'user_wines.php';				
																</script>
										<?php
                                    }
                                    ?>
                        </ul>

                    </div>
                    <div id="footer">
                        <?php include('footer_user.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <?php include('footer_bottom.php'); ?>
</body>



</html>