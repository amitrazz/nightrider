<?php echo validation_errors(); ?>
<?php echo form_open_multipart('sliders/edit'); ?>
<?php foreach($sliders as $slider): ?>
<input type="hidden" name="id" value="<?php echo $slider['id']; ?>">
  <div class="form-group">
    <label for="exampleFormControlInput1">Slider Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="<?php echo $slider['name']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Slider Heading</label>
    <input type="text" name="heading" class="form-control" id="exampleFormControlInput1" value="<?php echo $slider['heading']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Captions</label>
    <textarea class="form-control" name="caption" id="exampleFormControlTextarea1" rows="2"> <?php echo $slider['caption']; ?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">OLd Images</label><br>
    <img src="<?php echo site_url(); ?>assets/images/slider/<?php echo $slider['slider_image']; ?>" class="img-thumbnail" height="150" width="350">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Slider Image</label>
    <input type="file" name="userfile"  class="form-control-file" id="image_file">
  </div>
  <button type="submit" vlaue="submit" class="btn btn-primary mb-2">Submit</button>
<?php endforeach; ?>
</form
