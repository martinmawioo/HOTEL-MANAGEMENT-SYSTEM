<!-- order modal -->
<form method="POST">
    <div id="add<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
        </div>
        <div class="modal-body">
            <!-- hidden -->
            <input type="hidden" name="product_id" value="<?php echo $id; ?>">
            <input type="hidden" name="member_id" value="<?php echo $ses_id; ?>">
            <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
            <!-- end hidden -->
            <div class="span2">
                <img src="admin/<?php echo $row['location']; ?>" width="200" height="200" class="img-rounded">      
            </div>
            <div class="span3">
                <div class="alert alert-danger"> <p>&nbsp;&nbsp;&nbsp;&nbsp;Name:</p></div>   
                <div class="langah">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['name'] ?></div>

                <div class="alert alert-danger"> <p>&nbsp;&nbsp;&nbsp;&nbsp;Price:</p></div>
                <div class="langah">&nbsp;&nbsp;&nbsp;&nbsp;P&nbsp;<?php echo $row['price'] ?></div>
                <div class="alert alert-danger"> <p>&nbsp;&nbsp;&nbsp;&nbsp;Quantity:</p></div>
                <p><input id="cnet" class="span1" max="<?php echo $total_qty; ?>" type="number" name="quantity" value="1" required></p>
				<p>In stock Item <span class="badge badge-warning"><?php echo $total_qty; ?></span></p>
				<br>
                <button type="submit" name="order" class="btn btn-success"><i class="icon-plus-sign"></i>&nbsp;Add</button>
                <button class="btn" name="order" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Cancel</button>
            </div>

        </div>
        </li>
</form>
<!-- picture modal -->
<div id="<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    </div>
    <div class="modal-body">

        <div class="span2">

            <img src="admin/<?php echo $row['location']; ?>" width="200" height="200" class="img-rounded">      
        </div>
        <div class="span3">
            <div class="alert alert-danger"> <p>&nbsp;&nbsp;&nbsp;&nbsp;Description:</p></div>   
            <div class="langah">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['description'] ?></div>
            <div class="alert alert-danger"> <p>&nbsp;&nbsp;&nbsp;&nbsp;Origin:</p></div>
            <div class="langah">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['originated'] ?></div>
            <div class="alert alert-danger"> <p>&nbsp;&nbsp;&nbsp;&nbsp;Price:</p></div>
            <div class="langah">&nbsp;&nbsp;&nbsp;&nbsp;P&nbsp;<?php echo $row['price'] ?></div>
        </div>





    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Close</button>

    </div>
</div>
<!-- end modal -->