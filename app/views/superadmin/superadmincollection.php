    <?php foreach ($all_collections as $all_collection): ?>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="<?php echo $all_collection['product_img']; ?> " alt="<?php echo $all_collection['product_img']; ?>" style="width: 325px; height: 200px;">
                <div class="caption">
                    <h3><?php echo $all_collection['product_name']; ?></h3>
                    <p>Tk<?php echo $all_collection['product_price']; ?></p>
                    <p><?//= $all_collection['_id'] ?></p>
                    <!--<div class="col-md-4">-->
                    <input type="hidden" name="id" value="<?php echo $all_collection->_id ?>">
                    <a href="/deleteproduct/<?php echo $all_collection->_id; ?>" class="btn btn-default btn-md" role="button">Delete</a>
                </div>
            </div>
        </div>
    </form>
<?php endforeach; ?>
