<table class="table table-bordered">
    <th>product_name</th>
    <th>product_price</th>
    <?php $carts = Session::get('product');
    foreach ($carts as $cart):
        ?>
        <tr>
            <td> <?php echo $cart[0]['product_name']; ?></td>
            <td><?php echo $cart[0]['product_price']; ?></td>
        </tr>
<?php endforeach; ?>
</table>