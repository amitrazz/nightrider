<!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3">Register
</h1>
<ol class="breadcrumb">
<li class="breadcrumb-item">
  <a href="<?php echo base_url();?>">Home</a>
</li>
<li class="breadcrumb-item active">Register</li>
</ol>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('users/register'); ?>
  <div class="row">
  <div class="col">
    <input type="text" name="first_name" class="form-control" placeholder="First name">
  </div>
  <div class="col">
    <input type="text" name="last_name" class="form-control" placeholder="Last name">
  </div>
  </div>
  <br>
  <div class="form-group">
    <input type="email" name="email" class="form-control"  placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <input type="text" name="mobile" class="form-control"  placeholder="Mobile NO">
  
  </div>
  <div class="form-group">
    <input type="text" name="username" class="form-control"  placeholder="UserName">
  
  </div>
  <div class="form-group">
    <input type="password" name="password" class="form-control"  placeholder="Password">
  </div>
  <div class="form-group">
    <input type="password" name="confirm_password" class="form-control"  placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Profile image</label>
    <input type="file" name="userfile" class="form-control-file">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
