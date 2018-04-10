
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('posts/edit'); ?>
<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
  <div class="form-group">
    <label for="exampleFormControlInput1">Post Title</label>
    <input type="test" name="title" class="form-control" id="exampleFormControlInput1" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Post Discription</label>
    <textarea class="form-control" name="body" id="editor1" rows="5"><?php echo $post['body']; ?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Baner Image</label><br>
    <img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image'] ?>" class="img-thumbnail" height="250px" width="250">
    <input type="file"  name="userfile">
  </div>
  <button type="submit" value="submit" class="btn btn-primary mb-2">Submit</button>

</form>
