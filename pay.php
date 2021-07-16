<?php
include('admin/connect.php');
include('session.php');
$get_id=$_GET['id'];

			
						function createRandomPassword() {
					$chars = "abcdefghijkmnopqrstuvwxyz023456789";
					srand((double)microtime()*1000000);
					$i = 0;
					$pass = '' ;
					while ($i <= 7) {
						$num = rand() % 33;
						$tmp = substr($chars, $num, 1);
						$pass = $pass . $tmp;
						$i++;
					}
					return $pass;
				}
				$confirmation = createRandomPassword();
						

/* mysql_query("update order_details set status='Pending',transaction_code='$confirmation',modeofpayment='Online' where MemberID='$get_id'")or die(mysql_error());
 */


?>

<?php include('header.php'); ?>

<body>
    <?php
    include('navtop.php');
    ?>
    <div id="background">
  

        <div id="page">
            <div id="sidebar">
                <a href="user_index.php" class="logo"><img src="images/wine8.png" alt=""></a>
                <ul>
                    <li>
                        <span><a href="user_index.php"><i class="icon-home icon-large"></i>Home</a></span>
                    </li>
                    <li>
                        <span><a href="user_guitar.php"><i class=" icon-th-large icon-large"></i>Products</a></span>
                    </li>

                    <li>
                        <span><a href="user_about.php"><i class="icon-info-sign icon-large"></i>&nbsp;About US</a></span>
                    </li>

                    <li>
                        <span><a href="user_contact.php"><i class="icon-phone-sign icon-large"></i>Contact US</a></span>
                    </li>


                </ul>
                <?php include('sidebar.php'); ?>
                <div class="newsletter">

                </div>
            </div>
            <div id="content">
                <div class="hero-unit-table">
                    <div id="header">
                        

                    </div>
                    <div id="body">
                        <h3>Payment</h3>
                        <div class="hero-unit-table">

					
						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr"  method="post">
                            <input type="hidden" name="cmd" value="_xclick" />
                            <input type="hidden" name="business" value="surfnshop@gmail.com" />
                            <input type="hidden" name="item_name" value="Bags" />
								
                               <?php
                                    $cart_table = mysql_query("select  * from order_details where memberID='$ses_id'") or die(mysql_error());
                                    $cart_count = mysql_num_rows($cart_table);
                                    while ($cart_row = mysql_fetch_array($cart_table)) {
                                        $order_id = $cart_row['orderid'];
                                        $product_id = $cart_row['productID'];
                                        $product_query = mysql_query("select * from tb_products where productID='$product_id'") or die(mysql_error());
                                        $product_row = mysql_fetch_array($product_query);
                                        ?>
                            
                           <input type="hidden" name="item_number" value="<?php $confirmation; ?>" />

                           <?php } ?>
                           
                            <?php
                            if ($cart_count != 0) {
                                $result = mysql_query("SELECT sum(total) FROM order_details WHERE memberID='$ses_id' and status = ''") or die(mysql_error());
                                while ($rows = mysql_fetch_array($result)) {
                                    ?>
                                    <input type="hidden" name="amount" value="<?php echo $rows['sum(total)']; ?>" />
                                <?php }
                            } ?>


                            <input type="hidden" name="no_shipping" value="<?php echo 2; ?>" />
                            <input type="hidden" name="no_note" value="2" />
                            <input type="hidden" name="currency_code" value="PHP" />
                            <input type="hidden" name="lc" value="GB" />
                            
                            <input type="image" src="paypal_button.png" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" style="margin-left: 280px;" class="img-rounded" />
                            <img alt="fdff" border="0" src="paypal_button.png" width="1" height="1" />
                            <!-- Payment confirmed -->
                            <input type="hidden" name="return" value="https://tameraplazainn.x10.mx/savingreservation.php?confirmation<?php echo $confirmation; ?>" />
                            <!-- Payment cancelled -->
                            <input type="hidden" name="cancel_return" value="http://tameraplazainn.x10.mx/cancel.php" />
                            <input type="hidden" name="rm" value="2" />
                            <input type="hidden" name="notify_url" value="http://tameraplazainn.x10.mx/ipn.php" />
                            <input type="hidden" name="custom" value="any other custom field you want to pass" />
							
					
                        </form>
						
					
                           
                    </div>
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



						
                               