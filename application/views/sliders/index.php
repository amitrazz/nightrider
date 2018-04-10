<a href="<?php echo base_url();?>/sliders/create" class="btn btn-primary pull-right">Add slider</a>
<br>
<br>

<table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Heading</th>
        <th>caption</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($sliders as $slider): ?>
      <tr>
        <td> <?php echo $slider['name']; ?></td>
        <td> <?php echo $slider['heading']; ?></td>
        <td> <?php echo $slider['caption']; ?></td>
        <td>  <img src="<?php echo site_url(); ?>assets/images/slider/<?php echo $slider['slider_image']; ?>" class="img-thumbnail" height="150" width="150"> </td>
        <td> 
        <a href="<?php echo base_url();?>sliders/delete/<?php echo $slider['id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
        <a href="<?php echo base_url();?>sliders/edit/<?php echo $slider['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
