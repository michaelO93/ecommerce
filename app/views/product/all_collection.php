<div class="row">
    
    
    <?php foreach ($now as $all_collection): ?>

        <div class="col-xs-3">
            <a class="thumbnail">
                <img class="img-responsive" src="<?php echo $all_collection['product_img']; ?>"  ?>
                <h4 style="height: 46px" class="text-center text-muted"><?php echo $all_collection['product_name']; ?></h4>
                <div style="margin: 0 -5px"><hr></div>
                <div class="row">
                    <div class="col-xs-6">
                        
                        <div class="pull-right" style="color: black;">Tk <?php echo $all_collection['product_price']; ?></div>
                        
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>