<table class="table table-bordered">
    <th>product_name</th>
    <th>product_price</th>
    <?php foreach ($carts as $cart): ?>
        <tr>
            <td><?php print_r($cart) ; //echo $cartproduct_name; ?></td>
            <td><?php echo $cart->product_price ; ?></td>
        </tr>
    <?php endforeach; ?>
</table>