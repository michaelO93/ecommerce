<table class="table table-bordered">
    <th>product Image</th>
    <th>product name</th>
    <th>product quantity</th>
    <th>product price</th>
    <th>Action</th>

    <?php $price = 0; ?>

    <?php foreach ($carts as $cart): ?>
        <?php
        echo Form::open(array('url' => 'CartUpdate', 'method' => 'post'));
        ?>
        <tr>
            <td><img src="<?php echo $cart->product_img; ?>" style="width:100px; height:100px;" > </td>
            <td><?php echo $cart->product_name; ?> </td>

            <td><input type="text"style="width:30px;" name="product_quantity"value="<?php echo $cart->product_quantity; ?>" >
                <input type="hidden" name="id" value="<?php echo $cart->_id ?>">
                </form>
                
                <button type="submit" class="btn btn-default">Update</button></td>

            <td><?php
                echo $cart->product_price;
                $price = $price + $cart->product_price;
                ?> </td>
            <td><a href="delete_product_session/<?php echo $cart['_id']; ?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td style="border:0px"></td>
        <td style="border:0px"></td>
        <td style="border:0px">Total Price</td>
        <td><?php echo $price ?></td>      
    </tr>
</table>

