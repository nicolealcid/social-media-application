<div class="row">
    <div class = "col-md-6">
    <h3>CRUD CakePHP</h3>
</div>
<div class="col-md-6 text-right">
    <a href= "" class ="btn btn-primary">Add Data</a>
</div>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Detail</th>
            <th width="160">Action</th>
</tr>
</thead>
<tbody>
    <?php
    foreach($posts as $post):
    ?>
    <tr>
        <td><?php echo $post->id ?></td>
        <td><?php echo $post->name ?></td>
        <td><?php echo $post->detail ?></td>
        <td>
            <a href="" class= "btn btn-warning">Edit</a>
            <a href="" class= "btn btn-danger">Delete</a>
        </td>
    </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>
