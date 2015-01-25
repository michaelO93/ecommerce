<table class="table table-bordered">
    <th>Name</th>
    <th>Email</th>
    <th>Delete</th>
    <th>Update</th>
    <?php
    foreach ($users as $user) {
        ?>
        <tr>
            <td class="text-danger"><?php echo $user->name ?></td>
            <td><?php echo $user->email ?></a></td>
            <td><a href="/delete/<?php echo $user->id; ?>">Delete</a></td>
            <td><a href="/update/<?php echo $user->id; ?>">Update</a></td>
        </tr>
    <?php } ?>
</table>