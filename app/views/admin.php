<div class="row">
    <?php echo Form::open(array('url' => 'admin', 'method' => 'post', 'files' => 'true')); ?>

    <div class="form-group">
        <label for="product_categoty">Product Categoty</label>
        <select name="category" class="form-control">  
            <option value="wear">Wear Collection</option>
            <option value="computer">Computer Accesories</option>
            <option value="hardware">Hardware Collection</option>
            <option value="eee">EEE Products</option>
        </select>
    </div>
    <div class="form-group">
        <label for="product_name">Product Name</label>
        <input type="text" name="product_name" class="form-control" placeholder="Product Name">
    </div>
    <div class="form-group">
        <label for="product_price">Product Price</label>
        <input type="text" name="product_price" class="form-control" placeholder="Product Price">
    </div>
    <div class="form-group">
        <label for="product_img">Product Image</label>
        <input type="file" name="product_img">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
    <button type="reset" class="btn btn-primary">Reset</button>
</form>
</div>