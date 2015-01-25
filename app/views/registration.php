<h2 class="text-danger" style="text-align: center">Registration</h2>
<?php echo Form::open(array('url' => 'register', 'method' => 'post')); ?>

<div class="form-group">
    <label for="exampleInputEmail1">*User Name</label>
    <input type="text" class="form-control" name="username" placeholder="Enter name">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">*Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">*Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
</div>

<button type="submit" class="btn btn-default">Submit</button>
</form>

