<table class="table table-bordered">
    <th>product Image</th>
    <th>product name</th>
    <th>product quantity</th>
     <th>product price</th>
    <?php $price=0; ?>
    
    <?php foreach ($carts as $cart): ?>
        <tr>
            <td><img src="<?php echo $cart->product_img; ?>" style="width:100px; height:100px;" > </td>

            <td><?php echo $cart->product_name; ?> </td>
            <td><?php echo $cart->product_quantity; ?></td>
            <td><?php echo $cart->product_price;
           $price=$price+$cart->product_price;         
            ?> </td>
            
             
        </tr>
    <?php endforeach; ?>
        <tr>
            <td style="border:0px"></td>
            <td style="border:0px"></td>
            <td style="border:0px">Total Price</td>
            <td><?php echo $price ?></td>      
        </tr>
</table>
