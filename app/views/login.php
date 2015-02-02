<?php echo Form::open(array('url' => 'login', 'method' => 'post')); ?>
<h2 class="text-danger" style="text-align: center">Login</h2>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
            <label>
                <input type="checkbox"> Remember me
            </label>
        </div>
    </div>
</div>



<button type="submit" class="btn btn-default">Submit</button>
</form>