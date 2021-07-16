<div class="navbar navbar-fixed-top">
    <div class="navbar-inner2">
        <div class="name">
            <div class="alert alert-info2">
                Welcome:
                <?php
                $user_query = mysql_query("select * from tb_member where memberID='$ses_id'") or die(mysql_error());
                $row = mysql_fetch_array($user_query);
                echo $row['Firstname'] . " " . $row['Lastname'];
                ?>
            </div>
            <div class="btn-group">
                <a href = "logout.php" class = "btn"><i class="icon-cog icon-large"></i>&nbsp;Log out</a>
                <button class="btn dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="logout.php"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
                </ul>
            </div>
            <div class="pull-right"> <a href="user_cart.php" class="btn btn-info"><i class="icon-shopping-cart icon-large"></i>&nbsp;My Cart
                    <?php
                    $count_query = mysql_query("select * from order_details where memberID='$ses_id' and status='Pending'") or die(mysql_error());
                    $count = mysql_num_rows($count_query);
                    ?>
                    (<?php echo $count; ?>)      
                </a>

            </div>
          
            </br>



        </div>   
    </div>
</div>