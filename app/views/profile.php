
<h1>My profile</h1>
<table class="table table-bordered">
    <tr>   
    <td class="text-success">Username:</td><td><?php echo $users->username; ?></td>
    </tr>
    <tr>
    <td class="text-success">Email:</td><td><?php echo $users->email; ?></td>
    </tr>
    <tr>
    <td class="text-success">Mobile No:</td><td><?php echo $users->mobile; ?></td>
    </tr>
    <tr>
    <?php if ($users->location): ?>  <td class="text-success">Location:</td><td><?php echo $users->location; ?></td><?php endif;?>
    </tr> 

</table>
<a href="/update" class="btn btn-primary" role="button">Update</a> 