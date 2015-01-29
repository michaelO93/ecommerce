<table class="table table-bordered">
    <th>product_name</th>
    <th>product_price</th>
    <?php foreach ($carts as $cart): ?>
        <tr>
        <pre><?php print_r($cart); ?> </pre>
        <td> <?php echo $cart[0][0]['product_name']; ?></td>

    </tr>
<?php endforeach; ?>
</table>