<?php echo validation_errors(); ?>
<?php echo form_open_multipart('sliders/create'); ?>
  <div class="form-group">
    <label for="exampleFormControlInput1">Slider Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="slider Name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Slider Heading</label>
    <input type="text" name="heading" class="form-control" id="exampleFormControlInput1" placeholder="slider Heading">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Captions</label>
    <textarea class="form-control" name="caption" id="exampleFormControlTextarea1" rows="2"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Slider Image</label>
    <input type="file" name="userfile" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Submit</button>
</form>