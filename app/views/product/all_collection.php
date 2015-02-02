<div class="row">

    <?php foreach ($all_collections as $all_collection): ?>
        <?php
        echo Form::open(array('url' => 'AddToCart', 'method' => 'post'));
        // echo Form::open(array('action' => array('SessionController@AddToCart')));
        ?>
        <!--        <div class="row">-->
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="<?php echo $all_collection['product_img']; ?> " alt="<?php echo $all_collection['product_img']; ?>" style="width: 325px; height: 200px;">
                <div class="caption">
                    <h3><?php echo $all_collection['product_name']; ?></h3>
                    <p>Tk<?php echo $all_collection['product_price']; ?></p>
                    <!--<div class="col-md-4">-->
                    <div class="form-group">
                        Quantity:
                        <input type="text" name="quantity" class="form-control" placeholder="Quantity">
                    </div>
                    <?php echo Form::hidden('id', $all_collection->_id); ?>
                    <button type="submit" class="btn btn-default">Add To Cart</button>
                 <!--<a href="/AddToCart/<?php //echo $all_collection['id'];   ?>" class="btn btn-primary" role="button">Add To Cart</a>-->
                </div>

                <!--</div>-->
            </div>
        </div>
        <?php Form::close() ?>
        <?php Form::close() ?>
        <!--</div>-->
    <?php endforeach; ?>
</div>