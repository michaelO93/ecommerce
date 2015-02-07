<!--<div class="row">-->

    <?php foreach ($all_collections as $all_collection): ?>
        <?php
        echo Form::open(array('url' => 'AddToCart', 'method' => 'post'));
        ?>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="<?php echo $all_collection['product_img']; ?> " alt="<?php echo $all_collection['product_img']; ?>" style="width: 325px; height: 200px;">
                <div class="caption">
                    <h3><?php echo $all_collection['product_name']; ?></h3>
                    <p>Tk<?php echo $all_collection['product_price']; ?></p>
                    <p><?//= $all_collection['_id'] ?></p>
                    <!--<div class="col-md-4">-->
                    <div class="form-group">
                        Quantity:
                        <input type="text" name="quantity" class="form-control" placeholder="Quantity" value="1">
                    </div>
                    <input type="hidden" name="id" value="<?php echo $all_collection->_id ?>">
                    <button type="submit" class="btn btn-default">Add To Cart</button>
                </div>
            </div>
        </div>
    </form>
<?php endforeach; ?>
<!--</div>-->