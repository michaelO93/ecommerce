<div class="row">
    <?php echo Form::open(array('url' => 'admin', 'method' => 'post', 'files' => 'true')); ?>
    <div class="form-group">
        <label for="product_name">Product Name</label>
        <input type="text" name="product_name" class="form-control" placeholder="Product Name">
    </div>
    <div class="form-group">
        <label for="product_price">Product Price</label>
        <input type="text" name="product_price" class="form-control">
    </div>
    <div class="form-group">
        <label for="product_img">Product Image</label>
        <input type="file" name="product_img">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
    <button type="reset" class="btn btn-primary">Reset</button>
</form>
</div>