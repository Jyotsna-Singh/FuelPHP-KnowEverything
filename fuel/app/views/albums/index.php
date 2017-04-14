
            <div class="col-lg-12">
                <h1 class="page-header">Videos</h1>
            </div>
		<?php if(Session::get_flash('success')) : ?>
			<div class="alert alert-success"><?php echo Session::get_flash('success'); ?></div>	
		<?php endif; ?>
		<?php if(Session::get_flash('error')) : ?>
			<div class="alert alert-danger"><?php echo Session::get_flash('error'); ?></div>	
		<?php endif; ?>
			<?php foreach($albums as $album) : ?>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <div class="thumbnail" href="#">
                    <img class="img-responsive album-img" src="<?php echo $album->cover_url; ?>" alt="">
					<h5 class="text-center"><strong><?php echo $album->author; ?> || <?php echo $album->title; ?></strong></h5>
					<a class="btn btn-primary btn-block" href="/albums/view/<?php echo $album->id; ?>">View Video</a>
                </div>
            </div>
           <?php endforeach; ?>