
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label for="exampleFormControlInput1">Post Title</label>
    <input type="test" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Post Title Here">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Post Discription</label>
    <textarea class="form-control" name="body" id="editor1" rows="5"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Post Baner Image</label>
    <input type="file" name="userfile" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <button type="submit" value="submit" class="btn btn-primary mb-2">Submit</button>
</form>
