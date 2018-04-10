<!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3">Login
</h1>
<ol class="breadcrumb">
<li class="breadcrumb-item">
  <a href="<?php echo base_url();?>">Home</a>
</li>
<li class="breadcrumb-item active">Login</li>
</ol>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('users/login'); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">UseName</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" value="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<br>
<br>
<br>
<br>
<br>