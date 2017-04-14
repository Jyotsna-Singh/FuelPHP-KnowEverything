<a href="/" class="btn btn-default">Go Back</a>
<div class="pull-right">
<a href="/albums/edit/<?php echo $album->id; ?>" class="btn btn-success">Edit</a>
<a href="/albums/delete/<?php echo $album->id; ?>" class="btn btn-danger">Delete</a>
</div>
<hr>

<div class="row album">
	<div class="col-md-5">
		<img src="<?php echo $album->cover_url; ?>">
	</div>
	<div class="col-md-7">
		<h3><?php echo $album->title; ?></h3>
		<ul class="list-group">
			<li class="list-group-item"><strong>Author: </strong> <?php echo $album->author; ?></li>
			<li class="list-group-item"><strong>Release Year: </strong> <?php echo $album->year_released; ?></li>
			<li class="list-group-item"><strong>Category: </strong> <?php echo $album->category; ?></li>
			<br>
			<a href="<?php echo $album->link; ?>" target="_blank" class="btn btn-success">View On Youtube</a>
		</ul>
		<div class="well">
			<h3>Other Details</h3>
			<?php echo $album->details;?>
		</div>
	</div>
</div>