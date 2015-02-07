
    <?php foreach ($myproducts as $myproduct): ?>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="<?php echo $myproduct['product_img']; ?> " alt="<?php echo $myproduct['product_img']; ?>" style="width: 325px; height: 200px;">
                <div class="caption">
                    <h3><?php echo $myproduct['product_name']; ?></h3>
                    <p>Tk<?php echo $myproduct['product_price']; ?></p>
                    <p><?//= $myproduct['_id'] ?></p>           
                    <a href="/myproductupdate/<?php echo $myproduct->_id ?>" class="btn btn-primary" role="button">Update</a> 
                </div>
            </div>
        </div>
    </form>
<?php endforeach; ?>
