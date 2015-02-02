<h2 class="text-danger" style="text-align: center">Update Your Information</h2>
<?php echo Form::open(array('url' => 'update', 'method' => 'post')); ?>

<div class="form-group">
    <label for="exampleInputName">*User Name</label>
    <input type="text" class="form-control" name="username" value="<?php echo $users->username; ?>">
</div>
<div class="form-group">
    <label for="exampleInputMobile">*Mobile No</label>
    <input type="text" class="form-control" name="mobile" value="<?php echo $users->mobile; ?>">
</div>
<div class="form-group">
    <label for="exampleInputLocation">Location</label>
    <input type="text" class="form-control" name="location" value="<?php echo $users->location; ?>">
</div>
<div class="form-group">
    <label for="exampleInputPassword">*Password</label>
    <input type="password" class="form-control" name="password" >
</div>

<button type="submit" class="btn btn-default">Submit</button>
</form>