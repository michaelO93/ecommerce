<div class="row">

    <?php echo Form::open(array('url' => 'myproductedit', 'method' => 'post', 'files' => 'true')); ?>

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
        <input type="text" name="product_name" class="form-control" value="<?php echo $editproducts->product_name ?>">
    </div>
    <div class="form-group">
        <label for="product_price">Product Price</label>
        <input type="text" name="product_price" class="form-control" value="<?php echo $editproducts->product_price ?>">
    </div>
    <div class="form-group">
        <label for="product_img">Product Image</label>
        <input type="file" name="product_img">
    </div>
    <input type="hidden" name="id" value="<?php echo $editproducts->_id ?>">
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

