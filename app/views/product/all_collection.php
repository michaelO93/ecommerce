<div class="row">


    <?php foreach ($all_collections as $all_collection): ?>

<!--        <div class="row">-->
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="<?php echo $all_collection['product_img']; ?> " alt="<?php echo $all_collection['product_img']; ?>" style="width: 325px; height: 200px;">
                    <div class="caption">
                        <h3><?php echo $all_collection['product_name'];?></h3>
                        <p>Tk<?php echo $all_collection['product_price'];?></p>
                        <p><a href="/AddToCart/<?php echo $all_collection['id']; ?>" class="btn btn-primary" role="button">Add To Cart</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
        <!--</div>-->
    <?php endforeach; ?>
</div>