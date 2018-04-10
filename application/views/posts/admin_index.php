

 <table class="table table-striped">
    <thead>
      <tr>
        <th width="150px">Post Name</th>
        <th>discription</th>
        <th>Post baner</th>
        <th>ACtionr</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($posts as $post): ?>
      <tr>
        <td><?php echo $post['title']; ?></td>
        <td><?php echo word_limiter($post['body'],40); ?></td>
        <td><img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image'] ?>" class="img-rounded" height="100px" width="200px"></td>
        <td>
        <a href="<?php echo base_url();?>posts/delete/<?php echo $post['id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
        <a href="<?php echo base_url();?>posts/edit/<?php echo $post['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>